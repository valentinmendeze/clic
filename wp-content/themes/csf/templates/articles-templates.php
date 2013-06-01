<?php
/*
Template Name: Articles
*/
get_header();

$recentPosts = new WP_Query();
$recentPosts->query('showposts=6');

?>

	<section id="subhead" class="subhead subhead-listarticles">
		<div class="hgroup">
			<h1 class="site-title">Les ateliers</h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
	</section>

<?php if($recentPosts->have_posts()): ?>

	<section class="list-articles container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<ul class="thumbnails">
					<?php while($recentPosts->have_posts()): $recentPosts->the_post(); ?>
					<li class="span4">
						<a href="#" class="thumbnail">
							<img data-src="holder.js/300x200" alt="">
							<h3>Thumbnail label</h3>
			 				<p>Thumbnail caption...</p>
						</a>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</section>

<?php endif; ?>

<?php get_footer(); ?>