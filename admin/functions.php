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
            <td width='5%'><a onclick=\"javascript: return confirm('Do you really want to delete the user?')\" href='faculty.php?delete={$id}' class='btn btn-danger'>DELETE</a></td>
          </tr>";

    }

}


function updateFaculty($the_id)
{
    global $connection;

    if (isset($_POST['update_faculty'])) {
        $firstname = escape($_POST['firstname']);
        $lastname = escape($_POST['lastname']);
        $email = escape($_POST['email']);
        $department = escape($_POST['dept']);
        $designation = escape($_POST['designation']);
        $role = escape($_POST['role']);

        $query = "UPDATE faculty SET ";
        $query .= "first_name = '{$firstname}', ";
        $query .= "last_name = '{$lastname}', ";
        $query .= "email = '{$email}', ";
        $query .= "department = '{$department}', ";
        $query .= "designation = '{$designation}', ";
        $query .= "role = '{$role}' ";
        $query .= "WHERE id = {$the_id} ";

        $update_query = mysqli_query($connection, $query);

        confirmQuery($update_query);

        header("Location: faculty.php");
    }
}

// function users_online()
// {
//     global $connection;

//     $session = session_id();
//     $time = time();
//     $time_out_in_seconds = 40;

//     $time_out = $time - $time_out_in_seconds;

//     $query = "SELECT * FROM users_online WHERE session = '$session'";
//     $send_query = mysqli_query($connection, $query);
//     $count = mysqli_num_rows($send_query);

//     if ($count == NULL) {
//         mysqli_query($connection, "INSERT INTO users_online(session, time) VALUES('$session', '$time')");
//     } else {
//         mysqli_query($connection, "UPDATE users_online SET time = '$time' WHERE session = '$session'");
//     }

//     $users_online_query = mysqli_query($connection, "SELECT * FROM users_online WHERE time > '$time_out'");
//     return mysqli_num_rows($users_online_query);

// }


?>