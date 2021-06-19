<?php session_start();
require_once('functions/function.php');
needLogged();
if($_SESSION['role']<=1){ 
get_header();
get_sidebar();
get_bread();
if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['user'];
    $password = md5($_POST['pass']);
    $role = $_POST['role'];
    $image=$_FILES['pic'];
    $ImageName='user-'.time().'-'. md5(rand(10000, 100000)).'.'. pathinfo($image['name'],PATHINFO_EXTENSION);
    $insert = "INSERT INTO cit_user(id,name,email,phone,username,password,role_id,photo)
		VALUES('','$name','$email','$phone','$username','$password','$role','$ImageName')";
    if (mysqli_query($con, $insert)) {
        if($ImageName!=''){
            move_uploaded_file($image['tmp_name'], 'uploads/'.$ImageName);
            echo "User created successfully";
        }
    } else {
        echo "User created failed!!!";
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
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Name<span class="req_span">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email<span class="req_span">*</span></label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="email" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Phone</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="phone" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Username<span class="req_span">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="user" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Password<span class="req_span">*</span></label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="pass" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Re-Password<span class="req_span">*</span></label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">User-Role</label>
                        <div class="col-sm-5">
                            <select name="role" class="form-control">
                                <option value="">Select User Role</option>
                                <?php
                                $sel = "SELECT * FROM cit_role";
                                $qry = mysqli_query($con, $sel);
                                while ($per = mysqli_fetch_array($qry)) {
                                    ?>
                                    <option value="<?= $per['role_id']; ?>"><?= $per['role_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Photo</label>
                        <div class="col-sm-8">
                            <input type="file" class="" id="" name="pic" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-8">
                            <input type="submit" class="btn btn-default" value="REGISTRATION">
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
}else{
	echo "Access Denied!!!";	
}
?>