<?php get_header(); ?>

<?php if ( is_active_sidebar( 'four_last_post' ) ) : ?>
		<?php dynamic_sidebar( 'four_last_post' ); ?>
<?php endif; ?>

<?php get_footer(); ?>
