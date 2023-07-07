<?php
session_start();
require("dbconn.php");

if (isset($_POST['submit'])) {

  $id = $_GET['id'];
  $dateofvisit = $_POST['dateofvisit'];
  $timeofvisit = $_POST['timeofvisit'];
  $reason = $_POST['reason'];
  $bpsystolic = $_POST['bpsystolic'];
  $bpdestolic = $_POST['bpdestolic'];
  $temperature = $_POST['temperature'];
  $pulse = $_POST['pulse'];
  $respiratoryrate = $_POST['respiratoryrate'];
  $weight = $_POST['weight'];
  $height = $_POST['height'];
  $symptomname = $_POST['symptomname'];
  $symptom = $_POST['symptom'];
  $diagnosticsname = $_POST['diagnosticsname'];
  $diagnostics = $_POST['diagnostics'];
  $drugname = $_POST['drugname'];
  $strength = $_POST['strength'];
  $directionsforuse = $_POST['directionsforuse'];
  $quantity = $_POST['quantity'];
  $treatmantdetails = $_POST['treatmantdetails'];
  $doctorreport = $_POST['doctorreport'];

  mysqli_query($con, "UPDATE `medreport` SET `dateofvisit`='$dateofvisit',`timeofvisit`='$timeofvisit',`reason`='$reason',`bpsystolic`='$bpsystolic',`bpdestolic`='$bpdestolic',`temperature`='$temperature',`pulse`='$pulse',`respiratoryrate`='$respiratoryrate',`weight`='$weight',`height`='$height',`symptomname`='$symptomname',`symptom`='$symptom',`diagnosticsname`='$diagnosticsname',`diagnostics`='$diagnostics',`drugname`='$drugname',`strength`='$strength',`directionsforuse`='$directionsforuse',`quantity`='$quantity',`treatmantdetails`='$treatmantdetails',`doctorreport`='$doctorreport' WHERE `id` = $id");

?>

  <script>
    alert("Success");
    window.location.href = window.location.href;
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
  <title>Medical Record</title>
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
        <a href="addpatient.php" class="list-group-item list-group-item-action bg-transparent second-text active text-white">
          <i class="fas fa-plus me-2"></i>Add Patient
        </a>
        <a href="patientlist.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white">
          <i class="fas fa-list me-2"></i>Patient List
        </a>
        <a href="medhistory.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white">
          <i class="fas fa-chart-line me-2"></i>Medical History
        </a>
        <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
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
        <p>Medical Report</p>
      </div>
      <?php
      $patientid = $_GET['patientid'];

      $query1 = "SELECT * FROM `patient` WHERE `id` = '$patientid'";
      $result1 = mysqli_query($con, $query1);
      $row1 = mysqli_fetch_assoc($result1);
      $patientname = $row1['firstname'] . ' ' . $row1['lastname'];
      $email = $row1['email'];

      $id = $_GET['id'];
      $query = "SELECT * FROM `medreport` where `id` = $id";
      $result = mysqli_query($con, $query);
      $row = mysqli_fetch_assoc($result);
      $dateofvisit = $row['dateofvisit'];
      $timeofvisit = $row['timeofvisit'];
      $reason = $row['reason'];
      $bpsystolic = $row['bpsystolic'];
      $bpdestolic = $row['bpdestolic'];
      $temperature = $row['temperature'];
      $pulse = $row['pulse'];
      $respiratoryrate = $row['respiratoryrate'];
      $weight = $row['weight'];
      $height = $row['height'];
      $symptomname = $row['symptomname'];
      $symptom = $row['symptom'];
      $diagnosticsname = $row['diagnosticsname'];
      $diagnostics = $row['diagnostics'];
      $drugname = $row['drugname'];
      $strength = $row['strength'];
      $directionsforuse = $row['directionsforuse'];
      $quantity = $row['quantity'];
      $treatmantdetails = $row['treatmantdetails'];
      $doctorreport = $row['doctorreport'];

      ?>
      <form class="container flex-column mt-5 ms-2" style="width: 100%;" method="post">
        <div class="heading" style="color: white; font-size: 10px;">
          <h5>General Info</h5>
        </div>

        <div class="mb-3 row">
          <div class="col">
            <label class="form-label"></label>
            <input type="text" class="form-control" name="#" value="<?php echo $patientid ?>" required disabled>
          </div>
          <div class="col">
            <label class="form-label"></label>
            <input type="text" class="form-control" name="#" value="<?php echo $patientname ?>" required disabled>
          </div>
          <div class="col">
            <label class="form-label"></label>
            <input type="text" class="form-control" name="#" value="<?php echo $email ?>" required disabled>
          </div>

        </div>

        <div class="mb-3 row">
          <div class="col">
            <label class="form-label"></label>
            <input type="date" class="form-control" value="<?php echo $dateofvisit ?>" name="dateofvisit" required>
          </div>
          <div class="col">
            <label class="form-label"></label>
            <input type="time" class="form-control" value="<?php echo $timeofvisit ?>" name="timeofvisit" required>
          </div>
          <div class="col">
            <label class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo $reason ?>" name="reason" placeholder="Reason for visit" required>
          </div>

        </div>
        <div class="heading" style="color: white; font-size: 10px;">
          <h5>Vitals</h5>
        </div>

        <div class="mb-3 row">
          <div class="col">
            <label class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo $bpsystolic ?>" name="bpsystolic" placeholder="BP Systolic" required>
          </div>
          <div class="col">
            <label class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo $bpdestolic ?>" name="bpdestolic" placeholder="BP Destolic" required>
          </div>
          <div class="col">
            <label class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo $temperature ?>" name="temperature" placeholder="Temperature" required>
          </div>
          <div class="col">
            <label class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo $pulse ?>" name="pulse" placeholder="Pulse" required>
          </div>

        </div>

        <div class="mb-3 row">
          <div class="col">
            <label class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo $respiratoryrate ?>" name="respiratoryrate" placeholder="Respiratory Rate" required>
          </div>
          <div class="col">
            <label class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo $weight ?>" name="weight" placeholder="Weight" required>
          </div>
          <div class="col">
            <label class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo $height ?>" name="height" placeholder="Height" required>
          </div>
        </div>

        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->


        <!--sECOND fORM--><!--sECOND fORM--><!--sECOND fORM--><!--sECOND fORM-->


        <div class=" flex-column mt-3" style="width: 100%;">
          <div class="heading" style=" color: white; font-size: 10px;">
            <h5>Symptoms</h5>
          </div>
          <div class="mb-3 row">
            <div class="col">
              <label class="form-label"></label>
              <input type="text" class="form-control" value="<?php echo $symptomname ?>" name="symptomname" placeholder="Symptom Name" required>
            </div>
            <div class="col">
              <label class="form-label"></label>
              <input type="text" class="form-control" value="<?php echo $symptom ?>" name="symptom" placeholder="Symptom" required>
            </div>
          </div>
        </div>




        <div class="heading" style=" color: white; font-size: 10px;">
          <h5>Diagnostics</h5>
        </div>
        <div class="mb-3 row">
          <div class="col">
            <label class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo $diagnosticsname ?>" name="diagnosticsname" placeholder="Diagnostics Name" required>
          </div>
          <div class="col">
            <label class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo $diagnostics ?>" name="diagnostics" placeholder="Diagnostics" required>
          </div>
        </div>


        <div class="heading" style=" color: white; font-size: 10px;">
          <h5>Prescription</h5>
        </div>
        <div class="mb-3 row">
          <div class="col">
            <label class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo $drugname ?>" name="drugname" placeholder="Drug Name" required>
          </div>
          <div class="col">
            <label class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo $strength ?>" name="strength" placeholder="Strength" required>
          </div>
          <div class="col">
            <label class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo $directionsforuse ?>" name="directionsforuse" placeholder="Directions for Use" required>
          </div>
          <div class="col">
            <label class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo $quantity ?>" name="quantity" placeholder="Quantity (1/2)" required>
          </div>
          <div class="col">
            <label class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo $treatmantdetails ?>" name="treatmantdetails" placeholder="Treatmant Details-" required>
          </div>
        </div>

        <div class="heading" style=" color: white; font-size: 10px;">
          <h5>Doctor Report</h5>
        </div>
        <div class="mb-3 row">
          <div class="col">
            <label class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo $doctorreport ?>" name="doctorreport" placeholder="Doctor Report" required>
          </div>

        </div>

        <button type="submit" class="btn btn-primary" name="submit">Save</button>
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