<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <title><?php wp_title(' | ', true, 'right');
        bloginfo('name'); ?></title>

    <link href="./assets/icons/favicon.png" rel="icon" type="image/png">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <div class="container">
        <nav class="header__navbar d-flex justify-content-between align-items-center">
            <?php if (!empty(tr_options_field('theme_options.header_logo'))) { ?>
                <div class="nav__logo max-w--340">
                    <a href="<?= get_site_url() ?>">
                        <?= wp_get_attachment_image(tr_options_field('theme_options.header_logo'), 'large') ?>
                    </a>
                </div>
            <?php } ?>

            <div class="menu-icon hover-target d-lg-none d-block">
                <span class="menu-icon__line menu-icon__line-left"></span>
                <span class="menu-icon__line"></span>
                <span class="menu-icon__line menu-icon__line-right"></span>
            </div>

            <div class="nav__container d-lg-flex d-none align-items-center gap--70">
                <?php
                $mainMenuItems = get_menu_by_location('main-menu');
                $main_build_tree = recursive_mitems_to_array($mainMenuItems);

                global $wp;
                $urlCurrent = home_url($wp->request) . '/';

                if (!empty($main_build_tree)) { ?>
                    <ul class="nav__list d-flex flex-wrap align-items-center gap--30">
                        <?php foreach ($main_build_tree as $item) { ?>
                            <li class="nav__item<?php if ($urlCurrent == $item['item']->url) echo ' active'; ?>">
                                <a href="<?= $item['item']->url ?>" class="nav__link p--10 fs--22 text-uppercase">
                                    <?= $item['item']->title ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>

                <div class="nav__icons d-flex align-items-center gap--15">
                    <div class="nav__icon hover--opacity">
                        <a href="<?= wc_get_page_permalink('myaccount') ?>">
                            <img src="<?= get_template_directory_uri() ?>/assets/icons/icon_PersonBlue.png" alt="">
                        </a>
                    </div>
                    <div class="nav__icon hover--opacity">
                        <a href="<?= wc_get_cart_url() ?>" class="cart-icon">
                            <img src="<?= get_template_directory_uri() ?>/assets/icons/icon_CartBlue.png" alt="">
                            <div class="cart-added"><?= WC()->cart->cart_contents_count; ?></div>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<nav class="nav d-lg-none d-block">
    <div class="nav__content">
        <?php
        $mainMenuItems = get_menu_by_location('main-menu');
        $main_build_tree = recursive_mitems_to_array($mainMenuItems);

        global $wp;
        $urlCurrent = home_url($wp->request) . '/';

        if (!empty($main_build_tree)) { ?>
            <ul class="nav__list">
                <?php foreach ($main_build_tree as $item) { ?>
                    <li class="nav__list-item<?php if ($urlCurrent == $item['item']->url) echo ' active-nav'; ?>">
                        <a href="<?= $item['item']->url ?>" class="hover-target">
                            <?= $item['item']->title ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>

        <div class="nav__icons d-flex justify-content-center align-items-center gap--15 mt--20">
            <div class="nav__icon hover--opacity">
                <a href="<?= wc_get_page_permalink('myaccount') ?>">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/icon_PersonBlue.png" alt="">
                </a>
            </div>
            <div class="nav__icon hover--opacity">
                <a href="<?= wc_get_cart_url() ?>" class="cart-icon">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/icon_CartBlue.png" alt="">
                    <div class="cart-added"><?= WC()->cart->cart_contents_count; ?></div>
                </a>
            </div>
        </div>
    </div>
</nav>

<main>