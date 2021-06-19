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
        $subtitle = $_POST['subtitle'];
        $btext = $_POST['btext'];
        $burl = $_POST['burl'];
        $details = $_POST['details'];
        $image = $_FILES['banner_pic'];
        $ImageName = 'Banner-' . time() . '-' . rand(10000, 100000) . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
        if (!empty($title)) {
            if (!empty($image)) {
                $insert = "UPDATE cit_banner SET ban_title='$title',ban_subtitle='$subtitle',ban_text='$btext',ban_url='$burl',ban_details='$details',ban_image='$ImageName' WHERE ban_id='$id'";
                        
                if (mysqli_query($con, $insert)) {
                    move_uploaded_file($image['tmp_name'], 'uploads/' . $ImageName);
                    echo "Successfully Uploaded Banner.";
                } else {
                    echo "Upload Failed!";
                }
            } else {
                echo "Please enter banner image!";
            }
        } else {
            echo "Please enter banner title!";
        }
    }
    ?>
    <div class="col-md-12">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="col-md-9 heading_title">
                        Add Banner
                    </div>
                    <div class="col-md-3 text-right">
                        <a href="all-banner.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Banner</a>
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
                        <label for="" class="col-sm-3 control-label">Subtitle</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="subtitle">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Button Text</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="btext">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Button Url</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="burl">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Banner Details</label>
                        <div class="col-sm-8">
                            <textarea name="details" class="form-control" id=""  rows="5" placeholder="Details"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Banner</label>
                        <div class="col-sm-8">
                            <input type="file" name="banner_pic">
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