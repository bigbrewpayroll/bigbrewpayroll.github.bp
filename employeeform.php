<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="css/employeeform.css">
    <link rel="stylesheet" href="css/topsidenavbars.css">
    <link rel="icon" href="images/bigbrewpic2.jpg">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
    <header class="header">
      <nav class="topnav">
          <a class="active" href="index.php">Logout</a>  
      </nav>   
    </header>
    <section class="sidebar">
              <div class="logo-sidebar">ADMIN</div>
                <ul>
                  <li><a href="dashboard.php"><i class="fas fa-box"></i>Dashboard</a></li>
                  <li><a href="attendance.php"><i class="fas fa-equals"></i>DTR</a></li>
                  <!-- <li><a href="employeelist.html"><i class="fas fa-users"></i>Employee List</a></li> -->
                  <li><a href="positionlist.php"><i class="fas fa-user-tie"></i>Employee Management</a></li>
                  <li><a href="schedule.php"><i class="fas fa-credit-card"></i>Schedule</a></li>
                  <li><a href="dailytimerecord.php"><i class="fas fa-calendar"></i>Reports</a></li>
                  <li><a href="admin_user.php"><i class="fas fa-user"></i>Admin Users</a></li> 
              </ul>
        </div>
    </section>       
<main class="main">  
  <div class="card-body">
      <div class="logo-main">EMPLOYEE FORM</div>
      <div class="form-content">
        <form class="form" action="save_employee.php" method="post" onreset="resetForm()">
          <div class="row-content">
              <label class="label text" for="lname">Last Name:</label>
              <input class="input" type="text" id="lname" name="lname" placeholder="Enter Last Name" required />
          </div>
          <div class="row-content">
              <label class="label text" for="fname">First Name:</label>
              <input class="input" type="text" id="fname" name="fname" placeholder="Enter First Name" required />
          </div>
          <div class="row-content">
              <label class="label text" for="mid">Middle Initial:</label>
              <input class="input" type="text" id="mid" name="mid" placeholder="Enter Middle Initial" required />
          </div>
          <div class="row-content">
              <label class="label text" for="mobile_number">Mobile Number:</label>
              <input class="input" type="text" id="mobile_number" name="mobile_number" placeholder="Enter Mobile No." required />
          </div>
          <div class="row-content">
              <label class="label text" for="employee_id">ID:</label>
              <input class="input" type="text" id="employee_id" name="employee_id" placeholder="Enter ID" required />
          </div>
          <div class="row-content">
            <label class="label text" for="barangay">Barangay</label>
            <input class="input" type="text" id="barangay" name="barangay" placeholder="Enter Barangay" required />
        </div>
        <div class="row-content">
          <label class="label text" for="street">Street</label>
          <input class="input" type="text" id="street" name="street" placeholder="Enter Street" required />
      </div>
      <div class="row-content">
        <label class="label text" for="city">City</label>
        <input class="input" type="text" id="city" name="city" placeholder="Enter City" required />
    </div>
      <div class="row-content">
        <label class="label text" for="postal_code">Postal</label>
        <input class="input" type="text" id="postal" name="postal_code" placeholder="Enter Postal Code" required />
    </div>
    
          <!-- <div class="row-content">
            <label class="label text" for="email">Email:</label>
            <input
              class="input"
              type="text"
              id="email"
              name="email"
              placeholder="Email Address"
              required
            />
          </div> -->
          <div class="row-content">
            <label class="label text" for="gender">Sex:</label>
            <div>
              <label>
                <input
                  type="radio"
                  id="male"
                  name="gender"
                  value="male"
                  required
                />
                <label class="text" for="male">Male</label>
              </label>
              <label>
                <input
                  type="radio"
                  id="female"
                  name="gender"
                  value="female"
                  required
                />
                <label class="text" for="female">Female</label>
              </label>
              <label>
                <input
                  type="radio"
                  id="others"
                  name="gender"
                  value="others"
                  required
                />
                <label class="text" for="other">Others</label>
              </label>
              </label>
            </div>
          </div>
          <div class="row-content">
            <label class="label text" for="gender">Type Of Work:</label>
            <div>
              <label>
                <input
                  type="radio"
                  id="OnCall"
                  name="work"
                  value="OnCall"
                  required
                />
                <label class="text" for="OnCall">On Call</label>
                <label>
                  <input
                    type="radio"
                    id="regular"
                    name="work"
                    value="regular"
                    required
                  />
                  <label class="text" for="regular">Regular</label>
              </label>
            </div>
          </div>
          <div class="row-content">
            <label class="label text" for="department">Position:</label>
            <div>
              <label>
                <input
                  class="checkbox"
                  type="checkbox"
                  id="barista"
                  name="department[]"
                  value="Barista"
                />
                <label class="text" for="barista">Barista</label>
              </label>
              <label>
                <input
                  class="checkbox"
                  type="checkbox"
                  id="cashier"
                  name="department[]"
                  value="Cashier"
                />
                <label class="text" for="finance">Cashier</label>
              </label>
              <label>
                <input
                  class="checkbox"
                  type="checkbox"
                  id="engineer"
                  name="department[]"
                  value="Cook"
                />
                <label class="text" for="engineer">Cook</label>
              </label>
             <!--  <label>
                <input
                  class="checkbox"
                  type="checkbox"
                  id="engineer"
                  name="department[]"
                  value="On Call"
                />
                <label class="text" for="engineer">On Call</label>
              </label> -->
              <label>
                <input
                  class="checkbox"
                  type="checkbox"
                  id="others"
                  name="department[]"
                  value="Others"
                />
              <label class="text" for="others">Others</label>
              </label>
                  </div>
                </div>
                <div class="row-content">
                  <label class="label text" for="salary">Salary: </label>
                  <input
                    class="input"
                    type="number"
                    name="salary"
                    id="salary"
                    min="315" step="any"
                    placeholder="Enter salary amount"
                  />
                </div>
                <div class="row-content">
                  <label class="label text" for="start_date">Start Date:</label>
                  <input
                    class="input"
                    type="date"
                    name="start_date"
                    id="start_date"
                    required
                  />
                </div>
                <div class="buttonParent">
                  <div class="submit-reset">
                    <button class="button submitButton" type="submit" id="submitButton">
                      Submit
                    </button>
                    <button class="resetButton button" type="reset">Reset</button>
                  </div>
                </div>
              </form>
            </div>
      </div>
  </main>
  <script>
  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("submitButton").addEventListener("click", function(event) {
      event.preventDefault(); // Prevent form submission

      swal({
        title: "Are you sure?",
        text: "Are you sure you want to add this employee?",
        icon: "warning",
        buttons: {
          confirm: "Yes, add it",
          cancel: "No, Cancel"
        },
        dangerMode: true,
      }).then((willAdd) => {
        if (willAdd) {
          // If user confirms, show "Added Successfully" message and submit the form
          swal("Added Successfully!", "", "success");
          document.querySelector(".form").submit();
        }
      });
    });
  });
</script>


</body>
</html>