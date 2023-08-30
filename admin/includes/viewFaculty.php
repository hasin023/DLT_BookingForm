<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Faculties Table</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Designation</th>
                        <th class="text-center">Department</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Role</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <?php getAllFaculty(); ?>
                    <!-- <tr>
                        <td class="text-center">John Doe</td>
                        <td class="text-center">Computer Science</td>
                        <td class="text-center">Professor</td>
                        <td class="text-center">john.doe@example.com</td>
                        <td class="text-center">123 Main St, Room 101</td>
                    </tr>
                    -->
                </tbody>
            </table>

            <?php


            if (isset($_GET['delete'])) {

                if (isset($_SESSION['role'])) {
                    if ($_SESSION['role'] == 'admin') {
                        $id = mysqli_real_escape_string($connection, $_GET['delete']);

                        $query = "DELETE FROM faculty WHERE id = {$id} ";
                        $delete_query = mysqli_query($connection, $query);

                        confirmQuery($delete_query);

                        header("Location: faculty.php");
                    }
                }

            }

            ?>


        </div>
    </div>
</div>
