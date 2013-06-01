<?php
/*
Template Name: Articles
*/
get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$recentPosts = new WP_Query();
$recentPosts->query('showposts=6&paged=' . $paged);

?>

	<section id="subhead" class="subhead subhead-listarticles">
		<div class="hgroup">
			<h1 class="site-title">Les articles</h1>
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
						<a href="<?php the_permalink(); ?>" class="thumbnail">
							<?php the_post_thumbnail('article'); ?>
							<h3><?php the_title(); ?></h3>
			 				<?php the_excerpt(); ?>
			 				<div class="more">Lire l'article</div>
						</a>
					</li>
					<?php endwhile; ?>
				</ul>
				<?php
					echo pagination($recentPosts);
				?>
			</div>
		</div>
	</section>

<?php endif; ?>

<?php get_footer(); ?>