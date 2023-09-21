<?php
    include_once('../connection.php');
    session_start();
    if(isset($_POST["otp"])){
        if($_SESSION["otp"] == $_POST["otp"]){
            $try_mail = $_SESSION["email"];
            $sql = "SELECT first_name, last_name, department, designation, role FROM faculty WHERE email = '$try_mail'";
            $result = mysqli_query($connection, $sql);

            if ($result) {
                // Check if any rows were returned
                if (mysqli_num_rows($result) == 1) {
                    // Fetch the row as an associative array
                    $row = mysqli_fetch_assoc($result);
            
                    // Store the retrieved information in session variables
                    $_SESSION['first_name'] = $row['first_name'];
                    $_SESSION['last_name'] = $row['last_name'];
                    $_SESSION['department'] = $row['department'];
                    $_SESSION['designation'] = $row['designation'];
                    $_SESSION['role'] = $row['role'];
            
                    // Close the database connection
                    mysqli_close($connection);
                } else {
                    // Handle the case where no or multiple rows were found (error handling)
                    echo "Error: Invalid number of rows found.";
                }
            } else {
                // Handle database query error
                echo "Database error: " . mysqli_error($connection);
            }


            header("Location: ../dashboard/");
        }else{
            header("Location: ../otp/?status=wrong");
        }
    }
    else{
        header("Location: ../login/");
    }

?>