<?php session_start();
	require_once('functions/function.php');
	needLogged();
	get_header();
	get_sidebar();
	get_bread();
	get_footer();
?>