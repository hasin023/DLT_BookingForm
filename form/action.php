<?php
// Include the database connection
include '../connection.php';

// Ensure this PHP file is accessed only through POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $applicant = $_POST['email'];
    $today = $_POST['today'];
    $designation = $_POST['Designation'];
    $purpose = $_POST['purpose'];
    $bookingday = $_POST['bookingday'];
    $timefrom = $_POST['timefrom'];
    $timeto = $_POST['timeto'];
    $technicalperson = $_POST['technicalperson'];
    $othersupport = $_POST['othersupport'];
    $otherlogi = $_POST['otherlogi'];
    $meeting_status = "pending";

    // Checkboxes
    $desktop_pc = isset($_POST['desktop_pc']) ? 1 : 0;
    $big_displays = isset($_POST['big_displays']) ? 1 : 0;
    $add_projector = isset($_POST['add_projector']) ? 1 : 0;
    $writing_glass_board = isset($_POST['writing_glass_board']) ? 1 : 0;
    $wifi = isset($_POST['wifi']) ? 1 : 0;
    $bdren_zoom = isset($_POST['bdren_zoom']) ? 1 : 0;
    $microphone_wireless = isset($_POST['microphone_wireless']) ? 1 : 0;
    $microphone_handhold = isset($_POST['microphone_handhold']) ? 1 : 0;
    $table_cloth = isset($_POST['table_cloth']) ? 1 : 0;
    $vase = isset($_POST['vase']) ? 1 : 0;
    $wireless_mic_bat = isset($_POST['wireless_mic_bat']) ? 1 : 0;
    $add_chair = isset($_POST['add_chair']) ? 1 : 0;
    $add_mic = isset($_POST['add_mic']) ? 1 : 0;
    $photography = isset($_POST['photography']) ? 1 : 0;
    $video_recording = isset($_POST['video_recording']) ? 1 : 0;
    $cafe_cafeteria = isset($_POST['cafe_cafeteria']) ? 1 : 0;
    $own_arrange = isset($_POST['own_arrange']) ? 1 : 0;


    $bookingdayTimestamp = strtotime($bookingday);
    $todayTimestamp = strtotime('today');

    // Check if bookingday is previous than today
    if ($bookingdayTimestamp < $todayTimestamp) {
        header("Location: ../form?status=wrongdate");
        exit; // Make sure to exit after redirection
    }

    // Check if timeto is selected previous than timefrom
    if ($timeto < $timefrom) {
        header("Location: ../form?status=wrongtime");
        exit; // Make sure to exit after redirection
    }

    // Prepare and execute SQL query
    $sql = "INSERT INTO meetings 
    (applicant_name, application_date, designation, details, meeting_date, 
    start_time, end_time, ict_help_reason, other_support, pc, glass_board,
    mic_wireless, mic_wire, big_displays, wifi, add_projector, bdren, 
    table_cloth, vase, wireless_mic_bat, add_chair, add_mic, other, 
    photography, video_recording, cafe, own_arrange, meeting_status) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";



    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sssssssssiiiiiiiiiiiiisiiiis", $applicant, $today, $designation, $purpose, $bookingday, $timefrom, $timeto, $technicalperson, $othersupport, $desktop_pc, $writing_glass_board, $microphone_wireless, $microphone_handhold, $big_displays, $wifi, $add_projector, $bdren_zoom, $table_cloth, $vase, $wireless_mic_bat, $add_chair, $add_mic, $otherlogi, $photography, $video_recording, $cafe_cafeteria, $own_arrange, $meeting_status);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location: ../form?status=success");
    } else {
        header("Location: ../form?status=failed");
    }

    // Close statement and connection
    $stmt->close();
    $connection->close();
}
?>
