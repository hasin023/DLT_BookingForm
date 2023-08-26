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
                    <h1 class="h3 mb-2 text-gray-800">Meetings</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptas autem blanditiis molestiae iusto, debitis commodi repellendus aliquid vero.</p>


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