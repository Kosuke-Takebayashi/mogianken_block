<?php

/**
 * お問い合わせページ
 */
?>

<?php get_header(); ?>

<main class="main contact-main">

    <!-- メインビジュアル -->
    <?php get_template_part('template-parts/sub', 'mv'); ?>

    <!-- メインコンテンツ -->
    <?php get_template_part('template-parts/contact/content'); ?>

</main>

<?php get_footer(); ?>