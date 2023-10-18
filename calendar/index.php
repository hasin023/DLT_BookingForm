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
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient" id="topNavBar">
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-12">
                <a class="navbar-brand title" href="#">Booked Meetings</a>
            </div>
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
