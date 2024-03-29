<?php
session_start();
require("dbconn.php");

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $description = $_POST['description'];
    $status = $_POST['status'];


    mysqli_query($con, "INSERT INTO `appointment`(`name`, `date`, `time`, `description`, `status`) VALUES ('$name','$date','$time','$description','$status')");

    ?>

    <script>
      alert("Success");
      window.location.href = "bookappoint.php";
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
    <title>Book Appointment</title>
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
                <a href="bookappoint.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white">
                    <i class="fas fa-paperclip me-2"></i> Book Apointment
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

            <form class="container flex-column mt-5 ms-2" style="width: 100%;" method="post">
                <div class="container flex-column " style="width: 100%;">
                    <div class="heading mb-3" style=" color: white; font-size: 10px;">
                        <h5>Book Appointment</h5>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <select class="form-control" name="name">
                            <?php
                            $query = "SELECT * FROM `patient`";
                            $result = mysqli_query($con, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $patientname = $row['firstname'] . ' ' . $row['lastname'];

                            ?>
                                <option value="<?php echo $patientname ?>"><?php echo $patientname ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <!-- <div class="mb-3">
              <label class="form-label">Doctor Name</label>
              <input type="text" class="form-control" name="docname" placeholder="" required>
            </div> -->

                    <div class="mb-3 row">
                        <div class="col">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" name="date" placeholder="Date" required>
                        </div>
                        <div class="col">
                            <label class="form-label">Time</label>
                            <input type="time" class="form-control" name="time" placeholder="Time" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" placeholder="" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-control" name="status" id="">
                            <option value="Scheduled">Scheduled</option>
                            <option value="Missed Appointment">Missed Appointment</option>
                            <option value="In Progress">In Progress</option>
                            <option value="Signed In">Signed In</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Book Now</button>
                </div>
            </form>
            <!---->




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