<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_child_enqueue_styles() {
    // Charger le style du thème parent
    wp_enqueue_style('hello-elementor', get_template_directory_uri() . '/style.css');

    // Charger le style du thème enfant
    wp_enqueue_style('hello-child-style', get_stylesheet_directory_uri() . '/style.css', ['hello-elementor']);
}
add_action('wp_enqueue_scripts', 'hello_child_enqueue_styles');


function shortcode_bouton_header() {
    // Vérifier si l'utilisateur est connecté
    if ( is_user_logged_in() && current_user_can('administrator') ) {
        // Classe CSS
        $classeCSS = "mon-bouton-shortcode";

        // Générer l'élément HTML avec la classe
        $output = '<a id="mon-bouton-shortcode" class="' . esc_attr($classeCSS) . '" href="' . esc_url(admin_url()) . '">Admin</a>';
        
        return $output;
    } else {
        // Retourner une chaîne vide si la condition n'est pas remplie
        return '';
    }
}

add_shortcode('bouton_header', 'shortcode_bouton_header');