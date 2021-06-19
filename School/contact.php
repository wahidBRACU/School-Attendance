<?php
require_once('functions/function.php');
get_header();
?>     
<section class="about-banner">
    <div class="about-opacity">
        <div class="container">
            <h2>Contact Us</h2>
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
        <h1>Contact Us</h1>
        <p>For any questions or comments please write to us directly:  </p>
    </article>

    <div class="contact-us">
        <?php
        if (!empty($_POST)) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $sub = $_POST['subject'];
            $mess = $_POST['message'];
            if (!empty($name)) {
                if (!empty($email)) {
                    $insert = "INSERT INTO cit_contactus(conus_name,conus_email,conus_phone,conus_sub,conus_mess)"
                            . "VALUES('$name','$email','$phone','$sub','$mess')";
                    if (mysqli_query($con, $insert)) {
                        echo "Thanks! Your Message Send Succesffully.";
                    } else {
                        echo "Message Send Failed!!!";
                    }
                } else {
                    echo "Please enter your email!";
                }
            } else {
                echo "Please enter your name!";
            }
        }
        ?>
        <form action="" method="post">
            <div class="col-sm-6 pl0">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name">                       
                </div><!--form group-->

                <div class="form-group">
                    <input type="email" name="email" placeholder="Email">                       
                </div><!--form group-->

                <div class="form-group">
                    <input type="text" name="phone" placeholder="Phone">                       
                </div><!--form group-->

                <div class="form-group">
                    <input type="text" name="subject" placeholder="Subject">                       
                </div><!--form group-->

            </div>
            <div class="col-sm-6 pr0">
                <textarea name="message" id=""  rows="7" placeholder="Type Message"></textarea>
                <input type="submit" value="SUBMIT">  
            </div>
        </form>
    </div>

</div>            
</div>
</section>
<?php
get_footer();
?>