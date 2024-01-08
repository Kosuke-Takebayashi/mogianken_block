<?php

/**
 * Newsページ
 */
?>

<?php get_header(); ?>

<main class="main news-main">

    <!-- メインビジュアル -->
    <?php get_template_part('template-parts/sub', 'mv'); ?>

    <div class="main-content-inner container news-article-wrapper news-main__news-article-wrapper">

        <!-- メインコンテンツ -->
        <?php get_template_part('template-parts/news/content'); ?>

    </div>

</main>

<?php get_footer(); ?>