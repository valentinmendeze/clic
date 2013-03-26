<?php 

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
    'rewrite' => array( 'slug' => 'projets' ),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 5,
    'menu_icon' =>  get_bloginfo('template_directory') . '/images/globe-icon.png',
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 

  register_post_type( 'project', $args );


    add_action( 'init', 'register_project' );

    $labels = array(
        'name'                         => 'Statuts',
        'singular_name'                => 'Statut',
        'search_items'                 => 'Rechercher un statut',
        'popular_items'                => 'Statuts populaires',
        'all_items'                    => 'Tous les statuts',
        'parent_item'                  => 'Statut parent',
        'parent_item_colon'            => 'Statut parent',
        'edit_item'                    => 'Modifier statut', 
        'update_item'                  => 'Mettre à jour le statut',
        'add_new_item'                 => 'Ajouter un nouveau statut',
        'new_item_name'                => 'Nouveau statut',
        'separate_items_with_commas'   => null,
        'add_or_remove_items'          => null,
        'choose_from_most_used'        => null,
        'not_found'                    => 'Aucun statut trouvé',
        'menu_name'                    => 'Statuts'
    ); 

    $args = array(
        'hierarchical'            => true,
        'labels'                  => $labels,
        'show_ui'                 => true,
        'show_admin_column'       => true,
        'query_var'               => true,
        'rewrite'                 => array( 'slug' => 'projets' )
    );

    register_taxonomy( 'statut', 'project', $args );


?>