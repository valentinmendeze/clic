<?php 

function register_project() {
  $labels = array(
    'name' => 'Projets',
    'singular_name' => 'Projet',
    'add_new' => 'Ajouter',
    'add_new_item' => 'Ajouter un projet',
    'edit_item' => 'Modifier un projet',
    'new_item' => 'Nouveau projet',
    'all_items' => 'Tous les projets',
    'view_item' => 'Voir le projet',
    'search_items' => 'Rechercher un projet',
    'not_found' =>  'Aucun projet trouvé',
    'not_found_in_trash' => 'Aucun projet dans la corbeille', 
    'parent_item_colon' => '',
    'menu_name' => 'Projets'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'projet' ),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 5,
    'menu_icon' =>  get_bloginfo('template_directory') . '/images/globe-icon.png',
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 

  register_post_type( 'project', $args );
}
add_action( 'init', 'register_project' );



?>