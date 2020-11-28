<?php
/*
Template Name: Контакты
Template Post Type: page
*/
get_header();
?>

    <section class="contactscards" style="background: <?php echo the_field('contactscards__bg_color')?>; background: url(<?php the_field('contactscards__bg_img') ?>) 100% 50%/cover no-repeat; display: <?php the_field('contactscards__display') ?>;">
        <h1 class="contactscards__title"><?php the_field('contactscards__title')?></h1>
        <h2 class="contactscards__subtitle"><?php the_field('contactscards__subtitle')?></h2>
        <div class="container contactscards__container">

        <?php

            $contacts_cards_item = get_posts(array(
                                            'post_type' => 'contacts_cards',
                                            'publish' => true,
                                            'numberposts' => 9999
            ));

            foreach ($contacts_cards_item as $post){

            include(get_template_directory() . '/particles/contacts_card.php');
            }

            wp_reset_postdata();

        ?>

        </div>
    </section>
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2593.674890671053!2d34.837205399999995!3d49.452861399999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d837d74b663bd1%3A0x571fe5bf55ccf9b2!2sSeleshchyns%CA%B9ka%20Zahal%CA%B9noosvitnya%20Shkola%20I-Iii%20Stupeniv%20Mashivs%CA%B9koyi%20Rayonnoyi%20Rady%20Poltavs%CA%B9koyi%20Oblasti!5e0!3m2!1sru!2sua!4v1605095887199!5m2!1sru!2sua" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<?php
get_footer();