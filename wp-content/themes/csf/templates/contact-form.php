<?php
/*
Template Name: Contact Form
*/
?>


<?php get_header(); ?>

	<section id="subhead" class="subhead subhead-contact">
		<div class="hgroup">
			<h1 class="site-title">Contact</h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
	</section>

	<section class="contact container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="contact-content">
					<h3>Une question ?</h3>
					<?php if(have_posts()): the_post(); ?>
					<?php the_content(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>