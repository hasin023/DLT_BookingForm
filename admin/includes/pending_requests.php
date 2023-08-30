<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pending Requests</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">Meeting ID</th>
                        <th class="text-center">Applicant Name</th>
                        <th class="text-center">Applicant Designation</th>
                        <th class="text-center">Participants</th>
                        <th class="text-center">Meeting Date</th>
                        <th class="text-center">Start Time</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php getPendingMeetings(); ?>
                    <!-- <tr>
                        <td class="text-center">Tiger Nixon</td>
                        <td class="text-center">System Architect</td>
                        <td class="text-center">20</td>
                        <td class="text-center">2011/04/25</td>
                        <td class="text-center">11:00 AM</td>
                        <td class="text-center">Pending</td>
                        <td class="text-center"><a class="btn btn-success" href="meetings.php?approve=#">Approve</a></td>
                        <td class="text-center"><a class="btn btn-info" href="request_details.php?status=#&r_id=#">View</a></td>
                    </tr> -->

                </tbody>
            </table>
        </div>
    </div>
</div>
