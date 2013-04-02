<?php get_header(); ?>

<?php if(have_posts()): the_post(); ?>

<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'subhead'); ?>

	<style type="text/css">
		body .site .subhead-single-project {
			background: url('<?php echo $large_image_url[0]; ?>') no-repeat;
			background-size: 980px;
		}
	</style>

	<section id="subhead" class="subhead subhead-single-project">
		<hgroup>
			<h1 class="site-title"><?php the_title(); ?></h1>
		</hgroup>
	</section>

	<section class="breadcrumb-single-project">
		<ul class="breadcrumb">
			<li><a href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ) ?></a> <span class="divider">/</span></li>
			<li><a href="<?php echo get_permalink(7); ?>">Les projets</a> <span class="divider">/</span></li>
			<li class="active"><?php the_title(); ?></li>
		</ul>
	</section>

	<section class="current-project container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<article class="span8">
					<h2>Le projet</h2>
					<?php the_content(); ?>
					<blockquote class="pull-right">
						<small>Rédigé par <?php the_author() ?>, le <?php the_date(); ?></small>
					</blockquote>
					<ul class="project-link">
					<?php if (get_field('donate-link')): ?>
						<li><a href="<?php the_field('donate-link'); ?>">Faire un don</a></li>
					<?php endif; ?>
						<li><a href="<?php echo get_permalink(7); ?>">Revenir aux projets</a></li>
					</ul>
					<div class="clear"></div>
				</article>
				<aside class="span4">
					<?php echo do_shortcode(''); ?>
					<h2>Informations pratiques</h2>
					<?php $dated = DateTime::createFromFormat('Ymd', get_field('date_de_commencement')); ?>
					<?php $datef = DateTime::createFromFormat('Ymd', get_field('date_de_fin')); ?>
					<ul>
						<li class="date-debut">Date de début: <?php echo $dated->format('d/m/Y'); ?></li>
						<li class="date-fin">Date de fin:  <?php echo $datef->format('d/m/Y');; ?></li>
						<li class="lieu">Lieu: <?php the_field('lieu-projet'); ?></li>
						<li class="cout">Coût du projet: <?php the_field('cout-projet'); ?></li>
						<li class="pdf">Informations projet: <a href="<?php the_field("dossier_du_projet");?>">Télécharger</a></li>
					</ul>
				</aside>
				<?php //comments_template( '', true ); ?>
			</div>
		</div>
	</section>



<?php endif; ?>

<?php get_footer(); ?>