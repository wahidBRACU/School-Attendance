<?php
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$db='citschool';
	$con=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	if(!$con){
		echo "Database Connection Error!!!";
	}       
	
?>