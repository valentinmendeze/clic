<?php 

  $labels = array(
    'name' => 'Membres',
    'singular_name' => 'Membre',
    'add_new' => 'Ajouter',
    'add_new_item' => 'Ajouter un membre',
    'edit_item' => 'Modifier un membre',
    'new_item' => 'Nouveau membre',
    'all_items' => 'Les membres',
    'view_item' => 'Voir le membre',
    'search_items' => 'Rechercher un membre',
    'not_found' =>  'Aucun membre trouvé',
    'not_found_in_trash' => 'Aucun membre dans la corbeille', 
    'parent_item_colon' => '',
    'menu_name' => "L'équipe"
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'equipe' ),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 5,
    'menu_icon' =>  get_bloginfo('template_directory') . '/images/user-icon.png',
    'supports' => array( 'title', 'editor', 'thumbnail' )
  ); 

  register_post_type( 'team', $args );


?>