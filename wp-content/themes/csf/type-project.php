<?php get_header(); ?>

<div class="archive-project container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<ul class="thumbnails">
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<li class="span4">
					<div class="thumbnail">
						<?php
							the_post_thumbnail(null, null, array(
								'data-src='	=> 'holder.js/300x200',
							));
						?>
						<h3><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="btn btn-primary">En savoir plus</a>
					</div>
				</li>

				<?php endwhile; endif; ?>
			</ul>

		</div>
	</div>
</div>


<?php get_footer(); ?>