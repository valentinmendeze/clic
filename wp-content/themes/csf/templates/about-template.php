<?php 
/*
Template Name: A propos
*/
?>

<?php 

	$team = new WP_query(array(
		'post_type' => 'team',
		'posts_per_page' => 3,
	));

?>

<?php get_header(); ?>

	<section id="subhead" class="subhead subhead-about">
		<hgroup>
			<h1 class="site-title">à propos de nous</h1>
		</hgroup>
	</section>

	<section class="presentation container-fluid">
		<h2>Présentation de l'association</h2>
		<?php if(have_posts()): the_post(); ?>
		<div class="row-fluid">
			<div class="span12">
				<div class="span3"><!-- Icone--></div>
				<div class="span9">
					<p><?php the_content(); ?></p>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</section>

	<section class="members container-fluid">
		<h2>Présentation des membres</h2>
		
		<div class="row-fluid">
			<div class="span12">
			<?php if($team->have_posts()): while($team->have_posts()): $team->the_post(); ?>
				<div class="span4">
					<div class="portrait">
						<p><?php the_content(); ?></p>
					</div>
					<div class="triangle"></div>
					<div class="identity">
						<div class="profil">
							<span class="name"><?php the_title(); ?></span>
							<br>
							<span class="job"><?php the_field('profession'); ?></span>
						</div>
						<?php the_post_thumbnail('avatar'); ?>
						<div class="clear"></div>
					</div>
				</div>
			<?php endwhile; endif; ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>