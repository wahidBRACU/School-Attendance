<?php
    $link= explode('/',$_SERVER['PHP_SELF']);
    $page=$link[2];
?>
<section>
         <div class="container">
             <div class="col-sm-12">
                 <div class="indicator">
                 <ul>
                     <li><a href="#">Home</a></li>
                     <li><a href="#">/</a></li>
                     <li><a href="#">
                    <?php
                        if($page=='about.php'){echo "About Us";}
                        elseif($page=='contact.php'){echo "Contact Us";}
                        elseif($page=='academic.php'){echo "Academic";}
                        else{
                            echo "Page Nai";
                        }
                    ?>
                    </a></li>
                 </ul>
             </div>
             </div>
         </div>
     </section>