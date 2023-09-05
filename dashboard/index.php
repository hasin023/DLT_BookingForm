<?php include("includes/dashboard_header.php") ?>


    <!-- <div class="container mt-5">
        <div class="row">
            <div class="col-lg-10">
                <h3>Weclome To Distance Learning Theatre</h3>
            </div>
            <div class="col-lg-2">
                <div class="yr" id="yr"></div>
            </div>
        </div>
    </div> -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="card">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-center mt-3">Book A New Meeting</h3>
                                <hr>
                            </div>
                            <div class="col-12">
                                <p class="text-secondary">To book a new meeting click on the booking form. you will be on 
                                    booking form page. Fill the form and submit it. You will get a
                                    confirmation mail on your email address if your booking is confirmed.
                                    <br> 
                                    <br>
                                    To see the calender click on the show calender button. You will be
                                    on calender page. You can see the booking calender of the current month.
                                </p>
                            </div>
                            <div class="d-grid gap-2 mt-3 mb-3">
                                <button class="btn btn-secondary" type="button">View Calender</button>
                                <button class="btn btn-success" type="button">Book a New Meeting</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="mt-3">Application Status</h3>
                                <hr>
                            </div>

                            <div class="col-12">
                                <div class="card-2">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <p>Date : 29-8-2023</p>
                                                <p>Time : 02:30 PM</p>
                                                <p><span class="badge bg-success">Approved</span></p>
                                            </div>
                                            <div class="col-md-4 mt-md-0 mt-3 d-flex justify-content-center align-items-center">
                                                <a href="#" class="btn btn-secondary">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="card-2">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <p>Date : 03-9-2023</p>
                                                <p>Time : 10:00 AM</p>
                                                <p><span class="badge bg-warning">Pending</span></p>
                                            </div>
                                            <div class="col-md-4 mt-md-0 mt-3 d-flex justify-content-center align-items-center">
                                                <a href="#" class="btn btn-secondary">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card mt-5">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-12">
                        <h3 class="text-center mt-3">Meeting History</h3>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <table id="stable" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Agenda</th>
                                    <th>Host</th>
                                </tr>
                            </thead>
                            <tbody>
                        <!-- Automatic Code injected by PHP -->
                            <?php echo $rows; ?>
                        </tbody>
                    </table>
                                
                                
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<?php include("includes/dashboard_footer.php") ?>