<?php
function init_template() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );

    // Anadiendo la parte del menu

    register_nav_menus(
        array(
            'top_menu' => 'Menú Principal'
        )
    );

}

add_action( 'after_setup_theme', 'init_template' );

function assets(){
    // Registrar los stylos
    wp_register_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", '','4.4.1', 'all');
    wp_register_style('montserrat', "hhttps://fonts.googleapis.com/css?family=Montserrat&display=swap", '','1.0', 'all');
    // Para referenciar productos.
    wp_enqueue_style('estilos', get_stylesheet_uri(), array('bootstrap','montserrat'),'1.0', 'all');

    // Agregando archivos javascrip
  
    wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', '', '1.0', true);


}

// Ejecutando la funcion de Assets
add_action('wp_enqueue_scripts','assets');