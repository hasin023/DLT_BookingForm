<?php
    $err_show = "";
    if (isset($_GET["error"])) {
        $msg = $_GET["error"];


        if ($msg == "eml") {
            $err_show = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Sorry!</strong> Provided Email Address Is Wrong.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
        }
    }

    session_start();
    if (isset($_SESSION["email"])) {
        header("Location: ../dashboard/");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Style -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body>
    <!-- Header Start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary bs fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="badge bg-primary">IUT DLT</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link link-dark" aria-current="page" href="../"><i class="uil uil-estate"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-dark" href="../calendar/"><i class="uil uil-calender"></i> Calender</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header End -->
    <div class="sh-login-sec">
        <div class="container">
            <div class="row">
                <div class="col-10 col-lg-4 offset-lg-4 offset-1">
                    <h1 class="text-center mb-3">login</h1>
                    <?php 
                        if($err_show != ""){
                            echo $err_show;
                        }
                    ?>
                    <hr>
                    <form action="../otp/" method="post">
                        <div class="card-2 mt-5" id="mail_card">
                            <div class="form-floating mb-3 mt-3">
                                <input type="email" class="form-control" id="floatingInput" name = "email" placeholder="name@example.com" required>
                                <label for="floatingInput">Email Address</label>
                            </div>
                            <button type="submit" class="btn btn-warning" id="next_card" style="width: 100%;">Send OTP</button>
                        </div>
                    </form>
                    <hr>
                    <div class="mt-2 mb-2 d-flex justify-content-center align-items-center">
                        <a href="../" class="btn btn-light">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<style>
    .bs{
        box-shadow: 3px 3px 3px rgba(0,0,0,0.5);
    }
</style>