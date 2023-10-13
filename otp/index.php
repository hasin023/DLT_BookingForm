<?php
    include_once('../connection.php');
    $received_email = mysqli_real_escape_string($connection, $_POST["email"]);

    $sql = "SELECT * FROM `faculty` WHERE email = '$received_email'";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        // Check if any rows were returned
        if (mysqli_num_rows($result) > 0) {
            //handle login
        } else {
            header("Location: ../login/?error=eml");
            exit();
        }
    } else {
        echo "Database error: " . mysqli_error($connection);
    }

    mysqli_close($connection);
?>



<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../phpmailer/src/Exception.php';
    require '../phpmailer/src/PHPMailer.php';
    require '../phpmailer/src/SMTP.php';

    if(isset($_POST["email"])){

        $otp = rand(100000, 999999);
        session_start();
        $_SESSION["otp"] = $otp;
        $_SESSION["email"] = $received_email;

        $mymail = '<h1>Your OTP is <b>'. $otp .'</b></h1>
                    <hr>
                    <p>Use this OTP to login to your account.</p>
                    <hr>
                    <p>If you did not request this OTP, please ignore this email.</p>';


        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sakhawatadib@gmail.com'; // Gmail address which you want to use as SMTP server
        $mail->Password = 'vxwbuoirvzrhdzek'; // Gmail application Password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('sakhawatadib@gmail.com'); // Gmail address which you used as SMTP server
        
        $mail->addAddress($_POST["email"]);
        $mail->isHTML(true);
        $mail->Subject = 'Your DLT Login OTP';
        $mail->Body = $mymail;

        if($mail->send()){
            echo '<script>alert("OTP sent to your email")</script>';
        }


    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Style -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style.css">
    <script defer src="script.js"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body onload="start()">
    <div class="sh-login-sec">
        <div class="container">
            <div class="row">
                <div class="col-10 col-lg-4 offset-lg-4 offset-1">
                    <h1 class="text-center mb-3">login</h1>
                    <hr>
                    <?php
                        if(isset($_GET["status"])){
                            if($_GET["status"] == "wrong"){
                                echo '<div class="alert alert-danger" role="alert">
                                        Wrong OTP
                                    </div>';
                            }
                        }
                    ?>
                    <form action="verify.php" method="post">
                        <div class="card-2 mt-5" id="otp_card">
                            <div class="form-floating mt-3 mb-3">
                                <input type="number" class="form-control" id="floatingPassword" name = "otp" placeholder="otp" required>
                                <label for="floatingPassword">OTP</label>
                            </div>
                            <button type="submit" class="btn btn-success mb-4" style="width: 100%;">login</button>
                            <p class="text-secondary mb-2" id="counting">Resend email in <span id="timeface"></span></p>
                            <p class="text-secondary mb-2" style="display: none;" id="done_counting">If OTP is not sent to you, click on resend</p>
                            <div class="btn-group" style="width: 100%;">
                                <a href="../login/" class="btn btn-outline-secondary" style="display: none;" id="cresend">Resend Email</a>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        
    </script>


</body>
</html>