<?php
    session_start();
    if(isset($_SESSION["email"])){
        $uemail = $_SESSION["email"];
    }
    else{
        header("Location: ../login/");
    }

    $dbm = '<li class="nav-item">
                <a class="nav-link active link-dark" href="../dashboard"><i class="uil uil-meeting-board"></i> Dashboard</a>
            </li>';

    $log = '<li class="nav-item">
                <a class="nav-link link-dark" href="../#login"><i class="uil uil-mountains-sun"></i> Login</a>
            </li>';

    $lout = '<li class="nav-item">
                <a class="nav-link link-dark" href="../logout.php"><i class="uil uil-mountains-sun"></i> Logout</a>
            </li>';

    $yes = false;
    if (isset($_SESSION["email"])) {
        $yes = true;
    }
?>



<?php
$msg = "null";

$succ = "null";

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'wrongdate') {
        $msg = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Selected Date is earlier than today</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
    } else if ($_GET['status'] == 'wrongtime') {
        $msg = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Meeting end time is before than start time</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
    }
    if ($_GET['status'] == 'success') {
        $msg = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Your Meeting Request is Submitted</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
    } else if ($_GET['status'] == 'failed') {
        $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Something Went Wrong</strong> Try again after some time.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
    }
}

if (isset($_GET['status'])) {

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Design</title>

    <!-- Site Icon -->
    <link rel="icon" type="image/x-icon" href="../../rsx/logo.ico"> <!-- Link to the Path of icon -->

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- Style and Scripts -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header Start -->
<nav class="navbar navbar-expand-lg bg-body-tertiary bs">
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
              <?php
                if (isset($_SESSION["email"])) {
                    echo $dbm;
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

    <!-- Main Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 sh-up">
                <div class="sh-hd">
                    <p>Book A New Meeting</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container sh-form-container">
        <div class="row">
            <div class="col-md-3 col-6 d-none d-md-flex justify-content-center align-items-center mt-5">
                <img src="../iutlogo/IUTLogo.png" style="width: 70px;" class="logo">
            </div>
            <div class="col-12 col-md-6 tr-frhd mt-5">
                <h2>Islamic University of Technology</h2>
                <h4>Library and Documentation Office</h4>
                <h5>Distance Learning Theatre (DLT) Booking Form</h5>
                <h6><span class="text-danger">*</span> Fields Are Required</h6>
                <hr>
            </div>
            <div class="col-md-3 col-6 d-none d-md-flex justify-content-center align-items-center mt-5">
                <img src="../iutlogo/OICLogo.png" style="width: 90px;" class="logo">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12 offset-md-3">
                <?php
                if ($msg != "null") {
                    echo $msg;
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-12 offset-lg-2">
                <form class="requires-validation" action="action.php" method="post">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 mt-5 mb-2">
                                <h4>Applicant Information</h4>
                            </div>
                            <div class="col-md-8 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name" name="email" value="<?php echo $uemail ?>" required readonly>
                                    <label for="floatingInput">Applicant Email <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-4 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control today" id="floatingInput" placeholder="today" name="today" required>
                                    <label for="floatingInput">Today <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-12 mt-1 mb-3">
                                <select class="form-select mt-3" style="height: 60px;" name="Designation" required>
                                    <option selected disabled value="">Designation</option>
                                    <option value="prof">Professor</option>
                                    <option value="assoprof">Associate Professor</option>
                                    <option value="assiprof">Assistant Professor</option>
                                    <option value="lect">Lecturer</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <div class="col-md-12 mt-1">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="floatingTextarea" placeholder="purpose" name="purpose" required></textarea>
                                    <label for="floatingTextarea">Detail Purpose (Official Meeting Only) <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="floatingInput" placeholder="bookingday" name="bookingday" required>
                                    <label for="floatingInput">Date of Booking <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-3 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="time" class="form-control tf" id="floatingInput" placeholder="timefrom" name="timefrom" required>
                                    <label for="floatingInput">Time From <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-3 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="time" class="form-control tt" id="floatingInput" placeholder="timeto" name="timeto" required>
                                    <label for="floatingInput">Time To <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-12 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control td" id="floatingInput" placeholder="duration" name="duration" required readonly>
                                    <label for="floatingInput">Duration of the Event <span class="text-danger">*</span> (hh:mm)</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-5 mb-2">
                                <h4>Technical Support (From ICT Center)</h4>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" name="desktop_pc" id="invalidCheck">
                                    <label class="form-check-label">Desktop PC</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" name="big_displays" id="invalidCheck">
                                    <label class="form-check-label">Big Displays</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" name="add_projector" id="invalidCheck">
                                    <label class="form-check-label">Additional Projector</label>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" name="writing_glass_board" id="invalidCheck">
                                    <label class="form-check-label">Writing Glass Board with Pen</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" name="wifi" id="invalidCheck">
                                    <label class="form-check-label">Wi-Fi for Participants</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" name="bdren_zoom" id="invalidCheck">
                                    <label class="form-check-label">BdREN Zoom Meeting Support</label>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mt-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" name="microphone_wireless" id="invalidCheck">
                                    <label class="form-check-label">Microphone (Wireless)</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" name="microphone_handhold" id="invalidCheck">
                                    <label class="form-check-label">Microphone (Handhold)</label>
                                </div>
                            </div>
                            <div class="col-md-6 mt-1">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="floatingTextarea" placeholder="technicalperson" name="technicalperson"></textarea>
                                    <label for="floatingTextarea">ICT Centre Technical Person Support for</label>
                                </div>
                            </div>
                            <div class="col-md-6 mt-1">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="floatingTextarea" placeholder="othersupport" name="othersupport"></textarea>
                                    <label for="floatingTextarea">Other Support</label>
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-12 mt-5 mb-2">
                                <h4> Logistics Support (From Engineering Office)</h4>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" name="table_cloth" id="invalidCheck">
                                    <label class="form-check-label">Font Desk with Table Cloth</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" name="add_chair" id="invalidCheck">
                                    <label class="form-check-label">Additional Chairs at front</label>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" name="vase" id="invalidCheck">
                                    <label class="form-check-label">Flowers with vase</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" name="add_mic" id="invalidCheck">
                                    <label class="form-check-label">Additional Microphone</label>
                                </div>
                                
                            </div>
                            
                            <div class="col-md-4 mt-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" name="wireless_mic_bat" id="invalidCheck">
                                    <label class="form-check-label">Wireless Microphone Battery</label>
                                </div>
                            </div>
                            <div class="col-md-12 mt-1">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="floatingTextarea" placeholder="otherlogi" name="otherlogi"></textarea>
                                    <label for="floatingTextarea">Other</label>
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-12 mt-5 mb-2">
                                <h4>Official Coverage</h4>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" name="photography" id="invalidCheck">
                                    <label class="form-check-label">Photography</label>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" name="video_recording" id="invalidCheck">
                                    <label class="form-check-label">Video Recording</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mt-5 mb-2">
                                <h4> Refreshment Support at the Executive Lounge (if required)</h4>
                            </div>
                            <div class="col-md-6 mt-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" name="cafe_cafeteria" id="invalidCheck">
                                    <label class="form-check-label">Arranged by Cafeteria <br>(The particular Department arranges food and Services supported by Cafeteria).</label>
                                </div>
                            </div>
                            <div class="col-md-6 mt-2">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" name="own_arrange" id="invalidCheck">
                                    <label class="form-check-label">Arranged by Particular Department <br>(The particular Department arranges food and Services)</label>
                                </div>
                            </div>
                            <h5 class="warning mt-2" style="font-style: italic;">N.B.: Food and Beverages are not allowed inside the DLT Room.</h5>
                        </div>
                        
                        
                        <div class="row">
                            
                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-success sh-search" style="width: 100%;">Submit Booking Request</button>
                            </div> 
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Main End -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-4.5.2/dist/js/bootstrap.min.js"></script> -->
    <script>
        $(document).ready(function() {
            $('.tt, .tf').on('change', function() {
                var tfVal = $('.tf').val();
                var ttVal = $('.tt').val();

                if (tfVal && ttVal) {
                    var tf = new Date('2000-01-01 ' + tfVal);
                    var tt = new Date('2000-01-01 ' + ttVal);

                    if (tt < tf) {
                        $('.td').val('Selection is invalid');
                    } else {
                        var diffInMillis = tt - tf;
                        var hours = Math.floor(diffInMillis / 3600000);
                        var minutes = Math.floor((diffInMillis % 3600000) / 60000);

                        $('.td').val(hours + ' hours ' + minutes + ' minutes');
                    }
                } else {
                    $('.td').val('');
                }
            });
        });
    </script>

    <script>
        // Get the input element by its ID
        // Get the input element with the "today" class
        var inputElement = document.querySelector(".today");

        // Get the current date in YYYY-MM-DD format
        var currentDate = new Date().toISOString().slice(0, 10);

        // Set the value of the input element to the current date
        inputElement.value = currentDate;

        // Make the input element read-only
        inputElement.setAttribute("readonly", "readonly");
    </script>

</body>
</html>

<style>
    .bs{
        box-shadow: 3px 3px 3px rgba(0,0,0,0.5);
    }
</style>