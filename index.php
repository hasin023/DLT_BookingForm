<?php
    session_start();
    $db = '<li class="nav-item">
                <a class="nav-link" href="calendar/"><i class="uil uil-meeting-board"></i> Dashboard</a>
            </li>';

    $log = '<li class="nav-item">
                <a class="nav-link" href="#login"><i class="uil uil-mountains-sun"></i> Login</a>
            </li>';

    $lout = '<li class="nav-item">
                <a class="nav-link" href="logout.php"><i class="uil uil-mountains-sun"></i> Logout</a>
            </li>';

    $yes = false;
    if (isset($_SESSION["email"])) {
        $yes = true;
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IUT DLT</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Icons -->
    <link rel="icon" href="iutlogo/logo.ico" type="image/x-icon">
    <link rel="shortcut icon" href="iutlogo/logo.ico" type="image/x-icon">   
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- Custom CSS & JS-->
    <link rel="stylesheet" href="style.css">

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
                <a class="nav-link active" aria-current="page" href="#"><i class="uil uil-estate"></i> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="calendar/"><i class="uil uil-calender"></i> Calender</a>
              </li>
              <?php
                if (isset($_SESSION["email"])) {
                    echo $db;
                }
                ?>
            </ul>
            <ul class="navbar-nav mt-auto mb-2 mb-lg-0">
              <?php
                if (isset($_SESSION["email"])) {
                    echo $lout;
                }else{
                    echo $log;
                }
                ?>
            </ul>
          </div>
        </div>
      </nav>
    <!-- Header End -->
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 home-1">
                    <h5><span class="badge jb bg-success">Islamic University of Technology</span></h5>
                    <h2 class="pop">Distance Learning Theatre</h2>
                    <hr>
                    <p class="pop">Welcome to the Distance Learning Theatre of Islamic University of Technology. Here you can book meetings in DLT. You can also find the schedule of meetings in the calendar section.</p>
                    <div class="hstack gap-3">
                        <div class="p-2"><a href="#login" class="btn btn-outline-success"><i class="uil uil-edit"></i> Book a New Meeting</a></div>
                        <div class="p-2"><a href="calendar/" class="btn btn-outline-success"><i class="uil uil-calender"></i> View Calender</a></div>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <div class="container" id="login" style="min-height: 60vh;">
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="jb">Please <b class="text-success">login</b> to book new meeting</h2>
                <!-- <hr> -->
                <p class="text-secondary">Enter your valid email address we will send you an OTP to your email address. with that OTP you can login to the system</p>
                <hr>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-md-4 mt-4 offset-md-1">
                <form action="otp/" method="post">
                    <div class="card-2 mt-5" id="mail_card">
                        <div class="form-floating mb-3 mt-3">
                            <input type="email" class="form-control bs" id="floatingInput" name = "email" placeholder="name@example.com" required <?php if($yes==true){echo "readonly";} ?>>
                            <label for="floatingInput"><i class="uil uil-envelope-alt"></i> Enter Your Email Address</label>
                        </div>
                        <button type="submit" class="bs btn btn-success <?php if($yes==true){echo "disabled";} ?>" id="next_card" style="width: 100%;">Send OTP</button>
                    </div>
                </form>
            </div>
            <div class="col-md-7 mail mt-4">
                <img src="iutlogo/mail.svg" alt="" style="width: 300px;">
            </div>
        </div>
    </div>


    
</body>


<style>
    .home-1{
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        /* align-items: center; */
        justify-content: center;
    }

    .mail{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .pop{
        font-family:'poppins', sans-serif;
    }

    .jb{
        font-family: 'JetBrains Mono', monospace;
    }

    .hero{
        background-image: url(dltroomimages/home-1.png);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .bs{
        box-shadow: 3px 3px 3px rgba(0,0,0,0.5);
    }
</style>