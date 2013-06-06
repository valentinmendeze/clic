	</div> <!-- Fin de #main -->

	<footer class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<nav class="span4">
					<h3>navigation</h3>
					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'nav-menu' ) ); ?>
				</nav>
				<div class="link span4">
					<h3>partenaires</h3>
					<div id="myCarousel" class="carousel slide">
					<!-- Carousel items -->
					<div class="carousel-inner">
					<?php $i=0; if(get_field('reference', 'option')): ?>
					<?php while(has_sub_field('reference', 'option')): ?>
						
						<div <?php if($i == 0): $i++; ?>class="active item"<?php else: ?>class="item"<?php endif; ?>>
							<img src="<?php the_sub_field('image_reference'); ?>" alt="<?php the_sub_field('image_reference'); ?>">
						</div>
						
					<?php endwhile; endif; ?>
					</div>
					<!-- Carousel nav 
					<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>-->
					</div>
				</div>
				<div class="contact-footer span4">
					<h3>contact</h3>
				</div>
			</div>
		</div>
	</footer>
</div> <!-- Fin de #page -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"><\/script>')</script>
	<!-- jQuery Bootsrap -->
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<!-- jQuery Parallax -->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.parallax-1.1.3.js"></script>
	<!-- jRumble -->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.jrumble.1.3.min.js"></script>

	<script>
		$('.carousel').carousel({
		  interval: 2000
		})

		$('.logo').jrumble();

		$('.logo').hover(function(){
			$(this).trigger('startRumble');
		}, function(){
			$(this).trigger('stopRumble');
		});

		$(document).ready(function(){		
	        $('#subhead').parallax("center", -.4);
	    })
	</script>

	<script src="<?php bloginfo('template_url'); ?>/js/jquerypp.custom.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.elastislide.js"></script>
	<script>
		
		$( '#carouselTop' ).elastislide();
		$( '#carouselBottom').elastislide();
		
	</script>

</body>
</html>