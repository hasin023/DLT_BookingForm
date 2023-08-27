<?php include("includes/admin_header.php"); ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include("includes/admin_sidebar.php"); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("includes/admin_topbar.php"); ?>
                <!-- End of Topbar -->



<div class="container">
   <h1 class="h3 mb-4 text-gray-800">Meeting Details : id </h1>

    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-12">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Applicant Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Random User
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Designation</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Assistant Professor
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Department</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    Computer Science and Engineering
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date of Booking</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    23rd August, 2023
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Time of Booking</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    2:30 PM to 4:30 PM
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Participants</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    35
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Purpose</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    To further discuss the project
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Technical Supports</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    N/A
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Logistics Supports</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    N/A
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Official Coverage</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    N/A
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Refreshment Supports</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    N/A
                    </div>
                  </div>
                  <form>
                    <hr>
                    <h5 class="mb-4 text-danger">Fill out by Library and Documentation Office</h5>
                    <div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">For taking necessary steps</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <label class="mr-3">
                            <input type="checkbox" name="step" value="ict">
                            Copy to the ICT Centre
                        </label>
                        <label class="mr-3">
                            <input type="checkbox" name="step" value="engineering">
                            Copy to the Engineering Office
                        </label>
                        <label class="mr-3">
                            <input type="checkbox" name="step" value="committee">
                            Copy to the Chairman, Cafeteria Committee
                        </label>
                        <label class="mr-3">
                            <input type="checkbox" name="step" value="visual">
                            Copy to the Audio Visual Instructor for Official Coverage
                        </label>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Remakrs</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <textarea id="remarks" name="remarks" rows="4" cols="50"></textarea>
                      <br>
                      <input class="btn btn-warning" type="submit" value="submit">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <a class="btn btn-danger" href="meetings.php?delete=#">Delete</a>
          <a class="btn btn-success" href="meetings.php?approve=#">Approve</a>
        </div>
    </div>


</div>
        <!-- End of Main Content -->

<!-- Footer -->
<?php include("includes/admin_footer.php"); ?>