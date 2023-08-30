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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Faculty Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Faculty Members</div>

                <?php

                $query = "SELECT * FROM faculty";
                $select_all_faculty = mysqli_query($connection, $query);
                $faculty_counts = mysqli_num_rows($select_all_faculty);

                echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>{$faculty_counts}</div>";

                ?>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    <hr>
                                    <a href="faculty.php" class="btn btn-success " style=" width: 7.4rem; margin-left: 8rem;">View Details</a>
                                </div>
                            </div>
                        </div>

                        <!-- Meetings Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Meetings</div>

                <?php

                $query = "SELECT * FROM meetings";
                $select_all_meetings = mysqli_query($connection, $query);
                $meeting_counts = mysqli_num_rows($select_all_meetings);

                echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>{$meeting_counts}</div>";

                ?>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    <hr>
                                    <a href="meetings.php" class="btn btn-warning " style=" width: 7.4rem; margin-left: 8rem;">View Details</a>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Pending Requests</div>

                <?php

                $query = "SELECT * FROM meetings WHERE meeting_status = 'pending'";
                $select_pending_meetings = mysqli_query($connection, $query);
                $pending_counts = mysqli_num_rows($select_pending_meetings);

                echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>{$pending_counts}</div>";

                ?>
                
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    <hr>
                                    <a href="meetings.php?source=pending_requests" class="btn btn-info " style=" width: 7.4rem; margin-left: 8rem;">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Pending Meetings Tables / Notifications -->
                            
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<!-- Footer -->
<?php include("includes/admin_footer.php"); ?>