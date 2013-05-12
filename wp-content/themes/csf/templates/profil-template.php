<?php
/*
Template Name: Profil
*/

$user = wp_get_current_user();

if($user->ID == 0) {
	wp_redirect( 'login');
	exit();
}

get_header(); ?>

<?php get_footer(); ?>