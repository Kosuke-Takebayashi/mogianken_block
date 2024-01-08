<section class="news section">
    <div class="section-title">
        <h2 class="section-title__text">News</h2>
        <span class="section-title__sub-text">お知らせ</span>
    </div>

    <div class="section-content">
        <div class="news-article-wrapper">

            <!-- 記事一覧を表示 -->
            <?php get_template_part('template-parts/front-page-articles'); ?>

            <div class="read-more-link-wrapper news__read-more-link-wrapper">
                <a href="<?php echo esc_url(home_url()); ?>/news" class="read-more-link news__read-more-link">もっと見る
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-read-more-arrow.svg" alt="" class="read-more-link__arrow" width="10" height="17">
                </a>
            </div>

        </div>
    </div>
</section>