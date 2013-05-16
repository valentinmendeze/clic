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
					<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
					 Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla
					  ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq 
					  siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. 
					  Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, 
					  et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
					  
					<?php if(have_posts()): the_post(); ?>
					<?php the_content(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>