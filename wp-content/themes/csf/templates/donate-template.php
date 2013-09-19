<?php
/*
Template Name: Dons
*/
?>

<?php get_header() ?>

<?php 

	$project = new WP_query(array(
		'post_type' => 'project',
		'posts_per_page' => '1',
		'statut' => 'projets-phares'
	));

?>

	<section id="subhead" class="subhead subhead-donate">
		<div class="hgroup">
			<h1 class="site-title">Les dons</h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
	</section>

	<section class="donate container-fluid">
		<?php if(have_posts()): the_post(); ?>
		<div class="row-fluid">
			<div class="span12">
				<div class="span6">
					<div class="help">
						<h2>Aidez-nous</h2>
						<p><?php the_content(); ?></p>
					</div>
				</div>				

				<div class="span6">
					<h2 class="donate-title">Don matériel</h2>
					<?php echo do_shortcode('[contact-form-7 id="175" title="Dons"]'); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</section>

	<?php if($project->have_posts()): $project->the_post(); ?>

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
						<?php if(get_field('donate-link')): ?><a href="<?php the_field('donate-link'); ?>" title="Faire un don"><div class="buttons donate">Faire un don</div></a><?php endif; ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><div class="discover">Découvrir le projet</div></a>
						<div class="clear"></div>
					</div>
				</article>
			</div>
		</div>
	</section>

	<?php endif; wp_reset_query(); ?>

<?php get_footer() ?>