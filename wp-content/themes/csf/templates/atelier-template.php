<?php
/*
Template Name: Ateliers
*/
?>

<?php get_header(); ?>

<?php 

	$atelier = new WP_query(array(
		'post_type' => 'atelier',
		'posts_per_page' => 5,
		'tax_query' => array(
			array(
				'taxonomy' => 'statut',
				'field' => 'slug',
				'terms' => 'atelier-termine',
				'operator' => 'NOT IN',
			)
		)
	));

	$atelier_fini = new WP_query(array(
		'post_type' => 'atelier',
		'statut' => 'atelier-termine',
		'posts_per_page' => 8
	));

?>

	<section id="subhead" class="subhead subhead-atelierarchive">
		<hgroup>
			<h1 class="site-title">Les ateliers</h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
	</section>

	<section class="list-ateliers scontainer-fluid">
		<div class="row-fluid">
			<ul class="thumbnails">
				<?php if($atelier->have_posts()): while($atelier->have_posts()): $atelier->the_post(); ?>
				<li class="span4">
					<div class="thumbnail">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('cover'); ?></a>
						<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>
						<?php $dated = DateTime::createFromFormat('Ymd', get_field('date_de_commencement')); ?>
						<?php $datef = DateTime::createFromFormat('Ymd', get_field('date_de_fin')); ?>
						<ul class="infos">
							<li class="dated">Date de début : <span class="bold"><?php echo $dated->format('d/m/Y'); ?></span></li>
							<li class="datef">Date de fin : <span class="bold"><?php echo $datef->format('d/m/Y'); ?></span></li>
							<li class="lieu">Lieu : <span class="bold"><?php the_field('lieu_de_latelier') ?></span></li>
						</ul>
						<a href="<?php the_permalink(); ?>" title="Découvrir l'atelier" class="more"><span>Découvrir l'atelier</span></a>
					</div>
				</li>
				<?php endwhile; endif; ?>
				<li class="span4 ateliers-finis">
					<div class="thumbnail">
						<h3 class="last-thumb-title">Les ateliers terminés</h3>
						<div class="picture">
							<?php if($atelier_fini->have_posts()): while($atelier_fini->have_posts()): $atelier_fini->the_post(); ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('cover'); ?></a>
							<?php endwhile; endif; ?>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>

	<?php wp_reset_query(); ?>

<?php get_footer(); ?>