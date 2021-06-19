<?php   session_start();
	require_once('functions/function.php');
	get_header();
	get_sidebar();
	get_bread();
	//view code start
	$id=$_GET['v'];
	$sele="SELECT * FROM cit_news NATURAL JOIN cit_news_category WHERE news_id='$id'";
	$qry=mysqli_query($con,$sele);
	$data=mysqli_fetch_array($qry);
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="col-sm-9">
                <strong>News Information</strong>
            </div>
            <div class="col-sm-3">
                <a href="all-news.php" class="amar_btn"> <i class="fa fa-plus-square"></i> All News</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-body">
              <div class="col-md-2"></div>
              <div class="col-md-8">
              		<table class="table table-hover table-striped table-responsive view_table_cus">
                    	<tr>
                        	<td>Title</td>
                            <td>:</td>
                            <td>
                            	<?= $data['news_title'];?>
                            </td>
                        </tr>
                        <tr>
                        	<td>Subtitle</td>
                            <td>:</td>
                            <td>
                            	<?= $data['news_subtitle'];?>
                            </td>
                        </tr>
                        <tr>
                        	<td>Text</td>
                            <td>:</td>
                            <td>
                            	<?= $data['news_details'];?>
                            </td>
                        </tr>
                        <tr>
                        	<td>Image</td>
                            <td>:</td>
                            <td>
                            	<img height="50" src="uploads/<?= $data['news_image']; ?>" alt="news" />
                            </td>
                        </tr>
                    </table>
              </div>
              <div class="col-md-2"></div>
              <div class="clr"></div>
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