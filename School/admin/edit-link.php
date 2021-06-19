<?php
session_start();
require_once('functions/function.php');
needLogged();
date_default_timezone_set('Asia/Dhaka');
if ($_SESSION['role'] <= 2) {
    get_header();
    get_sidebar();
    get_bread();
    $id=$_GET['e'];
    if (!empty($_POST)) {
        $title = $_POST['title'];
        
        if (!empty($title)) {
            
                $insert = "UPDATE cit_link SET link_title='$title' WHERE link_id='$id'";
                if (mysqli_query($con, $insert)) {
   
                    echo "Successfully Uploaded News.";
                } else {
                    echo "Upload Failed!";
                }
        }
    }
    
    ?>
    <div class="col-md-12">
        <form class="form-horizontal" action="" method="post">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="col-md-9 heading_title">
                        Add Link
                    </div>
                    <div class="col-md-3 text-right">
                        <a href="all-links.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Links</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="title">
                        </div>
                    </div>
                   
                </div>
                <div class="panel-footer text-center">
                    <button class="btn btn-sm btn-primary">UPLOAD</button>
                </div>
            </div>
        </form>
    </div><!--col-md-12 end-->
    <?php
    get_footer();
} else {
    echo "Access Denied!!!";
}
?>