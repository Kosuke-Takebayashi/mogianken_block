<?php

/**
 * Serviceページ
 */
?>

<?php get_header(); ?>

<main class="main">

    <!-- メインビジュアル -->
    <?php get_template_part('template-parts/sub', 'mv'); ?>

    <div class="main-content-inner container">

        <!-- メインコンテンツ -->
        <?php get_template_part('template-parts/service/content'); ?>

    </div>

</main>

<?php get_footer(); ?>