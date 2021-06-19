<?php
	require_once('functions/function.php');
	get_header();
	get_sidebar();
	get_bread();
	//Update User
	$id=$_GET['e'];
	$sele="SELECT * FROM cit_user NATURAL JOIN cit_role WHERE id='$id'";
	$qry=mysqli_query($con,$sele);
	$data=mysqli_fetch_array($qry);
	
	if(!empty($_POST)){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$role=$_POST['role'];
		$edit= "UPDATE cit_user SET name='$name', email='$email' WHERE id='$id'";
		if(mysqli_query($con,$edit)){
			header('Location: all-user.php');
		}else{
			echo "User update failed!!!";
		}
	}
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="col-sm-9">
                <strong>User Registration</strong>
            </div>
            <div class="col-sm-3">
                <a href="all-user.php" class="amar_btn"> <i class="fa fa-plus-square"></i> All User</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-body">
            <form class="form-horizontal" method="post">
              <div class="form-group">
                <label class="col-sm-3 control-label">Name<span class="req_span">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="name" value="<?= $data['name'];?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Email<span class="req_span">*</span></label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" name="email" value="<?= $data['email'];?>">
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-3 control-label">Phone</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="phone" value="<?= $data['phone'];?>">
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-3 control-label">Username<span class="req_span">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="user" value="<?= $data['username'];?>" disabled="disabled">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">User-Role</label>
                <div class="col-sm-5">
                      <select name="role" class="form-control">
                        <?php  
							$sel="SELECT * FROM cit_role";
							$qry=mysqli_query($con,$sel);
							while($per=mysqli_fetch_array($qry)){
						?>
                        	<option value="<?= $per['role_id'];?>"><?= $per['role_name'];?></option>
                        <?php }?>
                      </select>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Photo</label>
                <div class="col-sm-8">
                    <input type="file" class="" id="" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-8">
                    <input type="submit" class="btn btn-default" value="UPDATE">
                </div>
              </div>
            </form>
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