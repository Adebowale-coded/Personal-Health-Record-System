<?php
session_start();
require("dbconn.php");
if (isset($_POST['submit'])) {



  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $occupation = $_POST['occupation'];
  $bloodgroup = $_POST['bloodgroup'];
  $maritalstatus = $_POST['maritalstatus'];
  $homeaddress = $_POST['homeaddress'];
  $currentaddress = $_POST['currentaddress'];
  $country = $_POST['country'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $contact = $_POST['contact'];
  $ethnicity = $_POST['ethnicity'];


  mysqli_query($con, "INSERT INTO `patient`(`firstname`, `lastname`, `email`, `gender`, `dob`, `occupation`, `bloodgroup`, `maritalstatus`, `homeaddress`, `currentaddress`, `country`, `state`, `city`, `contact`, `ethnicity`)
   VALUES('$firstname','$lastname','$email','$gender','$dob','$occupation','$bloodgroup','$maritalstatus','$homeaddress', '$currentaddress','$country','$state',' $city','$contact','$ethnicity')");
?>
  <script>
    alert("Patient Added");
    window.location.href = 'addpatient.php';
  </script>
<?php
}

if (isset($_POST['editsubmit'])) {
  $id = $_GET['id'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $occupation = $_POST['occupation'];
  $bloodgroup = $_POST['bloodgroup'];
  $maritalstatus = $_POST['maritalstatus'];
  $homeaddress = $_POST['homeaddress'];
  $currentaddress = $_POST['currentaddress'];
  $country = $_POST['country'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $contact = $_POST['contact'];
  $ethnicity = $_POST['ethnicity'];


  mysqli_query($con, "UPDATE `patient` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`gender`='$gender',`dob`='$dob',`occupation`='$occupation',`bloodgroup`='$bloodgroup',`maritalstatus`='$maritalstatus',`homeaddress`='$homeaddress',`currentaddress`='$currentaddress',`country`='$country',`state`='$state',`city`='$city',`contact`='$contact',`ethnicity`='$ethnicity' WHERE `id` = '$id'");
?>
  <script>
    alert("Patient Record Updated");
    window.location.href = 'patientlist.php';
  </script>
<?php
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add List</title>
  <link rel="icon" href="img/logo2.png" type="image/x-icon">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <script src="assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="font-6/css/all.css">
  <link rel="stylesheet" href="css/dashboard.css">


</head>

<body>
  <div class="d-flex" id="wrapper">

    <div class="text-white" id="sidebar-wrapper" style="background: rgb(31, 27, 46);">

      <div class="sidebar-heading text-center py-4  fs-4 fw-bold ">
        <label class="fw-light" style="color: rgb(255, 1, 234); font-weight: bold; font-family: poppins;">Personal</label> HRS
      </div>

      <div class="list-group list-group-flush my-3">
        <a href="dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text active text-white">
          <i class="fas fa-tachometer-alt me-2"></i>Dashboard
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active text-white">
          <i class="fas fa-plus me-2"></i>Add Patient
        </a>
        <a href="patientlist.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white">
          <i class="fas fa-list me-2"></i>Patient List
        </a>
        <a href="" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white">
                <i class="fas fa-paperclip me-2"></i> Book Apointment
            </a>
        <a href="medhistory.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white">
          <i class="fas fa-chart-line me-2"></i>Medical History
        </a>
        <a href="" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
          <i class="fas fa-project-diagram me-2"></i>Log out
        </a>
      </div>

    </div>


    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
          <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
          <h2 class="fs-2 m-0">Hi Doc</h2>
        </div>

      </nav>

      <!--After the dashboard nav-->

      <div style="color: red; font-weight: bolder; margin-left: 2%;">
        <p>Add Patient</p>
      </div>


      <form class="container flex-column mt-5 ms-2" style="width: 100%;" method="post">
        <div class="heading" style="color: white; font-size: 10px;">
          <h5>Basic Info</h5>
        </div>
        <?php
        $id = $_GET['id'];

        $query = "SELECT * FROM `patient` WHERE `id` = '$id'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);

        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $email = $row['email'];
        $gender = $row['gender'];
        $dob = $row['dob'];
        $occupation = $row['occupation'];
        $bloodgroup = $row['bloodgroup'];
        $maritalstatus = $row['maritalstatus'];
        $homeaddress = $row['homeaddress'];
        $currentaddress = $row['currentaddress'];
        $country = $row['country'];
        $state = $row['state'];
        $city = $row['city'];
        $contact = $row['contact'];
        $ethnicity = $row['ethnicity'];
        ?>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="text" class="form-control" value="<?php echo $email ?>" name="email" placeholder="@gmail.com" required>
        </div>

        <div class="mb-3">
          <label class="form-label">First Name</label>
          <input type="text" class="form-control" value="<?php echo $firstname ?>" name="firstname" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Last Name</label>
          <input type="text" class="form-control" value="<?php echo $lastname ?>" name="lastname" required>
        </div>

        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->


        <!--sECOND fORM--><!--sECOND fORM--><!--sECOND fORM--><!--sECOND fORM-->


        <div class="container flex-column mt-2" style="width: 100%;">
          <div class="heading" style=" color: white; font-size: 10px;">
            <h5>Personal Details</h5>
          </div>
          <div class="mb-3">
            <label class="form-label">Gender</label>
            <input type="text" class="form-control" value="<?php echo $gender ?>" name="gender" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Birth Date</label>
            <input type="date" class="form-control" value="<?php echo $dob ?>" name="dob" placeholder="yyyy/mm/dd" required>




            <!--<select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>-->
          </div>

          <div class="mb-3">
            <label class="form-label">Occupation</label>
            <input type="text" class="form-control" value="<?php echo $occupation ?>" name="occupation" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Blood Group</label>
            <input type="text" class="form-control" value="<?php echo $bloodgroup ?>" name="bloodgroup" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Marital Status</label>
            <input type="text" class="form-control" value="<?php echo $maritalstatus ?>" name="maritalstatus" required>
          </div>
        </div>




        <div class="heading" style=" color: white; font-size: 10px;">
          <h5>Contact Details</h5>
        </div>
        <div class="mb-3">
          <label class="form-label">Home Address</label>
          <input type="text" class="form-control" value="<?php echo $homeaddress ?>" name="homeaddress" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Current Address</label>
          <input type="text" class="form-control" value="<?php echo $currentaddress ?>" name="currentaddress" placeholder="" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Country</label>
          <input type="text" class="form-control" value="<?php echo $country ?>" name="country" required>
        </div>

        <div class="mb-3">
          <label class="form-label">State/Province</label>
          <input type="text" class="form-control" value="<?php echo $state ?>" name="state" required>
        </div>

        <div class="mb-3">
          <label class="form-label">City</label>
          <input type="text" class="form-control" value="<?php echo $city ?>" name="city" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Contact No</label>
          <input type="text" class="form-control" value="<?php echo $contact ?>" name="contact" required>
        </div>

        <div class="mb-5">
          <label class="form-label">Ethnicity</label>
          <input type="text" class="form-control" value="<?php echo $ethnicity ?>" name="ethnicity" required>
        </div>

        <button type="submit" class="btn btn-primary" name="editsubmit">Save</button>
      </form>
    </div>














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script>
      var el = document.getElementById("wrapper")
      var toggleButton = document.getElementById("menu-toggle")

      toggleButton.onclick = function() {
        el.classList.toggle("toggled")
      }
    </script>
</body>

</html>