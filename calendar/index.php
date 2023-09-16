<?php include("includes/calendar_header.php"); ?>


<?php
require_once('db-connect.php');

$schedules = $connection->query("SELECT * FROM `meetings`");
$sched_res = [];

foreach ($schedules->fetch_all(MYSQLI_ASSOC) as $row) {
    $row['application_date'] = date("F d, Y h:i A", strtotime($row['application_date']));
    $row['meeting_date'] = date("F d, Y h:i A", strtotime($row['meeting_date']));
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
        <div class="col-md-9">
            <div id="calendar"></div>
        </div>
        <div class="col-md-3">
            <div class="cardt rounded-0 shadow">
                <div class="card-header bg-gradient bg-primary text-light">
                    <h5 class="card-title">Schedule Form</h5>
                </div>
                <div class="card-body">
                    <div class="container-fluid">
                        <form action="save_schedule.php" method="post" id="schedule-form">
                            <input type="hidden" name="id" value="">
                            <div class="form-group mb-2">
                                <label for="title" class="control-label">Title</label>
                                <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="description" class="control-label">Description</label>
                                <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" required></textarea>
                            </div>
                            <div class="form-group mb-2">
                                <label for="start_datetime" class="control-label">Start</label>
                                <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="end_datetime" class="control-label">End</label>
                                <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                        <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                    </div>
                </div>
            </div>
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
                    <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
                    <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("includes/calendar_footer.php"); ?>
