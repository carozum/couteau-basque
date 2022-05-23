<?php
// charge la page css
wp_enqueue_script('script-name', get_template_directory_uri() .
    '/js/example.js', array(), '1.0.0', true);

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

/* Déclarer le menu */
function declare_menu()
{
    register_nav_menu('menu-principal', __('Mon menu principal'));
    register_nav_menu('footer-menu', __('Menu footer'));
}
add_action('after_setup_theme', 'declare_menu');
