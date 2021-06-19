<?php
    require_once('functions/function.php');
    get_header();
?>    

    <section class="about-banner">
        <div class="about-opacity">
           <div class="container">
               <h2>scholastica school</h2>
               <p>Providing excellent education since 1977</p>
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
						$sel = 'SELECT * FROM cit_pagecontent WHERE pcate_id="5"';
						$qry = mysqli_query($con, $sel);
						$data = mysqli_fetch_array($qry);
            		?>
                      <h1><?= $data['pcont_title'];?></h1>
                      <?= $data['pcont_details'];?>
                    </article>
                </div>
                
            </div>
      </section>
<?php
    get_footer();
?>
