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

              if (isset($_GET['r_id']) && isset($_GET['m_status'])) {
                $id = $_GET['r_id'];
                $m_status = $_GET['m_status'];
              }

              $query = "SELECT * FROM meetings WHERE id = {$id}";
              $select_meetings = mysqli_query($connection, $query);

              while ($row = mysqli_fetch_assoc($select_meetings)) {
                $id = escape($row['id']);

                // APPLICANT DETAILS
                $applicant_email = escape($row['applicant_name']);
                $applicant_designation = escape($row['designation']);


                // MEETING DETAILS
                $meeting_date = escape($row['meeting_date']);
                $formatted_meeting_date = date("j F Y", strtotime($meeting_date));
                $start_time = escape($row['start_time']);
                $end_tmie = escape($row['end_time']);
                $booked_time = date("g:i A", strtotime($start_time)) . " to " . date("g:i A", strtotime($end_tmie));
                $meeting_purpose = escape($row['details']);
                $meeting_id = generateMeetingId($meeting_date, $start_time);

                // TECHNICAL SUPPORTS
                $ict_help_reason = escape($row['ict_help_reason']);
                $other_tech = escape($row['other_support']);
                $pc = escape($row['pc']);
                $glass_board = escape($row['glass_board']);
                $mic_wireless = escape($row['mic_wireless']);
                $mic_wire = escape($row['mic_wire']);
                $big_displays = escape($row['big_displays']);
                $wifi = escape($row['wifi']);
                $add_projector = escape($row['add_projector']);
                $bdren = escape($row['bdren']);

                $technical_supports = array(
                  "Desktop PC" => $pc,
                  "Glass Board" => $glass_board,
                  "Microphone (Wireless)" => $mic_wireless,
                  "Microphone (Handhold)" => $mic_wire,
                  "Big Displays" => $big_displays,
                  "Wi-Fi" => $wifi,
                  "Additional Projector" => $add_projector,
                  "BdREN Zoom" => $bdren
                );

                $technical_supports = array_filter($technical_supports);


                // LOGISTICS SUPPORTS
                $table_cloth = escape($row['table_cloth']);
                $vase = escape($row['vase']);
                $wireless_mic_bat = escape($row['wireless_mic_bat']);
                $add_chair = escape($row['add_chair']);
                $add_mic = escape($row['add_mic']);
                $other_logi = escape($row['other']);

                $logistics_supports = array(
                  "Desk-Table Cloth" => $table_cloth,
                  "Flower Vase" => $vase,
                  "Wireless Microphone Battery" => $wireless_mic_bat,
                  "Additional Chair" => $add_chair,
                  "Additional Microphone" => $add_mic,
                );

                $logistics_supports = array_filter($logistics_supports);

                // OFFICIAL COVERAGE
                $photography = escape($row['photography']);
                $video_recording = escape($row['video_recording']);

                $official_coverage = array(
                  "Photography" => $photography,
                  "Video Recording" => $video_recording
                );

                $official_coverage = array_filter($official_coverage);

                // REFRESHMENT SUPPORTS
                $cafe = escape($row['cafe']);
                $own_arrange = escape($row['own_arrange']);

                $refreshment_supports = array(
                  "Arranged by Cafeteria" => $cafe,
                  "Arranged by Particular Department" => $own_arrange
                );

                $refreshment_supports = array_filter($refreshment_supports);

              }


              ?>


<div class="container">
   <h1 class="h3 mb-4 text-gray-800">Meeting Details : <?php echo $meeting_id ?> </h1>

    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-12">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Applicant Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $applicant_email ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Designation</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $applicant_designation ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date of Booking</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $formatted_meeting_date ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Time of Booking</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $booked_time ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Purpose</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $meeting_purpose ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Technical Supports</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php
                    foreach ($technical_supports as $key => $value) {
                      if ($value == 1 || $value != null) {
                        echo $key . ", ";
                      }
                    }

                    echo "Other Supports : " . $other_tech;
                    ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Logistics Supports</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php
                    foreach ($logistics_supports as $key => $value) {
                      if ($value == 1 || $value != null) {
                        echo $key . ", ";
                      }
                    }

                    echo "Other Supports : " . $other_logi;
                    ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Official Coverage</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php
                    foreach ($official_coverage as $key => $value) {
                      if ($value == 1 || $value != null) {
                        echo $key . ", ";
                      }
                    }
                    ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Refreshment Supports</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php
                    foreach ($refreshment_supports as $key => $value) {
                      if ($value == 1 || $value != null) {
                        echo $key;
                      }
                    }
                    ?>
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
                      <?php
                      if ($m_status == 'pending') {
                        echo "<input class='btn btn-info' type='submit' value='Submit'>";
                      } else {
                        echo "<input class='btn btn-info' type='submit' value='Submit' disabled>";
                      }

                      ?>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
            <form action="" method="post" enctype="multipart/form-data">
              <?php

              if ($m_status == 'pending') {

                echo "<input class='btn btn-danger' type='submit' name='delete_request' value='Delete'></input>";
                echo " ";
                echo "<input class='btn btn-success' type='submit' name='approve_request' value='Approve'></input>";
              } else if ($m_status == 'approved') {
                echo "<input class='btn btn-warning' type='submit' name='unapprove_request' value='Unapprove'></input>";
              } else {

              }

              ?>
          </form>
        </div>
    </div>

    <?php


    if (isset($_POST['approve_request'])) {

      $id = $_GET['r_id'];

      $start_dateTime = $meeting_date . " " . $start_time;
      $end_dateTime = $meeting_date . " " . $end_tmie;

      $schedule_query = "INSERT INTO schedules(title, description, start_dateTime, end_dateTime) VALUES ('{$meeting_id}', '{$meeting_purpose}', '{$start_dateTime}', '{$end_dateTime}') ";

      $insert_schedule = mysqli_query($connection, $schedule_query);

      confirmQuery($insert_schedule);

      $meeting_query = "UPDATE meetings SET meeting_status = 'approved' WHERE id = {$id} ";
      $approve_query = mysqli_query($connection, $meeting_query);

      confirmQuery($approve_query);


      header("Location: meetings.php?source=pending_requests");

    }


    if (isset($_POST['unapprove_request'])) {

      $id = $_GET['r_id'];

      $schedule_query = "DELETE FROM schedules WHERE title = '{$meeting_id}' ";

      $delete_schedule = mysqli_query($connection, $schedule_query);

      confirmQuery($delete_schedule);

      $meeting_query = "UPDATE meetings SET meeting_status = 'pending' WHERE id = {$id} ";
      $approve_query = mysqli_query($connection, $meeting_query);

      confirmQuery($approve_query);


      header("Location: meetings.php?source=pending_requests");

    }


    if (isset($_POST['delete_request'])) {

      $id = $_GET['r_id'];

      $query = "DELETE FROM meetings WHERE id = {$id} ";
      $delete_query = mysqli_query($connection, $query);

      confirmQuery($delete_query);

      header("Location: meetings.php?source=pending_requests");

    }

    ?>


</div>
        <!-- End of Main Content -->

<!-- Footer -->
<?php include("includes/admin_footer.php"); ?>