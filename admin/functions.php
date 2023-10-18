<?php

function escape($string)
{
    global $connection;

    return mysqli_real_escape_string($connection, trim($string));
}


function confirmQuery($result)
{
    global $connection;

    if (!$result) {
        die("Query Failed" . mysqli_error($connection));
    }
}

function generateMeetingId($date, $time)
{
    $date = str_replace("-", "", $date);
    $time = str_replace(":", "", $time);

    $meeting_id = $date . $time;

    return $meeting_id;
}


function isPreviousMeeting($inputDate)
{
    $inputTimestamp = strtotime($inputDate);

    $currentTimestamp = time();

    if ($inputTimestamp === false) {
        return;
    } elseif ($inputTimestamp < $currentTimestamp) {
        return true;
    } elseif ($inputTimestamp > $currentTimestamp) {
        return false;
    } else {
        return true;
    }
}

function getAllMeetings()
{
    global $connection;

    $query = "SELECT * FROM meetings";
    $select_meetings = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_meetings)) {
        $id = escape($row['id']);
        $applicant_name = escape($row['applicant_name']);
        $applicant_designation = escape($row['designation']);
        $meeting_date = escape($row['meeting_date']);
        $formatted_meeting_date = date("j F Y", strtotime($meeting_date));
        $start_time = escape($row['start_time']);
        $formatted_start_time = date("g:i A", strtotime($start_time));
        $meeting_status = escape($row['meeting_status']);
        $meeting_id = generateMeetingId($meeting_date, $start_time);


        echo "<tr>
            <td class='text-dark text-center'>$meeting_id</td>
            <td class='text-dark text-center'>$applicant_name</td>
            <td class='text-dark text-center'>$applicant_designation</td>
            <td class='text-dark text-center'>$formatted_meeting_date</td>
            <td class='text-dark text-center'>$formatted_start_time</td>
            <td class='text-dark text-center'>$meeting_status</td>
            <td width='5%'><a href='request_details.php?r_id={$id}&m_status={$meeting_status}' class='btn btn-info'>VIEW</a></td>
          </tr>";


    }

}


function getPendingMeetings()
{
    global $connection;

    $query = "SELECT * FROM meetings WHERE meeting_status = 'pending'";
    $select_meetings = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_meetings)) {
        $id = escape($row['id']);
        $applicant_name = escape($row['applicant_name']);
        $applicant_designation = escape($row['designation']);
        $meeting_date = escape($row['meeting_date']);
        $formatted_meeting_date = date("j F Y", strtotime($meeting_date));
        $start_time = escape($row['start_time']);
        $formatted_start_time = date("g:i A", strtotime($start_time));
        $meeting_status = escape($row['meeting_status']);
        $meeting_id = generateMeetingId($meeting_date, $start_time);

        echo "<tr>
            <td class='text-dark text-center'>$meeting_id</td>
            <td class='text-dark text-center'>$applicant_name</td>
            <td class='text-dark text-center'>$applicant_designation</td>
            <td class='text-dark text-center'>$formatted_meeting_date</td>
            <td class='text-dark text-center'>$formatted_start_time</td>
            <td class='text-dark text-center'>$meeting_status</td>
            <td width='5%'><a href='request_details.php?r_id={$id}&m_status={$meeting_status}' class='btn btn-info'>VIEW</a></td>
          </tr>";

    }

}


function getPreviousMeetings()
{
    global $connection;

    $query = "SELECT * FROM meetings WHERE meeting_status = 'completed'";
    $select_meetings = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_meetings)) {
        $id = escape($row['id']);
        $applicant_name = escape($row['applicant_name']);
        $applicant_designation = escape($row['designation']);
        $meeting_date = escape($row['meeting_date']);
        $formatted_meeting_date = date("j F Y", strtotime($meeting_date));
        $start_time = escape($row['start_time']);
        $formatted_start_time = date("g:i A", strtotime($start_time));
        $meeting_status = escape($row['meeting_status']);
        $meeting_id = generateMeetingId($meeting_date, $start_time);


        echo "<tr>
            <td class='text-dark text-center'>$meeting_id</td>
            <td class='text-dark text-center'>$applicant_name</td>
            <td class='text-dark text-center'>$applicant_designation</td>
            <td class='text-dark text-center'>$formatted_meeting_date</td>
            <td class='text-dark text-center'>$formatted_start_time</td>
            <td class='text-dark text-center'>$meeting_status</td>
            <td width='5%'><a href='request_details.php?r_id={$id}&m_status={$meeting_status}' class='btn btn-info'>VIEW</a></td>
        </tr>";
    }

}


function getAllFaculty()
{
    global $connection;

    $query = "SELECT * FROM faculty";
    $select_faculties = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_faculties)) {
        $id = escape($row['id']);
        $firstname = escape($row['first_name']);
        $lastname = escape($row['last_name']);
        $fullname = $firstname . " " . $lastname;
        $email = escape($row['email']);
        $department = escape($row['department']);
        $designation = escape($row['designation']);
        $role = escape($row['role']);

        echo "<tr>
            <td class='text-dark text-center'>$fullname</td>
            <td class='text-dark text-center'>$designation</td>
            <td class='text-dark text-center'>$department</td>
            <td class='text-dark text-center'>$email</td>
            <td class='text-dark text-center'>$role</td>
            <td width='5%'><a href='faculty.php?source=edit_faculty&f_id={$id}' class='btn btn-warning'>EDIT</a></td>
            
          </tr>";

    }

}

?>