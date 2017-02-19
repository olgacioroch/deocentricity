<?php get_header(); ?>



<section id="banner">
						<div class="inner">
							<div class="logo"><img src='<?php echo get_custom_logo(); ?>'></div>
							<h2>This is Solid State</h2>
							<p>Another free + fully responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
						</div>
					</section>

<?php if (is_active_sidebar('two_last_post')) : ?>
		<?php dynamic_sidebar('two_last_post'); ?>
<?php endif; ?>

<?php get_footer(); ?>
