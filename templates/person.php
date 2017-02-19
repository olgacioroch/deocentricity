<section class="wrapper spotlight">
    <div class="inner">
      <div class="image"><?php echo $person_photo ?></div>
      <div class="content">
        <h2 class="major"><?php echo $person_title ?></h2>
        <p><?php echo $person_text ?></p>
        <?php
          if (! is_page('Zbliżenia')):
            echo '<a href="/zblizenia" class="special">Zobacz więcej</a>';
          endif;
        ?>
      </div>
    </div>
</section> <!-- person section -->
