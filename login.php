<?php
session_start();
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    require("dbconn.php");


    $result = mysqli_query($con, "SELECT * FROM `users` WHERE email='$email' and password='$password'");
    if (mysqli_num_rows($result)) {
        $res = mysqli_fetch_array($result);
        $_SESSION['name'] = $res['fullname'];
        $_SESSION['email'] = $res['email'];
        header("Location: dashboard.php");
    } else {
?>
        <script>
            alert("No username found !")
            window.location.href = "login.php"
        </script>
<?php
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo2.png" type="image/x-icon">
    <link href="asset2/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/log.css">
    <title>Log in</title>
</head>

<body>

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: rgb(20, 14, 50);">
                <div class="featured-image mb-3">
                    <img src="img/logo2.png" class="img-fluid" style="width: 100px; color: aliceblue;">
                </div>
                <p class="text-white fs-2" style="font-family: 'poppins', Courier, monospace; font-weight: 600;">Personal Health</p>
                <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'poppins', Courier, monospace;">"Time and health are two precious assets that we don't recognize and appreciate until they have been depleted."</small>
            </div>

            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="header-text mb-4">
                        <h2>Hello, Again</h2>
                        <p>We are very excited to have you Back</p>
                    </div>
                    <form method="post">
                        <div class="input-group mb-3">
                            <input type="text" name="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email address" required>
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" required>
                        </div>
                        <div class="input-group mb-5 d-flex justify-content-between">

                            <div class="forgot">
                                <small class="fon"><a href="#">Forgot Password?</a></small>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg  w-100 fs-6" style="background: rgb(20, 14, 50); color: white;"type="submit" name='login'>Login</button>
                        </div>
                    </form>

                    <div class="row">
                        <small>Don't have account? <a href="signup.php">Sign Up</a></small>
                    </div>
                </div>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </div>

</body>

</html>