<?php
    require_once('functions/function.php');
    get_header();
?> 
    <section class="about-banner">
        <div class="about-opacity">
           <div class="container">
               <h2>Admission</h2>
               <p>Our Admission System is very good.</p>
           </div> 
        </div>
    </section>
<?php
get_bread();
get_sidebar();
?> 
                <div class="col-sm-9">
                    <article>
                        <?php
						$sel = 'SELECT * FROM cit_pagecontent WHERE pcont_id="4"';
						$qry = mysqli_query($con, $sel);
						$data = mysqli_fetch_array($qry);
            		?>
                      <h1><?= $data['pcont_title'];?></h1>
                      <p><img src="admin/uploads/<?= $data['pcont_image'];?>" class="img-responsive" alt="about image">
                       
                        <?= $data['pcont_details'];?>
                    </article>
                </div>
                
            </div>
      </section>
<?php
    get_photo();
    get_footer();
?>