<?php 

    $labels = array(
        'name' => 'Ateliers',
        'singular_name' => 'Atelier',
        'add_new' => 'Ajouter',
        'add_new_item' => 'Ajouter un Atelier',
        'edit_item' => 'Modifier un Atelier',
        'new_item' => 'Nouvel Atelier',
        'all_items' => 'Tous les ateliers',
        'view_item' => 'Voir l\'atelier',
        'search_items' => 'Rechercher un atelier',
        'not_found' =>  'Aucun atelier trouvé',
        'not_found_in_trash' => 'Aucun atelier dans la corbeille', 
        'parent_item_colon' => '',
        'menu_name' => 'Ateliers'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'query_var' => true,
        'rewrite' => array( 'slug' => 'atelier' ),
        'capability_type' => 'post',
        'has_archive' => true, 
        'hierarchical' => false,
        'menu_position' => 5,
        //'menu_icon' =>  get_bloginfo('template_directory') . '/images/globe-icon.png',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    ); 

    register_post_type( 'atelier', $args );

    add_action( 'init', 'register_project' );

?>