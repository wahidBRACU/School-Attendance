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
<footer>
            <div class="container">
                <div class="col-sm-3">
                    <div class="footer-details">
                        <?php
                        $sel = 'SELECT * FROM cit_footer WHERE foot_pos_id="1"';
                        $qry = mysqli_query($con, $sel);
                        $data = mysqli_fetch_array($qry);
                        ?>
                        <h2><?= $data["foot_title"];?></h2>
                        <?= $data["foot_details"];?>
                    </div>
                </div><!--col-sm-3 end-->
                                    

                <div class="col-sm-3">
                    <div class="footer-details">
                        <?php
                        $sel = 'SELECT * FROM cit_footer WHERE foot_pos_id="2"';
                        $qry = mysqli_query($con, $sel);
                        $datum = mysqli_fetch_array($qry);
                        ?>
                        <h2><?= $datum["foot_title"];?></h2>
                        <?= $datum["foot_details"];?>
                    </div>
                </div><!--col-sm-3 end-->


                <div class="col-sm-3">
                    <div class="footer-details">
                        <?php
                        $sel = 'SELECT * FROM cit_footer WHERE foot_pos_id="3"';
                        $qry = mysqli_query($con, $sel);
                        $datu = mysqli_fetch_array($qry);
                        ?>
                        <h2><?= $datu["foot_title"];?></h2>
                        <?= $datu["foot_details"];?>
                    </div>
                </div><!--col-sm-3 end-->


                <div class="col-sm-3">
                    <div class="footer-details">
                         <?php
                        $sel = 'SELECT * FROM cit_footer WHERE foot_pos_id="4"';
                        $qry = mysqli_query($con, $sel);
                        $dat = mysqli_fetch_array($qry);
                        ?>
                        <h2><?= $dat["foot_title"];?></h2>
                        <ul>
                            <?= $dat["foot_details"];?><?= $dat["foot_imageC"];?>
                        </ul>
                         <?php
                        $sel = 'SELECT * FROM cit_footer WHERE foot_pos_id="5"';
                        $qry = mysqli_query($con, $sel);
                        $dataa = mysqli_fetch_array($qry);
                        ?>
                        <h2><?= $dataa["foot_title"];?></h2>
                        <?= $dataa["foot_details"];?>
                    </div>
                </div><!--col-sm-3 end-->
            </div>  
            <div class="back_to_top"><img src="img/target.png" alt="target"></div>
        </footer>

        <!--Social Nav-->
        <ul class="social-nav model-0">
            <li><a href="#" class="twitter"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="facebook"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
        </ul>   

        <!--Social Nav-->
        <!-- Add your site or application content here -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.enllax.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
