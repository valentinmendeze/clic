<?php 

	require_once(ABSPATH.'wp-content/themes/csf/types/project.php');
	
	require_once(ABSPATH.'wp-content/themes/csf/types/team.php');

	require_once(ABSPATH.'wp-content/themes/csf/types/atelier.php');

	function no_comment_notes_after($defaults) {
    
	    $defaults['comment_notes_after'] = '';
	    
	    return $defaults;
    
	}
	add_filter('comment_form_defaults', 'no_comment_notes_after');

	add_action('after_setup_theme', 'csf_theme_init');

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

	function pagination($query) {
	    $baseURL="http://".$_SERVER['HTTP_HOST'];
        if($_SERVER['REQUEST_URI'] != "/")
        $baseURL = $baseURL.$_SERVER['REQUEST_URI'];
     
        // Suppression de '/page' de l'URL
        $sep = strrpos($baseURL, '/page/');
        if($sep != FALSE)
        $baseURL = substr($baseURL, 0, $sep);
     
   		// Suppression des paramètres de l'URL
        $sep = strrpos($baseURL, '?');
        if($sep != FALSE){
            // On supprime le caractère avant qui est un '/'
            $baseURL = substr($baseURL, 0, ($sep-1));
        }
        $page = $query->query_vars["paged"];
        if ( !$page ) $page = 1;
            $qs = $_SERVER["QUERY_STRING"] ? "?".$_SERVER["QUERY_STRING"] : "";
        // Nécessaire uniquement si on a plus de posts que de posts par page admis
        if ( $query->found_posts > $query->query_vars["posts_per_page"] ) {
            echo '<nav class="pagination">';
            echo '<ul>';
            // lien précédent si besoin
            if ( $page > 1 ) {
                echo '<li class="next_prev prev"><a title="Revenir à la page précédente (vous êtes à la page '.$page.')" href="'.$baseURL.'/page/'.($page-1).'/'.$qs.'">«</a></li>';
            }
            // la boucle pour les pages
            for ( $i=1; $i <= $query->max_num_pages; $i++ ) {
                // ajout de la classe active pour la page en cours de visualisation
                if ( $i == $page ) {
                        echo '<li class="active"><a href="#pagination" title="Vous êtes sur cette page '.$i.'">'.$i.'</a></li>';
                } else {
                        echo '<li><a title="Rejoindre la page '.$i.'" href="'.$baseURL.'/page/'.$i.'/'.$qs.'">'.$i.'</a></li>';
            	}
            }
            // le lien next si besoin
            if ( $page < $query->max_num_pages ) {
                echo '<li class="next_prev next"><a title="Passer à la page suivante (vous êtes à la page '.$page.')" href="'.$baseURL.'/page/'.($page+1).'/'.$qs.'">»</a></li>';
            	echo '</ul>';
           		echo '</nav>';
           	}
        }
	}

	add_theme_support( 'post-thumbnails' );
	
	add_image_size( 'cover', 650, 350, true );
	add_image_size( 'subhead', 960, 400, true );
	add_image_size( 'avatar', 100, 100, true );
	add_image_size( 'article', 310, 120, true );


 ?>