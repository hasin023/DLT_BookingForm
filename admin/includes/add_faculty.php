<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <input class="form-control bg-light border-1 small" type="text" name="user_firstname" placeholder="First Name">
    </div>

    <div class="form-group">
        <input class="form-control bg-light border-1 small" type="text" name="user_lastname" placeholder="Last Name">
    </div>

    <div class="form-group">
        <input class="form-control bg-light border-1 small" type="text" name="user_dept" placeholder="Department">
    </div>

     <div class="form-group">
        <select class="form-control bg-light border-1 small" type="text" name="user_role">
            <option value="none">Select Designation</option>
            <option value="admin">Professor</option>
            <option value="subscriber">Associate Professor</option>
            <option value="subscriber">Assistant Professor</option>
            <option value="subscriber">Lecture</option>
        </select>
    </div>

    <div class="form-group">
        <input class="form-control bg-light border-1 small" type="email" name="user_email" placeholder="Email">
    </div>

    <div class="form-group">
        <i class="fas fa-fw fa-upload"></i>
        <input class="inputfile" id="file" type="file" name="user_image">
    </div>

    <div class="form-group">
        <input class="btn btn-success" type="submit" name="create_user" value="Add User">
    </div>

</form>
