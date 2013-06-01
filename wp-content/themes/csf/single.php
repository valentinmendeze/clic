<?php

$recentPosts = new WP_Query();
$recentPosts->query('showposts=10');

get_header(); ?>

	<section id="subhead" class="subhead subhead-listarticles">
		<div class="hgroup">
			<h1 class="site-title">Les ateliers</h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
	</section>

	<section class="current-article container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<article class="span8">
					<?php if(have_posts()): the_post(); ?>
					<?php the_post_thumbnail(); ?>
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
					<p class="info">Le <?php echo get_the_date(); ?>, par <?php the_author(); ?></p>
					<?php endif; ?>
				</article>
				<aside class="span4">
					<h3>Les autres articles</h3>
					<ul>
						<?php if($recentPosts->have_posts()): while($recentPosts->have_posts()): $recentPosts->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
						<?php endwhile; endif; ?>
					</ul>
					<a href="<?php bloginfo('url') ?>/articles" class="back">Revenir à la liste d'articles</a>
				</aside>
			</div>
		</div>
	</section>

<?php get_footer(); ?>