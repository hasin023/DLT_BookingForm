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
                        <th class="text-center">Meeting Date</th>
                        <th class="text-center">Start Time</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Details</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php getPendingMeetings(); ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
