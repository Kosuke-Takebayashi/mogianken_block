<?php

// テーマのセットアップ
function my_theme_set_up()
{
	add_theme_support('post-thumbnails'); // アイキャッチ画像を有効
	add_theme_support('title-tag'); // titleタグを自動出力
	register_nav_menu('main-menu', 'header navigation'); // カスタムメニューを作成
	register_nav_menu('main-menu-sp', 'header navigation sp');
	register_nav_menu('footer-menu', 'footer navigation'); 
	$defaults = array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
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

function my_customize( $wp_customize ) {

	$wp_customize->add_panel(
		'my_footer-logo-panel',
		array(
			'title'    => 'フッター',
			'priority' => 1,
		)
	);
	
	$wp_customize->add_section(
		'my_footer-logo-section',
		array(
			'title'    => 'ロゴ',
			'panel'    => 'my_footer-logo-panel',
			'priority' => 1,
		)
	);
	
	$wp_customize->add_setting( 'my_footer-logo-setting' );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'my_control',
			array(
				'label'    => 'フッターロゴ',
				'section'  => 'my_footer-logo-section',
				'settings' => 'my_footer-logo-setting',
				'priority' => 1,
			)
		)
	);
}
add_action( 'customize_register', 'my_customize' );

function my_wp_footerLogo() {
	if ( get_theme_mod( 'my_footer-logo-setting' ) ) {
		echo get_theme_mod('my_footer-logo-setting');
	}
}

