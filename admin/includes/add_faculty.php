<?php

if (isset($_POST['add_faculty'])) {
    $firstname = escape($_POST['firstname']);
    $lastname = escape($_POST['lastname']);
    $email = escape($_POST['email']);
    $department = escape($_POST['dept']);
    $designation = escape($_POST['designation']);
    $role = escape($_POST['role']);

    $query = "INSERT INTO faculty(first_name, last_name, email, department, designation, role) ";

    $query .= "VALUES('{$firstname}', '{$lastname}', '{$email}', '{$department}', '{$designation}', '{$role}') ";

    $create_faculty_query = mysqli_query($connection, $query);

    confirmQuery($create_faculty_query);

    echo "<p>Faculty has been added. <a href='faculty.php'>View Users</a></p>";

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
                                <h4>Add New Faculty</h4>
                            </div>
                            <div class="col-md-6 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="fname" name="firstname" required>
                                    <label for="floatingInput">First Name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="lname" name="lastname" required>
                                    <label for="floatingInput">Last Name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-12 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="lname" name="email" required>
                                    <label for="floatingInput">Email Address <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="dept" name="dept" required>
                                    <label for="floatingInput">Department <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="lname" name="designation" required>
                                    <label for="floatingInput">Designation <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-12  mb-3">
                                <select class="form-select mt-3" style="height: 60px;" name="role" required>
                                    <option selected disabled value="">Role <span class="text-danger">*</span></option>
                                    <option value="admin">Admin</option>
                                    <option value="moderator">Moderator</option>
                                    <option value="head">Head</option>
                                    <option value="faculty">Faculty Member</option>
                                    <option value="AdminStuff">Administrative Stuff</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="form-button mt-3">
                                <input id="submit" name="add_faculty" type="submit" value="Add Faculty" class="btn btn-success sh-search" style="width: 100%;"></input>
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