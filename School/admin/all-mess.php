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
                    <strong>All Contact Message</strong>
                </div>
                <div class="col-sm-3">
                    <a href="#" class="amar_btn"> <i class="fa fa-plus-square"></i> All Message</a>
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
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Time</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sel = "SELECT * FROM cit_contactus ORDER BY conus_id DESC";
                        $qry = mysqli_query($con, $sel);
                        while ($data = mysqli_fetch_array($qry)) {
                        ?>
                            <tr>
                                <td><?= $data['conus_name']; ?></td>
                                <td><?= $data['conus_email']; ?></td>
                                <td><?= $data['conus_phone']; ?></td>
                                <td><?= substr($data['conus_sub'],0,10); ?>...</td>
                                <td><?= substr($data['conus_mess'],0,15); ?>...</td>
                                <td><?= $data['conus_time']; ?></td>
                                <td>
                                    <a href="view-mess.php?v=<?= $data['conus_id'] ?>" title="View"><i class="fa fa-plus-square"></i></a>
                                    <a href="delete-mess.php?d=<?= $data['conus_id'] ?>" title="Delete"><i class="fa fa-trash"></i></a>
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