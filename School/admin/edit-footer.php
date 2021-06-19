<?php
session_start();
require_once('functions/function.php');
needLogged();
if ($_SESSION['role'] <= 2) {
    get_header();
    get_sidebar();
    get_bread();
    $id=$_GET['e'];
    if (!empty($_POST)) {
        $title = $_POST['title'];
        $details = $_POST['details'];
        $image = $_FILES['footer_pic'];
        $ImageName = 'Footer-' . time() . '-' . rand(10000, 100000) . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
        $ImageData=$ImageName."\" alt=\"\"></a></li>";
        if (!empty($title)) {
            if (!empty($image)) {
                $insert = "UPDATE cit_footer SET foot_title='$title',foot_details='$details',foot_image='$ImageName' WHERE foot_pos_id='$id'";
                        
                if (mysqli_query($con, $insert)) {
                    move_uploaded_file($image['tmp_name'], 'uploads/' . $ImageName);
                    echo "Successfully Uploaded footer.";
                } else {
                    echo "Upload Failed!";
                }
            } else {
                echo "Please enter footer image!";
            }
        } else {
            echo "Please enter footer title!";
        }
    }
    ?>
    <div class="col-md-12">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="col-md-9 heading_title">
                        Add Footer
                    </div>
                    <div class="col-md-3 text-right">
                        <a href="all-footer.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Footer</a>
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
                    
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Footer Details</label>
                        <div class="col-sm-8">
                            <textarea name="details" class="form-control" id=""  rows="5" placeholder="details"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Footer pic</label>
                        <div class="col-sm-8">
                            <input type="file" name="footer_pic">
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