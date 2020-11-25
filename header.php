<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ! Адаптивность -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.ico">
    <?php wp_head(); ?>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="header__top">
            <div class="container header__top-container">
                <div class="header__top-contacts-wrapper">
                    <!-- <a class="header__top-contacts header__top-telephone" href=“tel:+380111111111”><svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16"><g><g><path d="M1.7 15.905C1.007 15.811.04 15.39.04 13.767V1.993s.034-2.06 2.213-2.06h5.346s2.396-.072 2.396 2.08v11.213c0 .343-.01.905-.12 1.234-.203.607-.752 1.447-2.233 1.447H3.077c-.38 0-1 .049-1.377-.002zm3.28-.932c.326 0 .588-.239.588-.53 0-.294-.262-.53-.588-.53-.322 0-.586.236-.586.53 0 .291.264.53.586.53zM5.985.933H4.048c-.38 0-.69.222-.69.498 0 .275.31.498.69.498h1.937c.38 0 .69-.223.69-.498s-.31-.499-.69-.499zm2.213 1.994H1.835c-.38 0-.69.279-.69.622v8.743c0 .343.31.622.69.622h6.363c.381 0 .69-.279.69-.622V3.549c0-.343-.309-.622-.69-.622z"/><path fill="#555" d="M1.7 15.905C1.007 15.811.04 15.39.04 13.767V1.993s.034-2.06 2.213-2.06h5.346s2.396-.072 2.396 2.08v11.213c0 .343-.01.905-.12 1.234-.203.607-.752 1.447-2.233 1.447H3.077c-.38 0-1 .049-1.377-.002zm3.28-.932c.326 0 .588-.239.588-.53 0-.294-.262-.53-.588-.53-.322 0-.586.236-.586.53 0 .291.264.53.586.53zM5.985.933H4.048c-.38 0-.69.222-.69.498 0 .275.31.498.69.498h1.937c.38 0 .69-.223.69-.498s-.31-.499-.69-.499zm2.213 1.994H1.835c-.38 0-.69.279-.69.622v8.743c0 .343.31.622.69.622h6.363c.381 0 .69-.279.69-.622V3.549c0-.343-.309-.622-.69-.622z"/></g></g></svg>+380111111111111</a>
                    <a class="header__top-contacts header__top-mail" href=“mailto:mail@mail.com”><svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16"><g><g><path d="M16.48.031a.38.38 0 0 1 .406.086.388.388 0 0 1 .091.408l-5.09 14.014a1.192 1.192 0 0 1-1.827.56l-4.758-3.483L16.233.783 3.871 10.567.39 8.019a1.081 1.081 0 0 1 .247-1.88zM7.157 14.38c.034.047-1.195.857-2.136 1.468a.831.831 0 0 1-1.272-.555l-.676-3.716-.03-.163z"/><path fill="#555" d="M16.48.031a.38.38 0 0 1 .406.086.388.388 0 0 1 .091.408l-5.09 14.014a1.192 1.192 0 0 1-1.827.56l-4.758-3.483L16.233.783 3.871 10.567.39 8.019a1.081 1.081 0 0 1 .247-1.88zM7.157 14.38c.034.047-1.195.857-2.136 1.468a.831.831 0 0 1-1.272-.555l-.676-3.716-.03-.163z"/></g></g></svg>mail@mail.com</a> -->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="header__wrapper">
                <div class="header__logo-wrapper">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/header-logo.png" class="header__logo">
                    </a>
                    <div class="header__burger"><span></span></div>
                </div>

                <!-- Обозначаем локацию меню и само меню-->
                <?php wp_nav_menu(array(
                    'theme_location'  => 'header_menu',
                    'container'       => 'nav',
                    'menu_class'      => 'header__menu',
                )); ?>

            </div>
        </div>
    </header>

    <div class="scrolline">
        <div class="scrolline__inline"></div>
    </div>

        <?php

            $marquee_item = get_posts(array(
                                    'post_type' => 'marquee',
                                    'publish' => true
            ));

            foreach ($marquee_item as $post){
            ?>
                <div class="marquee">
                    <span><?php the_field('marquee__text') ?></span>
                </div>

            <?php }

            wp_reset_postdata();

        ?>

       