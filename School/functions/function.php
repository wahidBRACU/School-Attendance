<?php
    require_once('config.php');
    function get_header(){
        require_once('includes/header.php');
    }
    
    function get_banner(){
        include_once('includes/banner.php');
    }
    
    function get_bread(){
        include_once('includes/bread.php');
    }
    
    function get_sidebar(){
        include_once('includes/sidebar.php');
    }
    
    function get_part($addpart){
        include_once('includes/'.$addpart);
    }
    
    function get_photo(){
        include_once('photo.php');
    }
    
    function get_footer(){
       require_once('footer.php');  
    }
    
?>