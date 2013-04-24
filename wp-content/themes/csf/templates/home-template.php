<?php
/*
Template Name: Accueil
*/
?>

<?php get_header() ?>

<?php 

	$project = new WP_query(array(
		'post_type' => 'project',
		'posts_per_page' => '1',
		'statut' => 'projets-phares'
	));

?>

	<section id="subhead" class="subhead subhead-project">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
		<div class="caption">
			<h2>Qui sommes nous ?</h2>
			<?php if(have_posts()): the_post(); ?>
			<p><?php the_field('texte_dintroduction'); ?></p>
			<?php endif; ?>
			<div class="more">
				<span><a href="<?php echo get_permalink(97); ?>">En savoir plus</a></span>
			</div>
		</div>
	</section>

	<section class="container-fluid info">
		<div class="row-fluid">
			<div class="span12">
				<ul class="thumbnails">
					<li class="span4">
				    	<div class="thumbnail">
				    		<img src="<?php bloginfo('template_url'); ?>/images/icons/icon-1.png" data-src="holder.js/300x200" alt="">
				    		<p>Favoriser un usage éducatif et pédagogique des outils numériques pour tous</p>
				    	</div>
				    	<div class="button-1">
					    	<a href="#" title="" class="">En savoir plus</a>
				    	</div>
					</li>
					<li class="span4">
				    	<div class="thumbnail">
				    		<img src="<?php bloginfo('template_url'); ?>/images/icons/icon-2.png" data-src="holder.js/300x200" alt="">
				    		<p>Réduire la fracture numérique en facilitant l'accès aux outils et à la culture numérique aux plus démunis</p>
				    	</div>
				    	<div class="button-2">
					    	<a href="#" title="" class="">En savoir plus</a>
				    	</div>
					</li>
					<li class="span4">
				    	<div class="thumbnail">
				    		<img src="<?php bloginfo('template_url'); ?>/images/icons/icon-3.png" data-src="holder.js/300x200" alt="">
				    		<p>Participer à la diffusion des TIC comme moyens d'apprentissage et de développement</p>
				    	</div>
				    	<div class="button-3">
					    	<a href="#" title="" class="">En savoir plus</a>
				    	</div>
					</li>
				</ul>
			</div>
		</div>
	</section>

	<?php if($project->have_posts()): $project->the_post(); ?>

	<section class="last-project container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="thumb span8">
				<?php if(has_post_thumbnail()): ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('cover'); ?></a>
				<?php else: ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/example.png" title="<?php the_title(); ?>"></a>
				<?php endif; ?>
					<div class="clear"></div>
				</div>
				<article class="span4">
					<h2><?php the_title(); ?></h2>
					<?php if (get_field('quick_description')): ?>
					<p><?php the_field('quick_description'); ?></p>
					<?php else: ?>
					<p><?php the_excerpt(); ?></p>
					<?php endif; ?>
					<div class="commands">
						<a href="<?php the_field('donate-link'); ?>" title="Faire un don"><div class="buttons donate">Faire un don</div></a>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_url') ?>/images/more.png" class="more" alt="En savoir plus"><div class="discover">Découvrir le projet</div></a>
						<div class="clear"></div>
					</div>
				</article>
			</div>
		</div>
	</section>

	<?php endif; wp_reset_query(); ?>

	<section class="last-atelier container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="span8">
					<div class="picture">
						<a href="#" title="yo"><img src="http://localhost:8888/clic/wp-content/uploads/2013/04/IMG_23392-650x350.jpg" alt="pwit"></a>
						<div>
							<h3>Salut</h3>
						</div>
					</div>
					<div class="picture">
						<a href="#" title="yo"><img src="http://localhost:8888/clic/wp-content/uploads/2013/04/IMG_23392-650x350.jpg" alt="pwit"></a>
						<div>
							<h3>Salut</h3>
						</div>
					</div>
					<div class="picture">
						<a href="#" title="yo"><img src="http://localhost:8888/clic/wp-content/uploads/2013/04/IMG_23392-650x350.jpg" alt="pwit"></a>
						<div>
							<h3>Salut</h3>
						</div>
					</div>
					<div class="picture">
						<a href="#" title="yo"><img src="http://localhost:8888/clic/wp-content/uploads/2013/04/IMG_23392-650x350.jpg" alt="pwit"></a>
						<div>
							<h3>Salut</h3>
						</div>
					</div>
				</div>
				<article class="span4">
					<h2>Les ateliers</h2>
					<p>Lorem ipsum...</p>
					<a href="<?php the_field('donate-link'); ?>" title="Découvrir les ateliers"><div class="buttons discover">Découvrir les ateliers</div></a>
				</article>
			</div>
		</div>
	</section>

<?php get_footer() ?>