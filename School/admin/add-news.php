<?php
session_start();
require_once('functions/function.php');
needLogged();
date_default_timezone_set('Asia/Dhaka');
if ($_SESSION['role'] <= 2) {
    get_header();
    get_sidebar();
    get_bread();
    if (!empty($_POST)) {
        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $ntext = $_POST['details'];
        $ncate = $_POST['category'];
        $image = $_FILES['news_pic'];
        $date = date(DATE_RFC2822);
        $ImageName = 'News-' . time() . '-' . rand(10000, 100000) . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
        if (!empty($title)) {
            if (!empty($image)) {
                $insert = "INSERT INTO cit_news(news_title,news_subtitle,news_details,news_image,ncate_id,news_time)"
                        . "VALUES('$title','$subtitle','$ntext','$ImageName','$ncate','$date')";
                if (mysqli_query($con, $insert)) {
                    move_uploaded_file($image['tmp_name'], 'uploads/' . $ImageName);
                    echo "Successfully Uploaded News.";
                } else {
                    echo "Upload Failed!";
                }
            } else {
                echo "Please enter news image!";
            }
        } else {
            echo "Please enter news title!";
        }
    }
    ?>
    <div class="col-md-12">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="col-md-9 heading_title">
                        Add News
                    </div>
                    <div class="col-md-3 text-right">
                        <a href="all-news.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All News</a>
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
                        <label for="" class="col-sm-3 control-label">Details </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="details">
                        </div>
                    </div>
                    <div class="form-group">
                <label for="" class="col-sm-3 control-label">User-Category</label>
                <div class="col-sm-5">
                      <select name="category" class="form-control">
                        <?php  
							$sel="SELECT * FROM cit_news_category";
							$qry=mysqli_query($con,$sel);
							while($per=mysqli_fetch_array($qry)){
						?>
                        	<option value="<?= $per['ncate_id'];?>"><?= $per['ncate_name'];?></option>
                        <?php }?>
                      </select>
                </div>
              </div>
                 
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">News Picture</label>
                        <div class="col-sm-8">
                            <input type="file" name="news_pic">
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