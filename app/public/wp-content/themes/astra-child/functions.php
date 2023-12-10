<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

function ajouter_lien_admin_menu($items, $args) {
    if (is_user_logged_in() && $args->theme_location == 'primary') {
        $admin_link = '<li><a class="AdminMenuLien" href="' . admin_url() . '">Admin</a></li>';
        // Diviser les éléments du menu en un tableau
        $menu_items = explode('</li>', $items);
        // Insérer le lien vers l'administration en seconde position
        array_splice($menu_items, 1, 0, $admin_link);
        // Réassembler les éléments du menu en une chaîne
        $items = implode('</li>', $menu_items);
        $items .= '</li>'; // Ajouter la balise fermante pour le dernier élément
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'ajouter_lien_admin_menu', 10, 2);