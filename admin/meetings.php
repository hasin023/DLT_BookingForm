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



                    <!-- Add Tables -->
                    <?php

                    if (isset($_GET['source'])) {
                        $source = $_GET['source'];
                    } else {
                        $source = '';
                    }

                    switch ($source) {
                        case 'add_meeting';
                            include("includes/add_meeting.php");
                            break;

                        case 'previous_meetings';
                            include("includes/previous_meetings.php");
                            break;

                        case 'pending_requests';
                            include("includes/pending_requests.php");
                            break;

                        default:
                            include("includes/meetingDetails.php");
                            break;
                    }


                    ?>
                    <!-- Add Tables Ended -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<!-- Footer -->
<?php include("includes/admin_footer.php"); ?>