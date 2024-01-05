<?php include("includes/calendar_header.php"); ?>


<?php
require_once('connection.php');

$schedules = $connection->query("SELECT * FROM `schedules`");
$sched_res = [];

foreach ($schedules->fetch_all(MYSQLI_ASSOC) as $row) {
    $row['sdate'] = date("F d, Y h:i A", strtotime($row['start_datetime']));
    $row['edate'] = date("F d, Y h:i A", strtotime($row['end_datetime']));
    $sched_res[$row['id']] = $row;
}

if (isset($connection))
    $connection->close();

    session_start();
    $db = '<li class="nav-item">
                <a class="nav-link link-dark" href="calendar/"><i class="uil uil-meeting-board"></i> Dashboard</a>
            </li>';

    $log = '<li class="nav-item">
                <a class="nav-link link-dark" href="#login"><i class="uil uil-mountains-sun"></i> Login</a>
            </li>';

    $lout = '<li class="nav-item">
                <a class="nav-link link-dark" href="logout.php"><i class="uil uil-mountains-sun"></i> Logout</a>
            </li>';

    $yes = false;
    if (isset($_SESSION["email"])) {
        $yes = true;
    }
?>

<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

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
                <a class="nav-link link-dark active" href="#"><i class="uil uil-calender"></i> Calender</a>
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
<div class="container py-5" id="page-container">
    <div class="row">
        <div class="col-md-12">
            <div id="calendar"></div>
        </div>
    </div>
</div>
<!-- Event Details Modal -->
<div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">
            <div class="modal-header rounded-0">
                <h5 class="modal-title">Schedule Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body rounded-0">
                <div class="container-fluid">
                    <dl>
                        <dt class="text-muted">Title</dt>
                        <dd id="title" class="fw-bold fs-4"></dd>
                        <dt class="text-muted">Description</dt>
                        <dd id="description" class=""></dd>
                        <dt class="text-muted">Start</dt>
                        <dd id="start" class=""></dd>
                        <dt class="text-muted">End</dt>
                        <dd id="end" class=""></dd>
                    </dl>
                </div>
            </div>
            <div class="modal-footer rounded-0">
                <div class="text-end">
                    <!-- <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button> -->
                    <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("includes/calendar_footer.php"); ?>

<style>
    .bs{
        box-shadow: 3px 3px 3px rgba(0,0,0,0.5);
    }
</style>
