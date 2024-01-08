<?php

/**
 * About usページ
 */
?>

<?php get_header(); ?>

<main class="main">

    <!-- メインビジュアル -->
    <?php get_template_part('template-parts/sub', 'mv'); ?>

    <div class="main-content-inner container">

        <!-- メインコンテンツ -->
        <?php get_template_part('template-parts/about/content'); ?>

        <!-- 沿革 -->
        <?php get_template_part('template-parts/about/story'); ?>

    </div>

</main>

<?php get_footer(); ?>