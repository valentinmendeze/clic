<?php
/*
Template Name: Accueil
*/
?>

<?php get_header() ?>

<?php 

	$project = new WP_query(array(
		'post_type' => 'project',
		'posts_per_page' => '1',
		'statut' => 'projets-phares'
	));

	$ateliers = new WP_query(array(
		'post_type' => 'atelier',
		'posts_per_page' => 4,
		'tax_query' => array(
			array(
				'taxonomy' => 'statut',
				'field' => 'slug',
				'terms' => 'atelier-termine',
				'operator' => 'NOT IN',
			)
		)
	));

	$recentPosts = new WP_Query();
    $recentPosts->query('showposts=2');

?>

	<section id="subhead" class="subhead subhead-project">
		<div class="hgroup">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
		<div class="caption">
			<h2>Qui sommes nous ?</h2>
			<?php if(have_posts()): the_post(); ?>
			<?php the_content(); ?>
			<?php endif; ?>
			<div class="more">
				<span><a href="<?php echo get_permalink(97); ?>">En savoir plus</a></span>
			</div>
		</div>
	</section>

	<section class="container-fluid info">
		<div class="row-fluid">
			<div class="span12">
				<ul class="thumbnails">
					<li class="span4">
				    	<div class="thumbnail">
				    		<img src="<?php bloginfo('template_url'); ?>/images/icons/icon-1.png" data-src="holder.js/300x200" alt="">
				    		<p><?php the_field('texte_bloc_1'); ?></p>
				    	</div>
					</li>
					<li class="span4">
				    	<div class="thumbnail">
				    		<img src="<?php bloginfo('template_url'); ?>/images/icons/icon-2.png" data-src="holder.js/300x200" alt="">
				    		<p><?php the_field('texte_bloc_2'); ?></p>
				    	</div>
					</li>
					<li class="span4">
				    	<div class="thumbnail">
				    		<img src="<?php bloginfo('template_url'); ?>/images/icons/icon-3.png" data-src="holder.js/300x200" alt="">
				    		<p><?php the_field('texte_bloc_3'); ?></p>
				    	</div>
					</li>
				</ul>
			</div>
		</div>
	</section>

	<?php if($project->have_posts()): $project->the_post(); ?>

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
						<?php if(get_field('donate-link')): ?><a href="<?php the_field('donate-link'); ?>" title="Faire un don"><div class="buttons donate">Faire un don</div></a><?php endif; ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><div class="discover">Découvrir le projet</div></a>
						<div class="clear"></div>
					</div>
				</article>
			</div>
		</div>
	</section>

	<?php endif; ?>

	<section class="articles container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<h2>Les derniers articles</h2>
				<ul class="thumbnails">
					<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
					<li class="span5">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<div class="thumbnail">
								<?php the_post_thumbnail('cover'); ?>
								<h3><?php the_title(); ?></h3>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="more" title="<?php the_title(); ?>">Lire la suite...</a>
							</div>
						</a>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</section>

	<?php wp_reset_query(); ?>

<?php get_footer() ?>