<?php session_start();
	require_once('functions/function.php');
        needLogged();
	get_header();
	get_sidebar();
	get_bread();
	//view code start
	$id=$_GET['v'];
	$sele="SELECT * FROM cit_contactus WHERE conus_id='$id'";
	$qry=mysqli_query($con,$sele);
	$data=mysqli_fetch_array($qry);
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="col-sm-9">
                <strong>Contact Message Details</strong>
            </div>
            <div class="col-sm-3">
                <a href="all-mess.php" class="amar_btn"> <i class="fa fa-plus-square"></i> All Message</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-body">
              <div class="col-md-2"></div>
              <div class="col-md-8">
              		<table class="table table-hover table-striped table-responsive view_table_cus">
                    	<tr>
                        	<td>Name</td>
                            <td>:</td>
                            <td>
                            	<?= $data['conus_name'];?>
                            </td>
                        </tr>
                        <tr>
                        	<td>Email</td>
                            <td>:</td>
                            <td>
                                <a href="mailto:<?= $data['conus_email'];?>"><?= $data['conus_email'];?></a>
                            </td>
                        </tr>
                        <tr>
                        	<td>Phone</td>
                            <td>:</td>
                            <td>
                            	<?= $data['conus_phone'];?>
                            </td>
                        </tr>
                        <tr>
                        	<td>Subject</td>
                            <td>:</td>
                            <td>
                            	<?= $data['conus_sub'];?>
                            </td>
                        </tr>
                        <tr>
                            <td>Message</td>
                            <td>:</td>
                            <td>
                            	<?= $data['conus_mess'];?>
                            </td>
                        </tr>
                        <tr>
                            <td>Message Time</td>
                            <td>:</td>
                            <td>
                            	<?= $data['conus_time'];?>
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