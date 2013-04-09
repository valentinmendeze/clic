<?php 

  $labels = array(
    'name' => 'Présentations',
    'singular_name' => 'Présentation',
    'add_new' => 'Ajouter',
    'add_new_item' => 'Ajouter une présentation',
    'edit_item' => 'Modifier une présentation',
    'new_item' => 'Nouveau présentation',
    'all_items' => 'Les présentations',
    'view_item' => 'Voir le présentation',
    'search_items' => 'Rechercher une présentation',
    'not_found' =>  'Aucun présentation trouvée',
    'not_found_in_trash' => 'Aucun présentation dans la corbeille', 
    'parent_item_colon' => '',
    'menu_name' => 'Présentations'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'presentations' ),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 5,
    'menu_icon' =>  get_bloginfo('template_directory') . '/images/justify-icon.png',
    'supports' => array( 'title', 'editor' )
  ); 

  register_post_type( 'presentation', $args );

?>