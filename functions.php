<?php

// テーマのセットアップ
function my_theme_set_up()
{
	add_theme_support('post-thumbnails'); // アイキャッチ画像を有効
	add_theme_support('title-tag'); // titleタグを自動出力
	register_nav_menu('main-menu', 'メインメニュー'); // カスタムメニューを作成
}
add_action('after_setup_theme', 'my_theme_set_up');

// CSS、JavaScriptの読み込み
function my_add_files()
{
	/*----------------------------------------------------------------
	 * CSS
	-----------------------------------------------------------------*/
	wp_enqueue_style('reset-style', get_template_directory_uri() . '/assets/css/reset.css');

	// セクション共通
	wp_enqueue_style('section-style', get_template_directory_uri() . '/assets/css/section.css', 'reset-style');

	// header
	wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/css/header.css');

	// footer
	wp_enqueue_style('footer-style', get_template_directory_uri() . '/assets/css/footer.css');

	// トップ
	if (is_home() || is_front_page()) {
		wp_enqueue_style('top-style', get_template_directory_uri() . '/assets/css/top.css', 'common-style');
	};

	// 下層ページ共通
	if (!is_home() && !is_front_page()) {
		wp_enqueue_style('sub-main-visual-style', get_template_directory_uri() . '/assets/css/sub-main-visual.css', 'common-style');
	};

	// Company
	if (is_page("company")) {
		wp_enqueue_style('company-style', get_template_directory_uri() . "/assets/css/company.css", 'common-style');
	}

	// About us
	if (is_page("about")) {
		wp_enqueue_style('about-us-style', get_template_directory_uri() . "/assets/css/about.css", 'common-style');
	}

	// Contact 
	if (is_page("contact")) {
		wp_enqueue_style('contact-style', get_template_directory_uri() . "/assets/css/contact.css", 'common-style');
	}

	// News一覧
	if (is_page("news") || is_home() || is_front_page() || is_archive()) {
		wp_enqueue_style('news-style', get_template_directory_uri() . "/assets/css/news.css", 'common-style');
	}

	// News詳細
	if (is_single()) {
		wp_enqueue_style('news-detail-style', get_template_directory_uri() . "/assets/css/news-detail.css", 'common-style');
	}

	// 404
	if (is_404()) {
		wp_enqueue_style('not-found-style', get_template_directory_uri() . "/assets/css/404.css", 'common-style');
	}

	/*----------------------------------------------------------------
     * JavaScript
    -----------------------------------------------------------------*/
	wp_enqueue_script('common-script', get_template_directory_uri() . '/assets/js/common.js');
	
}
add_action('wp_enqueue_scripts', 'my_add_files');

