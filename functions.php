<?php
// enregistrer le menu
register_nav_menus(array(
'menu' => 'principal'
));
// fin
// afficher image à la une
add_theme_support( 'post-thumbnails' );
// fin

function monstyle() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'Cinzel',
    "https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" );
        wp_enqueue_style( 'DM Sans',
    "https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" );
        wp_enqueue_style( 'library',
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" );

	wp_enqueue_script( 'top', get_template_directory_uri().'/javascript/totop.js');

    wp_enqueue_script( 'nav', get_template_directory_uri().'/javascript/nav.js');

}
    add_action( 'wp_enqueue_scripts', 'monstyle' );


/* Autoriser les fichiers SVG */
function wpc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg xml';
	return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');

add_filter('show_admin_bar', '__return_false');

//ajouter une taille à l'image à la une
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
add_image_size( 'home', 1280, 744, false );
add_image_size( 'blogpage_thumb', 300, 300, false );
add_image_size( 'singleposthumbnail', 750, 750, false );
add_image_size( 'singleposthumbnail2', 750, 750, true );// L'image sera tronquée exactement à la dimension indiquée
add_image_size( 'couv', 1536, 1536, false );
add_image_size( 'small_home', 150,150, false);
}


