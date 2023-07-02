<?php
session_start();
require("dbconn.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient list</title>
    <link rel="icon" href="img/logo2.png" type="image/x-icon">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <a href="dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text active text-white" >
                <i class="fas fa-tachometer-alt me-2"></i>Dashboard
            </a>
            <a href="addpatient.php" class="list-group-item list-group-item-action bg-transparent second-text active text-white" >
            <i class="fas fa-plus me-2"></i>Add Patient
            </a>
            <a href="patientlist.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white">
            <i class="fas fa-list me-2"></i>Patient List
            </a>
            <a href="" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white">
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
        <div style="color: red; font-weight: bolder; margin-left: 2%;">
            <p>Patitent List</p>
        </div>
        
        <!--After the dashboard nav-->

        <div class="table-responsive ms-4">
            <table class="table mt-3">
                <thead style="background-color: rgb(31, 27, 46); color: white;">
                  <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Patient Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Date of birth</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * FROM `patient`";
                    $result = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $patientname = $row['firstname'].' '.$row['lastname'];
                        $address = $row['homeaddress'];
                        $gender = $row['gender'];
                        $dob = $row['dob'];
                    
                    ?>
                  <tr>
                    <th scope="row"><?php echo $id ?></th>
                    <td><?php echo $patientname ?></td>
                    <td><?php echo $address ?></td>
                    <td><?php echo $gender ?></td>
                    <td><?php echo $dob ?></td>
                    <td><a href="editpatient.php?id=<?php echo $id ?>">Edit</a></td>
                    <td><a href="delete.php?id=<?php echo $id ?>&from=patient">Delete</a></td>
                  </tr>
                  <?php 
                  }
                  ?>
                </tbody>
              </table>
        </div>
        
    </div>


        











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script>
        var el = document.getElementById("wrapper")
        var toggleButton = document.getElementById("menu-toggle")

        toggleButton.onclick = function (){
            el.classList.toggle("toggled")
        }
    </script>
</body>
</html>