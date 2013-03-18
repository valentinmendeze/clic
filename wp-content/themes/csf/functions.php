<?php 

	function csf_theme_init() {

		add_theme_support( 'menus' );
		register_nav_menu('primary', 'Menu principal');
		register_nav_menu('footer', 'Menu secondaire');
	}

	add_action('after_setup_theme', 'csf_theme_init');

 ?>