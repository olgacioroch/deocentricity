<?php
/**
 * Register our sidebars and widgetized areas.eader
 *
 */
function arphabet_widgets_init()
{
    register_sidebar(array(
        'name'          => 'Recent post 2',
        'id'            => 'two_last_post',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
    ));

    register_sidebar(array(
        'name'          => 'Recent posts 4',
        'id'            => 'four_last_post',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
    ));
}
add_action('widgets_init', 'arphabet_widgets_init');
add_theme_support('post-thumbnails');

add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3);

function remove_thumbnail_dimensions($html, $post_id, $post_image_id)
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}
