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

<?php
  // session_start();
  $email = $_SESSION['email'];
  $fname = $_SESSION['first_name'];
  $lname = $_SESSION['last_name'];
  $role = $_SESSION['role'];
  $department = $_SESSION['department'];
?>


<div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img  src="img/userIcon.png" alt="Admin Image" class="img-profile rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $fname . ' ' . $lname ?></h4>
                      <p class="text-secondary mb-1"><?php echo $role ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">First Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $fname ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Last Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $lname ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $email ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Role</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $role ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>


</div>
        <!-- End of Main Content -->

<!-- Footer -->
<?php include("includes/admin_footer.php"); ?>