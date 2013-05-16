<?php
/*
Template Name: Page Projets
*/
?>

<?php get_header(); ?>

<?php 

	$projet = new WP_query(array(
		'post_type' => 'project',
		'posts_per_page' => 10,
		'tax_query' => array(
			array(
				'taxonomy' => 'statut',
				'field' => 'slug',
				'terms' => 'projet-termines',
				'operator' => 'NOT IN',
			)
		)
	));

	$projet_phare = new WP_query(array(
		'post_type' => 'project',
		'statut' => 'projets-phares'
	));

	$projet_fini = new WP_query(array(
		'post_type' => 'project',
		'statut' => 'projet-termines',
		'posts_per_page' => 10
	));

?>

	<section id="subhead" class="subhead subhead-projectarchive">
		<div class="hgroup">
			<h1 class="site-title">Les projets</h1>
		</div>
	</section>


	<section class="project-list container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="projectlist-caption span4">
					<h2>Les projets en cours</h2>
				</div>
				<ul id="carouselTop" class="elastislide-list span8">
				<?php if($projet->have_posts()): while($projet->have_posts()): $projet->the_post(); ?>
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

	<?php if($projet_phare->have_posts()): $projet_phare->the_post(); ?>

	<section class="last-project container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="thumb span8">
				<?php if(has_post_thumbnail()): ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('cover'); ?></a>
				<?php else: ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/example.png" title="<?php the_title(); ?>"></a>
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

	<?php if($projet_fini->have_posts()): ?>

	<section class="project-finish container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="projectfinish-caption span4">
					<h2>Les projets terminés</h2>
				</div>
				<ul id="carouselBottom" class="elastislide-list span8">
				<?php while($projet_fini->have_posts()): $projet_fini->the_post(); ?>
					<li>
						<div class="projectlist-thumb">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
							<div>
								<h3><?php the_title(); ?></h3>
							</div>
						</div>
					</li>
				<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</section>

	<?php endif; ?>

	<?php wp_reset_query(); ?>

<?php get_footer(); ?>