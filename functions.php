<?php
function init_template() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );

}

add_action( 'after_setup_theme', 'init_template' );

function assets(){
    // Registrar los stylos
    wps_register_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", '','4.4.1', 'all');
    wps_register_style('montserrat', "hhttps://fonts.googleapis.com/css?family=Montserrat&display=swap", '','1.0', 'all');

    // Para referenciar productos.
    wp_enqueue_style('estilos', get_stylesheet_uri(), array('bootstrap','montserrat'),'1.0', 'all');


}

add_action('wp_enqueue_style', 'assets');