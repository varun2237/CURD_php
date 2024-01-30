<?php
session_start();
require 'dbcon.php';
?>

<?php include('includes/header.php'); ?>

<div class="container mt-5">

    <?php include('message.php'); ?>

    <div class="row">

        <div class="col-md-12">

            <div class="card">

                <div class="card-header">
                    <h4>Student Details <a href="student-create.php" class="btn btn-primary float-end"> ADD </a>
                    </h4>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Student Name </th>
                                    <th> Email </th>
                                    <th> Phone </th>
                                    <th> Course </th>
                                    <th> Action </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $query = "SELECT * FROM student";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $student) {

                                        ?>
                                        <tr>
                                            <td>
                                                <?= $student['id']; ?>
                                            </td>
                                            <td>
                                                <?= $student['name']; ?>
                                            </td>
                                            <td>
                                                <?= $student['email']; ?>
                                            </td>
                                            <td>
                                                <?= $student['phone']; ?>
                                            </td>
                                            <td>
                                                <?= $student['course']; ?>
                                            </td>d
                                            <td>
                                                <a href="student-view.php?id=<?= $student['id']; ?>"
                                                    class="btn btn-info btn-sm">View</a>
                                                <a href="student-edit.php?id=<?= $student['id']; ?>"
                                                    class="btn btn-success btn-sm">Edit</a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_student" value="<?= $student['id']; ?>"
                                                        href="" class="btn btn-danger btn-sm"> Delete </b>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }

                                } else {
                                    echo "<h5> No Record Found </h5>";
                                }
                                ?>

                            </tbody>

                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>