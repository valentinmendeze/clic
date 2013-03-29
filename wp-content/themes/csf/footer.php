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
				</div>
				<div class="contact span4">
					<h3>contact</h3>
				</div>
			</div>
		</div>
	</footer>
</div> <!-- Fin de #page -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"><\/script>')</script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.parallax-1.1.3.js"></script>

	<script>
		$(document).ready(function(){		
	        $('#subhead').parallax("center", -.4);
	    })
	</script>
	
</body>
</html>