<?php get_header() ?>


<?php
  $c_post = get_post(get_the_ID());
  $c_images = get_posts(
              array(
                  'post_type'      => 'attachment',
                  'post_parent'    => get_the_ID(),
                  'posts_per_page' => 1, /* Save memory, only need one */
              )
          );



  $title = $c_post -> post_title;
  $content = $c_post -> post_content;
  $content = preg_replace('/(<)([img])(\w+)([^>]*>)/', "", $content);
?>

<section id="wrapper" style='background-image:url(<?php echo $c_images[0] -> guid ?>)'>
  <div class='shadow'></div>
  <header>
        <div class="inner">
          <h2><?php echo $title ?></h2>
          <p>Phasellus non pulvinar erat. Fusce tincidunt nisl eget ipsum.</p>
        </div>
  </header> <!-- header -->


  <div class="wrapper">
    <div class="inner">
      <?php
      echo $title;
      echo $content;
      ?>
    </div>
  </div> <!-- wrapper content -->

  <?php if (is_active_sidebar('two_last_post')) : ?>
  		<?php dynamic_sidebar('two_last_post'); ?>
  <?php endif; ?>

</section> <!-- wrapper section -->

<?php get_footer(); ?>
