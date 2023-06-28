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
            <a href="" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white">
                <i class="fas fa-project-diagram me-2"></i>Records
            </a>
            <a href="" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white">
                <i class="fas fa-chart-line me-2"></i>Search
            </a>
            <a href="" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white">
                <i class="fas fa-paperclip me-2"></i>Form
            </a>
            <a href="" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white">
                <i class="fas fa-shopping-cart me-2"></i>Activity
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
                <h2 class="fs-2 m-0">Dashboard</h2>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item-dropdown">
                        <a href="#" class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-2"></i> Hi User
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item">View Profile</a></li>
                        <li><a class="dropdown-item">Hobbies & Interest</a></li>
                        <li><a class="dropdown-item">Personality Questions</a></li>
                        <li><a class="dropdown-item">Cupidtags</a></li>
                        <li><a class="dropdown-item">Profile Settings</a></li>
                        <li><a class="dropdown-item">Notifications</a></li>
                        <li><a class="dropdown-item">Languages</a></li>
                        <li><a class="dropdown-item">Help</a></li>
                        <li><a class="dropdown-item">Upgrade Membership</a></li>
                        <li><a class="dropdown-item">Logout</a></li>
                    </ul>
                    </li>
                </ul>

            </div>

        </nav>

        <!--After the dashboard nav-->
        <form class="container flex-column">
            <h3>Fill the Records</h3>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Patient Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Patient Blood group</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
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