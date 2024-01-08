<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <article class="news-article">
            <time class="news-article__time" datetime=""><?php the_time('Y/m/d'); ?></time>

            <h3 class="news-article__title">
                <a href="<?php the_permalink(); ?>" class="article-link">
                    <?php the_title(); ?>
                </a>
                <picture class="news-article__img">
                    <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon-news-arrow-sp.svg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-news-arrow.svg" alt="" class="news-article__icon" width="26" height="10">
                </picture>
            </h3>
        </article>
    <?php endwhile; ?>
<?php else : ?>
    <article class="news-article">
        <?php echo "記事がありません" ?>
    </article>
<?php endif; ?>