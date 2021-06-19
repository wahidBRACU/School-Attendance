<?php
	require_once('functions/function.php');
	get_header();
	get_sidebar();
	get_bread();
	//view code start
	$id=$_GET['v'];
	$sele="SELECT * FROM cit_footer NATURAL JOIN cit_footer_position WHERE id='$id'";
	$qry=mysqli_query($con,$sele);
	$data=mysqli_fetch_array($qry);
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="col-sm-9">
                <strong>Footer Information</strong>
            </div>
            <div class="col-sm-3">
                <a href="all-footer.php" class="amar_btn"> <i class="fa fa-plus-square"></i> All Footer</a>
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
                            	<?= $data['foot_title'];?>
                            </td>
                        </tr>
                        <tr>
                        	<td>Details</td>
                            <td>:</td>
                            <td>
                            	<?= $data['foot_details'];?>
                            </td>
                        </tr>
                        <tr>
                        	<td>Image</td>
                            <td>:</td>
                            <td>
                            	<img height="50" src="uploads/<?= $data['foot_image']; ?>" alt="footer" />
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