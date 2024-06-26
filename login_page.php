<?php
  session_start();
  include("php/database.php");

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = $_POST['username'];
      $password = $_POST['password'];

      $query = "SELECT * FROM admin WHERE username = ?";
      $stmt = mysqli_prepare($connection, $query);
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if ($result && mysqli_num_rows($result) > 0) {
          $user = mysqli_fetch_assoc($result);
          if (password_verify($password, $user['password'])) {
              $_SESSION['username'] = $username;
              header("Location: dashboard.php");
              exit;
          } else {
              $error = "Invalid password";
          }
      } else {
          $error = "User not found";
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/signinpage.css">
    <link rel="icon" href="images/bigbrewpic2.jpg">

  </head>
  <body>
    <div class="wrapper">
    <img src="images/bigbrewpic2.jpg" alt="Logo" class="logo">
        <form action="login_page.php" method="post">
          <h2>Login Panel</h2>
          <h2>Enter username & password</h2>
          <div class="input-box">
            <input type="text" name="username" placeholder="Username" required />
            <i class="bx bxs-user"></i>
          </div>
          <style>
            .form-group {
              position: relative;
              margin-bottom: 20px;
            }
            .error {
              position: absolute;
              top: 100%;
              left: 70%;
              margin-top: 5px;
              color: red;
            }
            
          </style>
          <div class="input-box">
            <input type="password" name="password" placeholder="Password" required />
            <i class="bx bxs-lock-alt"></i>
            <?php if (isset($error)) { ?>
            <div class="error"><?php echo $error; ?></div>
          <?php } ?>
          </div>
          <div class="remember-box">
            <label><input type="checkbox" />Remember me</label>
          </div>
          <button type="submit" class="btn">SUBMIT</button>
           <!--  <div class="register-link">
              <p>Create an account <a href="registration_page.php">Register</a></p>
            </div> -->
        </form>
    </div>
  </body>
</html>
