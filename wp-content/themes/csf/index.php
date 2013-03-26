<?php get_header() ?>


<?php 

	$project = new WP_query(array(
		'post_type' => 'project',
		'posts_per_page' => '1'
	));

?>

	<div class="sub-head">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
		<div class="caption">
			<h2>Qui sommes nous ?</h2>
			<p>Créé fin 2011, nous avons besoin de vous !<br>
				Nous situons notre action sur le long terme, aidez-nous !<br>
				Plusieurs moyens sont possibles: Appui matériel, appui financier, appui technique, parler de nous.</p>
			<div class="more">
				<span><a href="<?php bloginfo('url') ?>">En savoir plus</a></span>
			</div>
		</div>
	</div>

	<?php if($project->have_posts()): $project->the_post(); ?>

	<div class="last-project container-fluid">
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
	</div>

	<?php else: ?>

	<?php endif; wp_reset_query(); ?>

<?php get_footer() ?>