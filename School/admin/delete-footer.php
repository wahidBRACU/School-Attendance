<?php
	require_once('functions/function.php');
	$id=$_GET['d'];
	$del="DELETE FROM cit_footer WHERE id='$id'";
	$qry=mysqli_query($con,$del);
	header('Location: all-user.php');
?>