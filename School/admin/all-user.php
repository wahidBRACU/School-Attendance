<?php session_start();
require_once('functions/function.php');
needLogged();
get_header();
get_sidebar();
get_bread();
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-sm-9">
                    <strong>Table Information</strong>
                </div>
                <div class="col-sm-3">
                    <a href="add-user.php" class="amar_btn"> <i class="fa fa-plus-square"></i> Add User</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-responsive table-hover amar_table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Username</th>
                            <th>User Role</th>
                            <th>Photo</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sel = "SELECT * FROM cit_user NATURAL JOIN cit_role";
                        $qry = mysqli_query($con, $sel);
                        while ($data = mysqli_fetch_array($qry)) {
                        ?>
                            <tr>
                                <td><?= $data['name']; ?></td>
                                <td><?= $data['email']; ?></td>
                                <td><?= $data['phone']; ?></td>
                                <td><?= $data['username']; ?></td>
                                <td><?= $data['role_name']; ?></td>
                                <td>
                                    <img src="uploads/<?= $data['photo'];?>" height="50" alt=""/>
                                </td>
                                <td>
                                    <a href="view-user.php?v=<?= $data['id'] ?>" title="View"><i class="fa fa-plus-square"></i></a>
                                    <a href="edit-user.php?e=<?= $data['id'] ?>" title="Edit"><i class="fa fa-pencil-square"></i></a>
                                    <a href="delete-user.php?d=<?= $data['id'] ?>" title="Delete"><i class="fa fa-trash"></i></a>
                     
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="panel-footer">
                .
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>