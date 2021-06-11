
<?php



function themeslug_enqueue_style() {
    wp_enqueue_style('google-font1', 'https://fonts.googleapis.com/css2?family=Ultra&display=swap');
    wp_enqueue_style('google-font2', 'https://fonts.googleapis.com/css2?family=Gugi&display=swap');
    wp_enqueue_style('font-awesome', '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css');
    wp_enqueue_style('bootstrap4', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css', false );
}
 
function themeslug_enqueue_script() {
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array (), 1.1, true );
}
 
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );

?>