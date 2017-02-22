<?php

//* Wordpress supports *//
add_theme_support('post-thumbnails');



//* Personal functions *//

function script_enqueue()
{
    //CSS
    wp_enqueue_style('html5up', get_stylesheet_uri());
    wp_enqueue_style('ie9', get_stylesheet_directory_uri() . "/assets/css/ie9.css", array( 'html5up' ));
    wp_style_add_data('ie9', 'conditional', 'lt IE 9');
    wp_enqueue_style('ie8', get_stylesheet_directory_uri() . "/assets/css/ie8.css", array( 'html5up' ));
    wp_style_add_data('ie8', 'conditional', 'lt IE 8');

    //JS
    wp_enqueue_script('skel', get_template_directory_uri(). '/assets/js/skel.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery-scrollex', get_template_directory_uri(). '/assets/js/jquery.scrollex.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('util', get_template_directory_uri(). '/assets/js/util.js', array(), '1.0.0', true);
    wp_enqueue_script('html5up-js-main', get_template_directory_uri(). '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'script_enqueue');

function remove_thumbnail_dimensions($html, $post_id, $post_image_id)
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3);
