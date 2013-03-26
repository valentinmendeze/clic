<?php get_header(); ?>

	<div class="current-project container-fluid">
		<div class="row-fluid">
			<div class="span12">
			<?php if(have_posts()): the_post(); ?>

				<aside class="span4">
					<?php the_post_thumbnail('large'); ?>
				</aside>
				<article class="span8">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<blockquote class="pull-right">
						<small>Rédigé par <?php the_author() ?>, le <?php the_date(); ?></small>
					</blockquote>
					<?php echo get_the_term_list(get_the_ID(), 'statut', 'Projet : ', ',', ''); ?>
				</article>
					<?php comments_template( '', true ); ?>
			<?php endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>