<?php
require_once('../config.php');
function get_header() {
    require_once('includes/header.php');
}

function get_sidebar() {
    require_once('includes/sidebar.php');
}

function get_part($addpart) {
    include_once('includes/' . $addpart);
}

function get_bread() {
    include_once('includes/bread.php');
}

function get_footer() {
    require_once('includes/footer.php');
}

function isLogged(){
    return !empty($_SESSION['user'])? true:false;
}

function needLogged(){
    $isLogged=isLogged();
    if(!$isLogged){
        header('Location:login.php');
        exit();
    }
}

?>