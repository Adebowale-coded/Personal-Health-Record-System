<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active text-white" >
                <i class="fas fa-tachometer-alt me-2"></i>Dashboard
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active text-white" >
            <i class="fas fa-plus me-2"></i>Add Patient
            </a>
            <a href="patientlist.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white">
            <i class="fas fa-list me-2"></i>Patient List
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

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </nav>

        <!--After the dashboard nav-->

        <div  style="color: red; font-weight: bolder; margin-left: 2%;">
            <p>Add Patient</p>
        </div>


        <form class="container flex-column mt-5" style="width: 100%;">
        <div class="heading" style="background: ; color: white; font-size: 10px;">
            <h5>Basic Info</h5>
        </div>        
            <div class="mb-0">
              <label  class="form-label" name="docname" >Doctor Name</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="mb-0">
              <label  class="form-label" name="">P/O</label>
              <input type="text" class="form-control">
            </div>

            <div class="mb-0">
              <label class="form-label" name="email">Email</label>
              <input type="text" class="form-control" placeholder="@gmail.com" required>
            </div>

            <div class="mb-0">
              <label class="form-label" name="email">First Name</label>
              <input type="text" class="form-control" required>
            </div>

            <div class="mb-0">
              <label class="form-label" name="email">Last Name</label>
              <input type="text" class="form-control" required>
            </div>

            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
          

        <!--sECOND fORM--><!--sECOND fORM--><!--sECOND fORM--><!--sECOND fORM-->


          <div class="container flex-column mt-2" style="width: 100%;">
        <div class="heading" style="background: ; color: white; font-size: 10px;">
            <h5>Personal Details</h5>
        </div>        
            <div class="mb-0">
              <label  class="form-label" name="docname">Gender</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="mb-0">
              <label class="form-label" name="">Birth Date</label>
              <input type="text" class="form-control" placeholder="yyyy/mm/dd" required>




              <!--<select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>-->
            </div>

            <div class="mb-0">
              <label  class="form-label" name="email">Occupation</label>
              <input type="text" class="form-control" required>
            </div>

            <div class="mb-0">
              <label class="form-label" name="email">Blood Group</label>
              <input type="text" class="form-control" required>
            </div>

            <div class="mb-0">
              <label class="form-label" name="email">Marital Status</label>
              <input type="text" class="form-control" required>
            </div>
</div>



          <div class="container flex-column mt-2" style="width: 100%;">
        <div class="heading" style="background: ; color: white; font-size: 10px;">
            <h5>Contact Details</h5>
        </div>        
            <div class="mb-0">
              <label  class="form-label" name="docname">Home Address</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="mb-0">
              <label class="form-label" name="">Current Address</label>
              <input type="text" class="form-control" placeholder="" required>
              <!--<select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>-->
            </div>

            <div class="mb-0">
              <label  class="form-label" name="email">Country</label>
              <input type="text" class="form-control" required>
            </div>

            <div class="mb-0">
              <label class="form-label" name="email">State/Province</label>
              <input type="text" class="form-control" required>
            </div>

            <div class="mb-0">
              <label class="form-label" name="email">City</label>
              <input type="text" class="form-control" required>
            </div>

            <div class="mb-0">
              <label class="form-label" name="email">Contact No</label>
              <input type="text" class="form-control" required>
            </div>

            <div class="mb-0">
              <label class="form-label" name="email">Ethnicity</label>
              <input type="text" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
          </form>
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