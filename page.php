<?php get_header(); ?>



					<section id="banner">
						<div class="inner">
							<div class="logo"><img src='<?php echo get_custom_logo(); ?>'></div>
							<h2><?php bloginfo('name') ?></h2>
							<p>#Bóg #miasto #centrum</p>
						</div>
					</section> <!-- banner -->

					<section id="wrapper" class='people-list'>

            <?php
$people = get_pages(array(
    'parent' => get_the_ID(), 'sort_order' => 'ASC', 'sort_column' => 'post_date'
));
foreach ($people as $person) {
    $person_title= $person->post_title;
    $person_text= $person->post_content;
    $person_photo = get_the_post_thumbnail($person->ID, 'post-thumbnail');
    include("/templates/person.php");
}
?>
<?php if (is_active_sidebar('two_last_post')) : ?>
   <?php dynamic_sidebar('two_last_post'); ?>
<?php endif; ?>


</section>

<?php get_footer(); ?>
