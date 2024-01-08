<?php 
/**
 * 記事詳細ページ
 */
?>

<?php get_header(); ?>

<main class="main news-detail">

    <div class="sub-mv">
        <div class="sub-mv-inner">
            <div class="sub-mv-text">
                <h2 class="sub-mv-main-text">News</h2>
                <p class="sub-mv-sub-text">お知らせ</p>
            </div>
        </div>
    </div>

    <div class="main-content-inner container main-content-inner--post-detail-page">

        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <div class="post-detail__heading">
                    <p class="post-date news-detail__post-date"><?php the_time('Y/m/d'); ?></p>

                    <h1 class="post-title news-detail__post-title"><?php the_title(); ?></h1>

                    <p><a class="post-category"><?php echo get_the_category()[0]->cat_name; ?></a></p>
                </div>

                <div class="post-thumbnail">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    } else {
                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/photo-post-detail-mv.png" alt="" width="1080" height="480">';
                    }  ?>
                </div>

                <div class="news-detail__content">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>


    </div>

</main>

<?php get_footer(); ?>