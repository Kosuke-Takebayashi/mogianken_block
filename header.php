<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <!-- ヘッダー -->
    <header class="header">
        <div class="header-inner">

            <?php

            $header_logo = "";
            $contact_button_icon = "";

            if (is_home() || is_front_page()) {
                $header_logo = get_template_directory_uri() . '/assets/img/logo-header-top.svg';
                $contact_button_icon =  get_template_directory_uri() . '/assets/img/icon-mail.svg';
            } else {
                $header_logo = get_template_directory_uri() . '/assets/img/logo-header-sub-page.svg';
                $contact_button_icon =  get_template_directory_uri() . '/assets/img/icon-mail-sub-page.svg';
            }

            ?>

            <!-- ロゴ -->
            <div class="header-logo">
                <h1><a href="<?php echo esc_url(home_url()); ?>">
                    <?php if(is_home() || is_front_page()): ?>
                        <?php echo get_custom_logo(); ?>
                    <?php else: ?>
                        <img src="<?php echo esc_url($header_logo); ?>" alt="テックコーポレートのロゴ" class="header-logo__img" width="204" height="70">
                    <?php endif; ?>
            </a></h1>
            </div>

            <!-- グローバルナビゲーション -->
            <nav class="header-nav <?php echo (is_home() || is_front_page()) ? "header-nav--top-page" : ""; ?>">
                <?php wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'menu_class' => 'header-nav__list',
                    'container' => false,
                )) ?>

                <!-- お問い合わせボタン -->
                <div class="header-nav__item header-contact-button <?php echo (is_home() || is_front_page()) ? "header-contact-button--top-page" : ""; ?>">
                    <a href="<?php echo esc_url(home_url()); ?>/contact" class="header-contact-button__link <?php echo (is_home() || is_front_page()) ? "header-contact-button__link--top-page" : ""; ?>">
                        <img src="<?php echo esc_url($contact_button_icon); ?>" alt="" class="header-contact-button__img" width="26" height="20">Contact</a>
                </div>
            </nav>

            <!-- ハンバーガーボタン -->
            <button class="hamburger-button" id="hamburger-button" type="button">
                <span class="hamburger-bar hamburger-bar-1"></span>
                <span class="hamburger-bar hamburger-bar-2"></span>
                <span class="hamburger-bar hamburger-bar-3"></span>
            </button>

            <!-- グローバルナビゲーション - SP -->
            <div class="hamburger-menu-wrapper" id="hamburger-menu-wrapper">
                <div class="header-inner"><a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo-header-hamburger.svg" alt="" class="hamburger-menu-logo" width="117" height="40"></a></div>
                <nav class="header-nav--sp hamburger-menu">
                    <?php wp_nav_menu(array(
                    'theme_location' => 'main-menu-sp',
                    'menu_class' => 'header-nav__list--sp',
                    'container' => false,
                )) ?>
                </nav>
            </div>

        </div>
    </header>