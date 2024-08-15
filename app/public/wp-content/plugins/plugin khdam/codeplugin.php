<?php
/**
 * @package plugin khdam
 * @version 1.0.0
 */
/*
Plugin Name: plugin khdam
Plugin URI: https://seomaniak.ma/
Description: plugin pour dire hello
Version: 1.0.0
Author URI: https://seomaniak.ma/
*/
// Ajouter le contenu au footer
add_action('wp_footer', 'say_hello');
add_action('wp_footer', 'add_seomaniak_logo');

// Ajouter du contenu après le contenu principal
add_filter('the_content', 'insererApresContenu');

// Définir le chemin URL de l'image
function get_image_url() {
    return plugins_url('images/seomaniak_logo.png', __FILE__);
}

// Fonction pour ajouter l'image au pied de page
function add_seomaniak_logo() {
    $image_url = get_image_url();
    // Vérifier si l'image existe
    if ($image_url) {
        echo '<a href="#"><img src="' . esc_url($image_url) . '" alt="Seomaniak" style="display: block; width: 200px; height: auto;"/></a>';    } else {
        echo '<p>Image non trouvée.</p>';
    }
}

// Fonction pour afficher un message dans le footer
function say_hello() {
    echo '<p>Hello World !</p>';
}

// Fonction pour ajouter du contenu après le contenu principal
function insererApresContenu($content) {
    $content .= '<p>Hello world !</p>';
    return $content;
}

// Shortcode pour afficher un message
add_shortcode('nouveauShortcode', 'gererShortcode');
function gererShortcode() {
    return '<p>Ceci est ce que le shortcode ajoute.</p>';
}

// Ajouter un contenu par défaut
add_filter('default_content', 'contenu_par_defaut');
function contenu_par_defaut() {
    return "Template par défaut";
}
    return "Template par défaut
{
Titre 1
Titre 2
contenu";

?>