<?php
/*
Template Name: Accueil
*/
?>

<?php get_header() ?>

	<div class="sub-head">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
		<div class="caption">
			<h2>Qui sommes nous ?</h2>
			<p>Créé fin 2011, nous avons besoin de vous !<br>
				Nous situons notre action sur le long terme, aidez-nous !<br>
				Plusieurs moyens sont possibles: Appui matériel, appui financier, appui technique, parler de nous.</p>
			<div class="more">
				<span><a href="<?php bloginfo('url') ?>">En savoir plus</a></span>
			</div>
		</div>
	</div>

	<div class="last-project container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<article class="span4">
					<h2>Projet cinépirogue</h2>
					<p>Projet de la mort qui tue !</p>
					<div class="commands">
						<a href="#"><div class="buttons donate">Faire un don</div></a>
						<a href="#"><div class="buttons discover">Découvrir le projet</div></a>
						<div class="clear"></div>
					</div>
				</article>
				<div class="thumb span8">
					<img src="<?php bloginfo('template_url') ?>/images/example.png">
				</div>
			</div>
		</div>
	</div>

<?php get_footer() ?>