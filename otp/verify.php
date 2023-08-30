<?php
    session_start();
    if(isset($_POST["otp"])){
        if($_SESSION["otp"] == $_POST["otp"]){

            header("Location: ../dashboard/");
        }else{
            header("Location: ../otp/?status=wrong");
        }
    }
    else{
        header("Location: ../login/");
    }

?>