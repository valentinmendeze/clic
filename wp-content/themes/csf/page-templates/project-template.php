<?php get_header() ?>

<?php 

	$projet = new WP_query(array(
		'post_type' => 'project',
		'posts_per_page' => 1
	));

	$projet_phare = new WP_query(array(
		'post_type' => 'project',
		'statut' => 'projets-phares'
	));

	$projet_fini = new WP_query(array(
		'post_type' => 'project',
		'statut' => 'projet-termines',
		'posts_per_page' => 1
	));

?>

	<section id="subhead" class="subhead subhead-projectarchive">
		<hgroup>
			<h1 class="site-title">Les projets</h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
	</section>


	<section class="project-list container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="projectlist-caption span4">
					<h2>Les projets en cours</h2>
				</div>
				<div class="span8 thumb-block">
				<?php if($projet->have_posts()): while($projet->have_posts()): $projet->the_post(); ?>
					<div class="projectlist-thumb">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
						<div>
							<h3><?php the_title(); ?></h3>
						</div>
					</div>
				<?php endwhile; endif; ?>
				<div class="clear"></div>
				</div>
			</div>
		</div>
	</section>

	<?php if($projet_phare->have_posts()): $projet_phare->the_post(); ?>

	<section class="last-project container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<article class="span4">
					<h2><?php the_title(); ?></h2>
					<p><?php the_excerpt(); ?></p>
					<div class="commands">
						<a href="#"><div class="buttons donate">Faire un don</div></a>
						<a href="<?php the_permalink(); ?>"><div class="buttons discover">Découvrir le projet</div></a>
						<div class="clear"></div>
					</div>
				</article>
				<div class="thumb span8">
				<?php if(has_post_thumbnail()): ?>
					<?php the_post_thumbnail('large'); ?>
				<?php else: ?>
					<img src="<?php bloginfo('template_url'); ?>/images/example.png" title="<?php the_title(); ?>">
				<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>

	<section class="project-finish container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="span8 thumb-block">
				<?php if($projet_fini->have_posts()): while($projet_fini->have_posts()): $projet_fini->the_post(); ?>
					<div class="projectfinish-thumb">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
						<div>
							<h3><?php the_title(); ?></h3>
						</div>
					</div>
				<?php endwhile; endif; ?>
					<div class="clear"></div>
				</div>
				<div class="projectfinish-caption span4">
					<h2>Les projets terminés</h2>
				</div>
			</div>
		</div>
	</section>

	<?php wp_reset_query(); ?>

<?php get_footer() ?>