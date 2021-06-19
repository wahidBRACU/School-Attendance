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
<section>    
<div class="container">
    <div class="col-sm-3">
        <div class="widget-education">
            <ul>
            <?php    
            $sele='SELECT * FROM cit_link ORDER BY link_id DESC';
            $qry=mysqli_query($con,$sele);
            $datum=mysqli_fetch_array($qry);
            while ($datum = mysqli_fetch_array($qry)) {
            ?>
                <li><a href="#"><?= $datum['link_title']; ?></a></li>
            <?php } ?>    
            </ul>
        </div>
    </div>