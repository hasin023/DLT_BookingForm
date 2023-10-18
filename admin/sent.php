<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../phpmailer/src/Exception.php';
    require '../phpmailer/src/PHPMailer.php';
    require '../phpmailer/src/SMTP.php';

    $remarks = "";

    function send_mail($to, $date, $time, $content){

    $mymail = '<h1>A new meeting is listed on DLT</h1>
                <hr>
                <h3>Meeting Date : '. $date .' </h3>';
    $mymail .= '<h3>Meeting Time : '. $time .' </h3> <br><br>';
    $mymail .= $content;




    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sakhawatadib@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'vxwbuoirvzrhdzek'; // Gmail application Password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('sakhawatadib@gmail.com'); // Gmail address which you used as SMTP server
    
    $mail->addAddress($to);
    $mail->isHTML(true);
    $mail->Subject = 'DLT : A new meeting is scheduled';
    $mail->Body = $mymail;
    $mail->send();
    }


    $mails = array();

    if(isset($_POST['step_ict'])){
        $mails[] = $_POST['step_ict'];
    }

    if(isset($_POST['step_engi'])){
        $mails[] = $_POST['step_engi'];
    }

    if(isset($_POST['step_cafe'])){
        $mails[] = $_POST['step_cafe'];
    }

    if(isset($_POST['step_visu'])){
        $mails[] = $_POST['step_visu'];
    }

    $remarks = $_POST['remarks'];
    $mdate = $_POST['mdate'];
    $mtime = $_POST['mtime'];
    $id = $_POST['mid'];



    foreach ($mails as $value) {
        // Send the email
        send_mail($value, $mdate, $mtime, $remarks);
    }

    echo '
        <script>
            alert("mails have been sent");
        </script>
    ';

    header("Location: request_details.php?r_id={$id}&m_status=pending");

?>