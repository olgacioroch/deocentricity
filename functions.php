<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {
	register_sidebar( array(
		'name'          => 'Recent post 2',
		'id'            => 'two_last_post',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	) );

	register_sidebar( array(
		'name'          => 'Recent posts 4',
		'id'            => 'four_last_post',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	) );


}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>
