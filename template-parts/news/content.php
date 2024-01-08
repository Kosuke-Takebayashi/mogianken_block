<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'post', // 投稿記事
    'posts_per_page' => 10, // 10記事を表示
    'paged' => $paged,
);

// クエリの定義
$the_query = new WP_Query($args);

$array = ['the_query' => $the_query];
?>

<!-- 記事一覧 -->
<?php get_template_part('template-parts/news-page-articles', '', $array); ?>

<!-- ページネーション -->
<?php get_template_part('template-parts/pagination', '', $array); ?>