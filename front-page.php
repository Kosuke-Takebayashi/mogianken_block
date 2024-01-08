<?php

/**
 * トップページ
 */
?>

<?php get_header(); ?>

<main class="main">

    <!-- メインビジュアル -->
    <?php get_template_part('template-parts/top/mv'); ?>

    <div class="main-content-inner container">

        <!-- メインコンテンツ -->
        <?php get_template_part('template-parts/top/content'); ?>

        <!-- News一覧 -->
        <?php get_template_part('template-parts/top/archive'); ?>

    </div>

</main>

<?php get_footer(); ?>