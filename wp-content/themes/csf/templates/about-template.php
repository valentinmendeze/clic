<?php 
/*
Template Name: A propos
*/
?>

<?php 

	$team = new WP_query(array(
		'post_type' => 'team',
	));

?>

<?php get_header(); ?>

	<section id="subhead" class="subhead subhead-about">
		<div class="hgroup">
			<h1 class="site-title">à propos de nous</h1>
		</div>
	</section>

	<section class="presentation container-fluid">
		<h2>Présentation de l'association</h2>
		<?php if(have_posts()): the_post(); ?>
		<div class="row-fluid">
			<div class="span12">
				<div class="span3"><!-- Icone--></div>
				<div class="span9">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</section>

	<section class="members container-fluid">
		<h2>Présentation des membres</h2>
		
		<div class="row-fluid">
			<div class="span12">
				<ul class="thumbnails">
					<?php if($team->have_posts()): while($team->have_posts()): $team->the_post(); ?>
					<li class="span4">
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
					</li>
					<?php endwhile; endif; ?>
				</ul>
			</div>
		</div>
	</section>

<?php get_footer(); ?>