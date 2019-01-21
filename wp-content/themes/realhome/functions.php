<?php
add_action('wp_enqueue_scripts', 'insert_css');

function insert_css() {

    wp_enqueue_style('style-name', get_stylesheet_uri());
    wp_register_script('jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js');
    wp_enqueue_script('jquery');
}

//* Enqueue Font Awesome
add_action( 'wp_enqueue_scripts', 'realhome_enqueue_scripts' );
function realhome_enqueue_scripts() {

    wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.6.3/css/all.css' );
}
add_action("wp_footer", "mfp_Add_Text");
function mfp_Add_Text() {   echo "<p>Made by Krustea</p>"; }

add_theme_support('menus'); register_nav_menus(array('menu-principal' => 'Navigation principale','menu-secondaire' => 'Navigation secondaire' ));

if (function_exists('register_sidebar'))
    register_sidebar(array('name'=>'sidebar',
        'before_widget'=>'<div>',
        'after_widget'=>'</div>',
        'before_title'=>'<h3>',
        'after_title'=>'</h3>',
    ));

add_theme_support('post-thumbnails');

function create_post_type() {
    register_post_type('proprietes',
        array(
            'label'                 => __('Propriétés'),
            'singular_label'        => __('Propriété'),
            'add_new_item'          => __( 'Ajouter une propriété' ),
            'edit_item'             => __( 'Modifier une propriété' ),
            'new_item'              => __( 'Nouvelle propriété' ),
            'view_item'             => __( 'Voir la propriété' ),
            'search_items'          => __( 'Rechercher une propriété' ),
            'not_found'             =>  __( 'Aucune propriété trouvée' ),
            'not_found_in_trash'    => __( 'Aucune propriété trouvée' ),
            'public'                => true,
            'show_ui'               => true,
            'capability_type'       => 'post',
            'has_archive'           => true,
            'hierarchical'          => true,
            'menu_icon'             => 'dashicons-admin-page',
            'taxonomies'            => array('types'),
            'supports'              => array( 'title', 'editor', 'thumbnail'),
            'rewrite'               => array('slug' => 'propriété', 'with_front' => true)
        )
    );
}
add_action( 'init', 'create_post_type' );

function themes_taxonomy() {
    register_taxonomy(
        'ville',
        'proprietes',
        array(
            'label' => 'Ville',
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'ville',
                'with_front' => true
            ),
            'hierarchical' =>true,
        )
    );
}
add_action( 'init', 'themes_taxonomy');
