<?php
	require_once('functions/function.php');
	$id=$_GET['d'];
	$del="DELETE FROM cit_link WHERE link_id='$id'";
	$qry=mysqli_query($con,$del);
	header('Location: all-links.php');
?>