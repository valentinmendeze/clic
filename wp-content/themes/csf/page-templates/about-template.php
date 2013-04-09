<?php 
/*
Template Name: A propos
*/
?>

<?php 

	$presentation = new WP_query(array(
		'post_type' => 'presentation',
		'posts_per_page' => 2,
	));

	$team = new WP_query(array(
		'post_type' => 'team',
		'posts_per_page' => 3,
	));

?>

<?php get_header(); ?>

	<section id="subhead" class="subhead subhead-about">
		<hgroup>
			<h1 class="site-title">à propos de nous</h1>
		</hgroup>
	</section>

	<section class="presentation container-fluid">
		<h2>Présentation de l'association</h2>
		<?php if($presentation->have_posts()): while($presentation->have_posts()): $presentation->the_post(); ?>
		<div class="row-fluid">
			<div class="span12">
				<div class="span3">

				</div>

				<div class="span9">
					<p><?php the_content(); ?></p>
				</div>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</section>

	<section class="members container-fluid">
		<h2>Présentation des membres</h2>
		<!--Bouble while-->
		<div class="row-fluid">
			<div class="span12">
			<?php if($team->have_posts()): while($team->have_posts()): $team->the_post(); ?>
				<div class="span4">
					<div class="portrait">
						<p><?php the_content(); ?></p>
					</div>
					<div class="triangle"></div>
					<div class="identity">
						<div class="profil">
							<span class="name">Milan Ricoul</span>
							<br>
							<span class="job">Web Devlopper</span>
						</div>
						<?php the_post_thumbnail('avatar'); ?>
						<div class="clear"></div>
					</div>
				</div>
			<?php endwhile; endif; ?>
				<!--<div class="span4">
					<div class="portrait">
						<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
					</div>
					<div class="triangle"></div>
					<div class="identity">
						<div class="profil">
							<span class="name">Milan Ricoul</span>
							<br>
							<span class="job">Web Devlopper</span>
						</div>
						<img src="<?php bloginfo('template_url'); ?>/images/me.jpg">
						<div class="clear"></div>
					</div>
				</div>

				<div class="span4">
					<div class="portrait">
						<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
					</div>
					<div class="triangle"></div>
					<div class="identity">
						<div class="profil">
							<span class="name">Milan Ricoul</span>
							<br>
							<span class="job">Web Devlopper</span>
						</div>
						<img src="<?php bloginfo('template_url'); ?>/images/me.jpg">
						<div class="clear"></div>
					</div>
				</div>-->
			</div>
		</div>
	</section>

<?php get_footer(); ?>