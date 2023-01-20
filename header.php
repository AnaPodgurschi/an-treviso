<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="wrapper">
        <div class="fixed-header">
            <div class="dot"></div>
        </div>
        <header class="main-header">

            <?php if (get_field('header_background_image', 'option')) : ?>
                <img src="<?php echo get_field('header_background_image', 'option'); ?>" alt="">
            <?php endif; ?>
            <div class="main-header__logo-l"> <?php require_once __DIR__ . '/assets/i/static/logo-l.svg'; ?></div>
            <div class="logo">
                <?php if (get_field('logo', 'option')) : ?>
                    <?php if (is_front_page()) : ?>
                        <img src="<?php echo get_field('logo', 'option'); ?>" alt="">
                    <?php else : ?>
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_field('logo', 'option'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <?php wp_nav_menu([
                'theme_location'  => 'menu-1',
                'menu'            => '',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'main-menu main-header__main-menu',
                'menu_id'         => 'js-main-menu',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            ]); ?>

            <div href="#" class="main-header__like">
                <svg width="28" height="25" viewBox="0 0 28 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.2222 8.94768e-08C19.0148 8.94768e-08 17.8239 0.282382 16.7439 0.824783C15.6639 1.36718 14.7245 2.15471 14 3.12498C13.0205 1.81322 11.655 0.844266 10.0969 0.355361C8.53869 -0.133544 6.86688 -0.117608 5.31823 0.40091C3.76958 0.919427 2.42261 1.91424 1.46812 3.24443C0.513624 4.57462 0 6.17276 0 7.81245C0 17.1744 12.95 24.5572 13.4944 24.8696C13.6487 24.9567 13.823 25.0016 14 24.9999C14.1771 25.0029 14.3518 24.9579 14.5056 24.8696C16.8903 23.4693 19.1272 21.8289 21.1815 19.9738C25.7056 15.8853 28 11.7968 28 7.81245C28 5.74046 27.1806 3.75333 25.7219 2.28822C24.2633 0.823096 22.285 8.94768e-08 20.2222 8.94768e-08V8.94768e-08Z" />
                </svg>
            </div>

            <div class="main-header__sandwich sandwitch-wrap" id="js-sandwitch-wrap">
                <div class="sandwitch">
                    <div class="sandwitch__line sandwitch__line--top"></div>
                    <div class="sandwitch__line sandwitch__line--middle"></div>
                    <div class="sandwitch__line sandwitch__line--bottom"></div>
                </div>
            </div>
        </header>