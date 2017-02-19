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
                    $people = get_pages(array( 'parent' => 355, 'sort_column' => 'rand', 'number' => 1));
                    foreach ($people as $person) {
                        $person_title= 'Zbliżenia';
                        $person_text= 'DeocentriCity to grupa, którą połączyła pasja dla muzyki gospel, wykonywaliśmy ją wspólnie jako chórzyści, uczestnicy, organizatorzy i instruktorzy warsztatów.
												Zespół stworzyliśmy w styczniu 2011 roku. Sercem naszego przesłania jest stawianie Boga w centrum.';
                        $person_photo = get_the_post_thumbnail($person->ID, 'post-thumbnail');
                        include("/templates/person.php");
                    }
              ?>


					 <?php if (is_active_sidebar('two_last_post')) : ?>
							<?php dynamic_sidebar('two_last_post'); ?>
					<?php endif; ?>


				</section>

<?php get_footer(); ?>
