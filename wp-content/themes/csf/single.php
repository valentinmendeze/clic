<?php

$recentPosts = new WP_Query();
$recentPosts->query('showposts=5');

get_header(); ?>

<?php if(have_posts()): the_post(); ?>

<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'subhead'); ?>

	<style type="text/css">
		body .site .subhead-listarticles {
			background: url('<?php echo $large_image_url[0]; ?>') no-repeat;
			background-size: 980px;
		}
	</style>

	<section id="subhead" class="subhead subhead-listarticles">
		<div class="hgroup">
			<h1 class="site-title"><?php the_title(); ?></h1>
		</div>
	</section>

	<section class="current-article container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<article class="span8 offset2">
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
					<p class="info">Le <?php echo get_the_date(); ?>, par <?php the_author(); ?></p>

					<section class="others-articles">
						<h3>Les autres articles</h3>
						<ul>
							<?php if($recentPosts->have_posts()): while($recentPosts->have_posts()): $recentPosts->the_post(); ?>
							<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; endif; ?>
						</ul>
						<a href="<?php bloginfo('url') ?>/articles" class="back">Revenir à la liste d'articles</a>
					</section>
				</article>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php get_footer(); ?>