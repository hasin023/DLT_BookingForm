
<style>
    .s-w{
        background-color: #f0af0c;
        color: black;
    }
</style>


<?php
    require_once "../connection.php";
    session_start();
    if(isset($_SESSION["email"])){
        //okay login confirmed
        $this_email = $_SESSION["email"];
        $sql = "SELECT meeting_date, start_time, end_time, meeting_status, details 
        FROM `meetings` 
        WHERE applicant_name = '$this_email' 
        AND CONCAT(meeting_date, ' ', start_time) > NOW()";
        $result = $connection->query($sql);

        $element = '';
        while($row = $result->fetch_assoc()){
            $mdate = $row['meeting_date'];
            $mstart = $row['start_time'];
            $mstatus = $row['meeting_status'];
            $mclass = "";
            $mdetails = $row['details'];
            if($mstatus == "pending"){
                $mclass = "s-w";
            }
            else if($mstatus == "approved"){
                $mclass = "bg-success";
            }
            else{
                $mclass = "bg-danger";
            }
            $element .= '<div class="col-12">
                            <div class="card-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p>Date : '. $mdate .'</p>
                                            <p>Time : '. $mstart .' </p>
                                            <p>Details : '. $mdetails .'</p>
                                        </div>
                                        <div class="col-md-4 mt-md-0 mt-5 d-flex justify-content-center align-items-center">
                                            <h3 class = "mt-3"><span class="badge '. $mclass .'">' . $mstatus . '</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
        }

        //closing the connection
        $connection->close();
    }
    else{
        header("Location: ../login/");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- My Css -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Online Icons CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    
    <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="script.js"></script>
    <style>
        .card-3{
            background: #fff;
            border-radius: 5px;
            padding: 1rem;
            /* box-shadow: 0 0 10px rgba(0,0,0,0.3); */
            margin-bottom: 1rem;
            min-height: 10vh;
        }

        .card-3 p{
            margin: 0;
        }
    </style>
</head>
<body>

<div class="container mt-5 card-3">
    <div class="row">
        <div class="col-10 offset-md-1">
            <h2>Your Information</h2>
            <hr>
            <table class = "table">
                <tr>
                    <td>Name : </td>
                    <td><?php echo $_SESSION["first_name"] . " " . $_SESSION["last_name"]; ?></td>
                </tr>
                <tr>
                    <td>Department : &nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td><?php echo $_SESSION["department"]; ?></td>
                </tr>
                <tr>
                    <td>Email : &nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td><?php echo $_SESSION["email"]; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>    

<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center">
            <a href="../calendar/" class = "btn btn-primary" style = "width = 100%">View Calender</a>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="card">
                <div class="container">
                    <div class="row">
                        <div class="col-9">
                            <h3 class="mt-3">Application Status</h3>
                        </div>
                        <div class="col-md-3 col-12 text-md-right">
                            <a href="../form" class="btn btn-success mt-3">Book a new meeting</a>
                        </div>
                        <div class="mt-3"></div>
                        <hr>

                        <?php
                            echo $element;
                        ?>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





</body>
</html>