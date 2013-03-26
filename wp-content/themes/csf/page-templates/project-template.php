<?php get_header() ?>


<?php 

	$project = new WP_query(array(
		'post_type' => 'project',
		'posts_per_page' => '10',
	));

?>

	<?php if($project->have_posts()): while($project->have_posts()): $project->the_post(); ?>

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

	<?php endwhile; endif; wp_reset_query(); ?>

<?php get_footer() ?>