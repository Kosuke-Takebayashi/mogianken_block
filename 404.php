<?php 
/**
 * 404ページ
 */
?>

<?php get_header(); ?>

<main class="main not-found">
    <div class="not-found__inner">
        <h2 class="not-found__title">404 Not Found</h2>
        <p class="not-found__text">ページが見つかりません。</p>
        <a href="<?php echo esc_url(home_url()); ?>" class="button not-found__button">トップへ戻る</a>
    </div>
</main>

<?php get_footer(); ?>