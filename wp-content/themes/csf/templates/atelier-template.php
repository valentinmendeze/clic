<?php
/*
Template Name: Ateliers
*/
?>

<?php 
	$ateliers = new WP_query(array(
		'post_type' => 'atelier',
		'post_per_page' => 10,
	));
?>

<?php get_header(); ?>

<?php if($ateliers->have_posts()): while($ateliers->have_posts()): $ateliers->the_post(); ?>

<?php the_title(); ?>
<?php the_excerpt(); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>