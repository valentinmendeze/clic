<?php
/*
Template Name: Ateliers
*/
?>

<?php get_header(); ?>

<?php 

	$atelier = new WP_query(array(
		'post_type' => 'atelier',
		'posts_per_page' => 10,
		'tax_query' => array(
			array(
				'taxonomy' => 'statut',
				'field' => 'slug',
				'terms' => 'atelier-termine',
				'operator' => 'NOT IN',
			)
		)
	));

	$atelier_phare = new WP_query(array(
		'post_type' => 'atelier',
		'statut' => 'atelier-phare'
	));

	$atelier_fini = new WP_query(array(
		'post_type' => 'atelier',
		'statut' => 'atelier-termine',
		'posts_per_page' => 10
	));

?>

	<section id="subhead" class="subhead subhead-atelierarchive">
		<hgroup>
			<h1 class="site-title">Les ateliers</h1>
		</hgroup>
	</section>


	<section class="project-list container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="projectlist-caption span4">
					<h2>Les ateliers en cours</h2>
				</div>
				<ul id="carouselTop" class="elastislide-list span8">
				<?php if($atelier->have_posts()): while($atelier->have_posts()): $atelier->the_post(); ?>
					<li>
						<div class="projectlist-thumb">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
							<div>
								<h3><?php the_title(); ?></h3>
							</div>
						</div>
					</li>
				<?php endwhile; endif; ?>
				</ul>
			</div>
		</div>
	</section>

	<?php if($atelier_phare->have_posts()): $atelier_phare->the_post(); ?>

	<section class="last-project container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="thumb span8">
				<?php if(has_post_thumbnail()): ?>
					<?php the_post_thumbnail('cover'); ?>
				<?php else: ?>
					<img src="<?php bloginfo('template_url'); ?>/images/example.png" title="<?php the_title(); ?>">
				<?php endif; ?>
					<div class="clear"></div>
				</div>
				<article class="span4">
					<h2><?php the_title(); ?></h2>
					<?php if (get_field('quick_description')): ?>
					<p><?php the_field('quick_description'); ?></p>
					<?php else: ?>
					<p><?php the_excerpt(); ?></p>
					<?php endif; ?>
					<div class="commands">
						<a href="<?php the_field('donate-link'); ?>" title="Faire un don"><div class="buttons donate">Faire un don</div></a>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_url') ?>/images/more.png" class="more" alt="En savoir plus"><div class="discover">Découvrir le projet</div></a>
						<div class="clear"></div>
					</div>
				</article>
			</div>
		</div>
	</section>

	<?php endif; ?>

	<section class="project-finish container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="projectfinish-caption span4">
					<h2>Les ateliers terminés</h2>
				</div>
				<ul id="carouselBottom" class="elastislide-list span8">
				<?php if($atelier_fini->have_posts()): while($atelier_fini->have_posts()): $atelier_fini->the_post(); ?>
					<li>
						<div class="projectlist-thumb">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
							<div>
								<h3><?php the_title(); ?></h3>
							</div>
						</div>
					</li>
				<?php endwhile; endif; ?>
				</ul>
			</div>
		</div>
	</section>

	<?php wp_reset_query(); ?>

<?php get_footer(); ?>