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
        <div class="col-sm-12 text-center">
            <div class="footer-control">
                <div class="img-responsive pre"><img src="img/arrow-right.png" alt=""></div>
                <div class="title-school"> photos </div>
                <div class="img-responsive next"> <img src="img/arrow-left.png" alt=""></div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>  
        <div class="footer-slick">
            <?php
            $id=4;
            $sele="SELECT * FROM cit_news WHERE ncate_id='$id'";
            $qry=mysqli_query($con,$sele);
            $dat=mysqli_fetch_array($qry);
            while ($dat = mysqli_fetch_array($qry)) {
            ?>
            <div class="col-sm-4"><!--col-sm-4 start-->
                <div class="footer-item">
                    <div class="port-1 effect-2">
                        <div class="image-box">
                            <img src="admin/uploads/<?= $dat['news_image'];?>" alt="Image-2">
                        </div>
                        <div class="text-desc">
                            <h3><?= $dat['news_title']; ?></h3>
                            <p><?= $dat['news_details']; ?></p>
                            <a href="#" class="btn">Learn more</a>
                        </div>
                    </div>
                </div>
            </div><!--col-sm-4 end-->
            <?php } ?>    
        </div><!--footer-slick-->
    </div>
</section> 