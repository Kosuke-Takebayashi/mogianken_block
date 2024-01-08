<?php

/**
 * Companyページ
 */
?>

<?php get_header(); ?>

<main class="main">

    <!-- メインビジュアル -->
    <?php get_template_part('template-parts/sub', 'mv'); ?>

    <div class="main-content-inner container">

        <?php get_template_part('template-parts/company/content'); ?>

    </div>

</main>

<?php get_footer(); ?>