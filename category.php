<?php
/**
 * カテゴリー別の記事一覧ページ
 */
?>

<?php get_header(); ?>

<main class="main">

    <div class="sub-mv">
        <div class="sub-mv-inner">
            <div class="sub-mv-text">
                <h2 class="sub-mv-main-text">News</h2>
                <p class="sub-mv-sub-text">お知らせ</p>
            </div>
            <div class="sub-mv-content">
                <picture class="sub-mv__img">
                    <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-news-mv-sp.jpg">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-news.jpg" alt="ガラス張りの高層ビルが青い空を反射して映しています" width="1920" height="640">
                </picture>
            </div>
        </div>
    </div>

    <div class="main-content-inner container main-content-inner--news-page">

        <?php
        $cat = get_the_category();
        $catname = $cat[0]->cat_name;
        ?>

        <p class="category-title">カテゴリー「<?php echo esc_html($catname); ?>」の一覧</p>



        <!-- <div>

            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <article class="news-article">
                        <time class="news-article__time" datetime=""><?php the_time('Y/m/d'); ?></time>

                        <h3 class="news-article__title">
                            <a href="<?php the_permalink(); ?>" class="article-link">
                                <?php the_title(); ?>
                            </a>
                            <picture>
                                <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon-news-arrow-sp.svg" width="19" height="8">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-news-arrow.svg" alt="" class="news-article__icon" width="26" height="10">
                            </picture>
                        </h3>


                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div> -->

        <!-- 記事一覧を表示 -->
        <?php get_template_part('template-parts/front-page-articles'); ?>

    </div>

</main>

<?php get_footer(); ?>