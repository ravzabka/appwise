<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="content-type" content="text/html; charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php $header_background_image = get_field('header_background_image', 'option'); ?>
<header class="header"
        style="background-image: url('<?php echo $header_background_image; ?>');">
    <div class="header__container container">
        <nav class="navigation">
            <div class="logo">
                <?php
                $image = get_field('header_logo', 'option'); ?>

                <a href="<?php echo site_url() ?>">
                    <?php if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                             class="header__logo"/>
                    <?php endif; ?>
                </a>
            </div>

            <div class="hamburger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-links">
                <li class="navigation__item"><a href="#">O nas</a></li>
                <li class="navigation__item"><a href="#">Realizacje</a></li>
                <li class="navigation__item"><a href="#">Galeria</a></li>
                <li class="navigation__item"><a href="#">Oferta</a></li>
                <li class="navigation__item"><a href="#">Cennik</a></li>
                <li class="navigation__item"><a href="#">Zespół</a></li>
                <li class="navigation__item"><a href="#">Kontakt</a></li>

            </ul>
        </nav>

        <div class="hero">
            <?php

            $header_main_headline = get_field('header_main_headline', 'option');
            $header_subheadline = get_field('header_subheadline', 'option');
            $header_button_link = get_field('header_button_link', 'option');

            if ($header_button_link) {
                $link_url = $header_button_link['url'];
                $link_title = $header_button_link['title'];
                $link_target = $header_button_link['target'] ? $link['target'] : '_self';
            }


            ?>


            <?php if ($header_main_headline) { ?>
                <h2 class="hero__headline"><?php echo $header_main_headline; ?></h2>
            <?php } ?>
            <?php if ($header_subheadline) { ?>
                <p class="hero__description"><?php echo $header_subheadline; ?></p>
            <?php } ?>


            <div class="hero__cta hero__cta--desktop">
                <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"
                   class="button button--primary">
                    <?php echo esc_html($link_title); ?>
                </a>
            </div>

        </div>
    </div>


</header>