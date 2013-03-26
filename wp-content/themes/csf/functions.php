<?php 

	require_once(ABSPATH.'wp-content/themes/csf/types/project.php');

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

	add_action('after_setup_theme', 'csf_theme_init');

	add_theme_support( 'post-thumbnails' );

 ?>