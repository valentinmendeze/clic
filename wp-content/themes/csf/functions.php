<?php 

	require_once(ABSPATH.'wp-content/themes/csf/types/project.php');
	
	require_once(ABSPATH.'wp-content/themes/csf/types/team.php');

	require_once(ABSPATH.'wp-content/themes/csf/types/atelier.php');

	function no_comment_notes_after($defaults) {
    
	    $defaults['comment_notes_after'] = '';
	    
	    return $defaults;
    
	}
	add_filter('comment_form_defaults', 'no_comment_notes_after');

	function csf_theme_init() {

		add_theme_support( 'menus' );
		register_nav_menu('primary', 'Menu principal');
		register_nav_menu('footer', 'Menu secondaire');
	}

	add_action('send_headers', 'site_router');

	function site_router() {
		$root = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
		$url  = str_replace($root, '', $_SERVER['REQUEST_URI']);
		$url  = explode('/', $url);

		if(count($url) == 1 && $url[0] == 'login') {
			require 'templates/login-template.php';
			die();
		} else if(count($url) == 1 && $url[0] == 'profil') {
			require 'templates/profil-template.php';
			die();
		} else if(count($url) == 1 && $url[0] == 'register') {
			require 'templates/register-template.php';
			die();
		} else if(count($url) == 1 && $url[0] == 'logout') {
			wp_logout();
			wp_redirect( home_url() );
			exit();
		}
	}

	add_action('after_setup_theme', 'csf_theme_init');

	add_theme_support( 'post-thumbnails' );
	
	add_image_size( 'cover', 650, 350, true );
	add_image_size( 'subhead', 960, 400, true );
	add_image_size( 'avatar', 100, 100, true );


 ?>