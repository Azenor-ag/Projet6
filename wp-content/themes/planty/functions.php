 <?php
    // action pour faire entrer en file d'attente le style.css du thème parent
    add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
    function theme_enqueue_styles() {
    wp_enqueue_style('underscore', get_template_directory_uri() . '/style.css');
   
    }
    // action avec priorité 20. 
    // on sort wallstreet-style de la file d'attente et on rentre le style.css de l'enfant
    add_action('wp_enqueue_scripts', 'style_theme_enfant', );
    function style_theme_enfant() {
        wp_enqueue_style('planty', get_stylesheet_directory_uri() . '/theme.css', array(), filemtime(get_stylesheet_directory() . '/theme.css'));
    }
    /*hook*/
    add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {
    if (is_user_logged_in() && $args->theme_location == 'menu-1') {
        $items .= '<a href="'. get_admin_url() .'">Admin</a>';
    }
    return $items;
}
?>
