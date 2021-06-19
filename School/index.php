<?php
    require_once('functions/function.php');
    get_header();
?>
<section class="slider-main">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php
                $sel = 'SELECT * FROM cit_banner ORDER BY ban_id DESC LIMIT 0,3';
                $qry = mysqli_query($con, $sel);
                while ($data = mysqli_fetch_array($qry)) {
            ?>
            <div class="item <?php if($data['ban_active']==1){echo 'active';} ?>">
                <img data-animation="animated pulse" src="admin/uploads/<?= $data['ban_image']; ?>" alt="...">
                <div class="carousel-caption text-center">
                    <h3 data-animation="animated bounceInLeft"><?= $data['ban_title']; ?></h3>
                    <p data-animation="animated bounceInRight"><?= $data['ban_subtitle']; ?></p>
                    <a data-animation="animated flipInX" href="<?= $data['ban_url']; ?>"><?= $data['ban_text']; ?></a>
                </div>
            </div>
                <?php } ?>
        </div>

        <!-- Controls -->
        <a class="left left-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <img src="img/left-slider.png" class="img-responsive" alt="">
        </a>
        <a class="right right-control" href="#carousel-example-generic" role="button" data-slide="next">
            <img src="img/right-slider.png" class="img-responsive" alt="">
        </a>
    </div>
</section>
<section class="welcome">
    <div class="container">
        <div class="col-sm-12 text-center">
            <div class="welcome-item">
            	<?php
					$sel = 'SELECT * FROM cit_pagecontent WHERE pcate_id="1"';
					$qry = mysqli_query($con, $sel);
					$data = mysqli_fetch_array($qry);
            	?>
                <h5><?= $data['pcont_title'];?></h5>
                <h4 class="title-school"><?= $data['pcont_subtitle'];?></h4>
                <?= $data['pcont_details'];?>
                <a class="btn-create" href="#">read more</a>
            </div>
        </div>
    </div>
</section>                              



<section>
    <div class="container">
        <div class="col-sm-12 text-center">
            <div class="controler">
                <div class="img-responsive pre"><img src="img/arrow-right.png" alt=""></div>
                <div class="title-school"> latest news </div>
                <div class="img-responsive next"> <img src="img/arrow-left.png" alt="abc"></div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="succes-slider">
        <?php
            $id=1;
            $sele="SELECT * FROM cit_news WHERE ncate_id='$id'";
            $qry=mysqli_query($con,$sele);
            $dat=mysqli_fetch_array($qry);
            while ($dat = mysqli_fetch_array($qry)) {
            ?>
        
            <div class="col-sm-4">
                <div class="success-item">
                    <div class="image-box">
                        <img class="img-responsive" src="admin/uploads/<?= $dat['news_image'];?>" alt="Image-1">
                        <h2><?= $dat['news_title']; ?></h2>
                    </div>
                    <div class="text-desc">
                        <h3><?= $dat['news_title']; ?></h3>
                        <p><?= $dat['news_details']; ?></p>
                        <a href="#" class="btn">Learn more</a>
                    </div>
                </div>
            </div><!--col-sm-4-main end-->
            <?php }?>
        </div><!--success-slider-->
    </div> <!--container end-->
</section>




<section class="section-default">
    <div class="container">
        <div class="col-sm-6">
            <div class="news-event">
                <h2>Announcements 2015-2016</h2> 

                <div class="news-slick">
                 <?php
            $id=2;
            $sele="SELECT * FROM cit_news WHERE ncate_id='$id'";
            $qry=mysqli_query($con,$sele);
            $datum=mysqli_fetch_array($qry);
            while ($datum = mysqli_fetch_array($qry)) {
            ?>
                    <div class="news-item">
                        <a href="#">
                            <div class="news-clock">
                                <h4><?= substr($datum['news_time'], 5, 3); ?></h4>
                                <h3><?= substr($datum['news_time'], 8, 4); ?></h3>
                            </div>
                            <div class="news-details">
                                <p><?= substr($datum['news_details'], 0, 25); ?></p>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </div><!--news-item end-->
            <?php } ?>        
                </div>


                <a href="#" class="news-info"><span>read more</span><i class="fa fa-angle-right"></i></a>
            </div> <!--news-event end-->


        </div><!--col-sm-6 end-->




        <div class="col-sm-6">
            <div class="news-event">
                <h2>Upcoming Events</h2> 
                <div class="news-right">
                <?php
            $id=3;
            $sele="SELECT * FROM cit_news WHERE ncate_id='$id'";
            $qry=mysqli_query($con,$sele);
            $dataa=mysqli_fetch_array($qry);
            while ($dataa = mysqli_fetch_array($qry)) {
            ?>    
                    <div class="right-item">
                        <a href="#">
                            <div class="news-clock">
                                <img class="img-responsive" src="admin/uploads/<?= $dataa['news_image'];?>" alt="">
                            </div>
                            <div class="news-details">
                                <h5><?= substr($dataa['news_time'], 0, 16); ?></h5>
                                <p><?= substr($dataa['news_details'], 0, 25); ?></p>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </div><!--news-item end-->
            <?php } ?>            
                </div><!--news-right end-->

                <a href="#" class="news-info"><span>read more</span><i class="fa fa-angle-right"></i></a>
            </div> <!--news-event end-->


        </div><!--col-sm-6 end-->

    </div>
</section> 

<?php
    get_photo();
    get_footer();
?>

