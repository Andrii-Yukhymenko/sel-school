<?php
/*
Template Name: Шаблон главной страницы
Template Post Type: page
*/
get_header();
?>

	<section class="main-slider">
        <?php
            $main_slider_item = get_posts(array(
                                    'post_type' => 'main_slider',
                                    'publish' => true,
                                    'numberposts' => 9999
            ));
            foreach ($main_slider_item as $post){
            include(get_template_directory() . '/particles/main_slider.php');
            }
            wp_reset_postdata();
        ?>
	</section>

    <section class="services" style="display: <?php the_field('services__display')?>; background: <?php the_field('services__bg_color')?>;">
        <div class="services__top"  style="background: <?php the_field('services__top_bg_color')?>;">
            <div class="container">
                <h2 class="services__top-title" style="color: <?php the_field('services__top_title_color')?>;"><?php the_field('services__top_title')?></h2>
                <p class="services__top-subtitle" style="color: <?php the_field('services__top_subtitle_color')?>;"><?php the_field('services__top_subtitle')?></p>
            </div>
        </div>

        <div class="services__list-wrapper container">
            <!-- Главная страница, список карточек №1 -->   
            <?php
                $services_cards_item = get_posts(array(
                                        'post_type' => 'services_cards',
                                        'publish' => true,
                                        'numberposts' => 9999
                ));
                foreach ($services_cards_item as $post){
                include(get_template_directory() . '/particles/services_cards.php');
                }
                wp_reset_postdata();
            ?>
        </div>
    </section>

    <section class="chooseus" style="display: <?php the_field('chooseus__display')?>; background: <?php the_field('chooseus__bg_color')?>; background: url(<?php the_field('chooseus__bg_img') ?>) center/cover no-repeat;">
        <h2 class="chooseus__title title" style="color: <?php the_field('chooseus__title_color')?>;"><?php the_field('chooseus__title')?></h2>
        <p class="chooseus__subtitle subtitle" style="color: <?php the_field('chooseus__subtitle_color')?>;"><?php the_field('chooseus__subtitle')?></p>
        <div class="chooseus__container container"> 
            <div class="accordion">

                <?php
                    $chooseus_accordion_item = get_posts(array(
                                            'post_type' => 'chooseus_accordion',
                                            'publish' => true,
                                            'numberposts' => 9999
                    ));
                    
                    foreach ($chooseus_accordion_item as $post){
                    include(get_template_directory() . '/particles/chooseus_accordion.php');
                    }
                    wp_reset_postdata();
                ?>

            </div>
            <div class="reviews-slider">

                <?php
                    $reviews_slider_item = get_posts(array(
                                            'post_type' => 'reviews_slider',
                                            'publish' => true,
                                            'numberposts' => 9999
                    ));
                    foreach ($reviews_slider_item as $post){
                    include(get_template_directory() . '/particles/reviews_slider.php');
                    }
                    wp_reset_postdata();
                ?>

            </div>
        </div>
    </section>

    <section class="aboutus" style="display: <?php the_field('aboutus__display')?>; background: <?php the_field('aboutus__bg_color')?>; background: url(<?php the_field('aboutus__bg_img') ?>) center/cover no-repeat;">
        <h2 class="aboutus__title title" style="color: <?php the_field('aboutus__title_color')?>;"><?php the_field('aboutus__title')?></h2>
        <p class="aboutus__subtitle subtitle" style="color: <?php the_field('aboutus__subtitle_color')?>;"><?php the_field('aboutus__subtitle')?></p>
        <div class="aboutus__container container">
            <?php
                $aboutus_cards_item = get_posts(array(
                                        'post_type' => 'aboutus_cards',
                                        'publish' => true,
                                        'numberposts' => 9999
                ));
                foreach ($aboutus_cards_item as $post){
                include(get_template_directory() . '/particles/aboutus_card.php');
                }
                wp_reset_postdata();
            ?>
        </div>
    </section>

    <section class="theme" style="display: <?php the_field('theme__display')?>; background: <?php the_field('theme__bg_color')?>; background: url(<?php the_field('theme__bg_img') ?>) center/cover no-repeat;">
        <p class="theme__title title" style="color: <?php the_field('theme__title_color')?>;"><?php the_field('theme__title')?></p>
        <p class="theme__subtitle subtitle" style="color: <?php the_field('theme__subtitle_color')?>;"><?php the_field('theme__subtitle')?></p>
        <div class="theme__container container">
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/theme/inner-img.png" alt="" class="theme__img">
            <div class="theme__content">
                <?php
                    $theme_cards_item = get_posts(array(
                                            'post_type' => 'theme_cards',
                                            'publish' => true,
                                            'numberposts' => 9999
                    ));
                    foreach ($theme_cards_item as $post){
                    include(get_template_directory() . '/particles/theme_cards.php');
                    }
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <section class="clients"  style="display: <?php the_field('clients__display')?>; background: <?php the_field('clients__bg_color')?>; background: url(<?php the_field('clients__bg_img') ?>) center/cover no-repeat;">
        <div class="clients__container container">
            <?php
                $clients_slider_item = get_posts(array(
                                        'post_type' => 'clients_slider',
                                        'publish' => true,
                                        'numberposts' => 9999
                ));
                foreach ($clients_slider_item as $post){
                include(get_template_directory() . '/particles/clients_slider.php');
                }
                wp_reset_postdata();
            ?>
        </div>
    </section>

<?php
get_footer();
