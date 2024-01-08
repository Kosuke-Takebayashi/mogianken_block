<?php extract($args); ?>

<div>
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <article class="news-article">

                <!-- 公開日付 -->
                <time class="news-article__time" datetime=""><?php the_time('Y/m/d'); ?></time>

                <!-- 記事タイトル -->
                <h3 class="news-article__title">
                    <a href="<?php the_permalink(); ?>" class="article-link">
                        <?php the_title(); ?>
                    </a>
                    <picture class="news-article__img">
                        <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon-news-arrow-sp.svg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-news-arrow.svg" alt="" class="news-article__icon" width="26" height="20">
                    </picture>
                </h3>

            </article>
        <?php endwhile ?>
    <?php endif ?>
    <?php wp_reset_postdata(); ?>
</div>