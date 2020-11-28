<footer class="footer">
    <div class="footer__container container">

                <!-- column 1 -->
        <div class="column">
            <div class="footer__logo-wrapper">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/footer-logo.png" class="footer__logo">
                <p class="footer__logo-description">Селещинський ліцей</p>
            </div>
            <p class="footer__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est impedit iusto aliquam quam odit voluptatum vero? Autem tenetur omnis sed!</p>
        </div>

                <!-- column 2 -->
        <div class="column">
            <p class="column__title">Останні новини</p>

            
            <?php // Display blog posts on any page @ http://m0n.co/l
                $temp = $wp_query; $wp_query= null;
                $wp_query = new WP_Query(); $wp_query->query('showposts=3' . '&paged='.$paged);
                while ($wp_query->have_posts()) : $wp_query->the_post(); 
            ?>         
                <div class="item wow fadeInUp">
                    <div class="item__photo-wrapper">
                        <img class="item__photo" src="<?php the_field('post__thumbnail')?>" alt="">
                        <div class="item__photo-bg">
                            <figure>
                                <a href="<?php echo get_permalink() ?>"><img class="item__photo-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/icon2.svg" alt=""></a>
                            </figure>
                        </div>
                    </div>
                    <div class="item__content">
                        <a href="<?php echo get_permalink() ?>">
                            <p class="item__description"><?php the_field('post__text_min')?></p>
                        </a>
                        <p class="item__date"><?php the_time('j F Y') ?></p>
                    </div>
                </div>
 
            <?php endwhile; ?>

        </div>

                <!-- column 3 -->
        <div class="column">
            <p class="column__title">Наші контакти</p>

            <?php

                $contacts_cards_item = get_posts(array(
                                                'post_type' => 'contacts_cards',
                                                'publish' => true,
                                                'numberposts' => 9999
                ));

                foreach ($contacts_cards_item as $post){

                include(get_template_directory() . '/particles/contacts_card_footer.php');
                }

                wp_reset_postdata();

            ?>

        </div>
    </div>

    <div class="footer__bottom">
        <div class="container footer__bottom-container">
            <p class="footer__copyright">@ Селещинський ліцей</p>
            
            <!-- Обозначаем локацию меню и само меню -->
            <?php wp_nav_menu(array(
                    'theme_location'  => 'footer_menu',
                    'container'       =>  false,
                    'menu_class'      => 'footer__nav',
                )); ?>

        </div>
    </div>
</footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>new WOW().init();</script>

	<?php wp_footer(); ?>

	
</body>

</html>