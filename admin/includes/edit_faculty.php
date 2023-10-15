<?php

if (isset($_GET['f_id'])) {

    $f_id = escape($_GET['f_id']);

}

$query = "SELECT * FROM faculty WHERE id = {$f_id}";
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

}

if (isset($_POST['edit_faculty'])) {

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
    $query .= "WHERE id = {$f_id} ";

    $update_query = mysqli_query($connection, $query);

    confirmQuery($update_query);

    header("Location: faculty.php?source=view_faculty");

}

?>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 offset-lg-2">
                <div class="card">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 mt-5 mb-2">
                                <h4>Edit Faculty</h4>
                            </div>
                            <div class="col-md-6 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="fname" name="firstname" value="<?php echo $firstname; ?>" required>
                                    <label for="floatingInput">First Name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="lname" name="lastname" value="<?php echo $lastname; ?>" required>
                                    <label for="floatingInput">Last Name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-12 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="lname" name="email" value="<?php echo $email; ?>" required>
                                    <label for="floatingInput">Email Address <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="dept" name="dept" value="<?php echo $department; ?>" required>
                                    <label for="floatingInput">Department <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="lname" name="designation" value="<?php echo $designation; ?>" required>
                                    <label for="floatingInput">Designation <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-12  mb-3">
                                <select class="form-select mt-3" style="height: 60px;" name="role" required>
                                    <option selected disabled value="">Role <span class="text-danger">*</span></option>

                                    <option value='admin'>Admin</option>
                                    <option value='head'>Head</option>
                                    <option value='faculty'>Faculty Member</option>
                                    <option value='AdminStuff'>Administrative Stuff</option>

                                </select>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="form-button mt-3">
                                <input id="submit" name="edit_faculty" type="submit" value="UPDATE" class="btn btn-success sh-search" style="width: 100%;"></input>
                            </div> 
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

<style>
    .card{
        margin-top: 20px;
        margin-bottom: 20px;
        min-height: 65vh;
        border: 1px solid #e6e6e6;
        border-radius: 5px;
        background-color: #fff;
        box-shadow: 0 5px 10px rgba(0,0,0,.4);
    }
</style>