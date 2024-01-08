<?php
$page = get_post(get_the_ID());
$pageSlug = $page->post_name;

$pageTitle = '';
$pageSubTitle = '';
$mvImageName = '';
$mvImageNameSp = '';

switch ($pageSlug) {
    case 'about':
        $pageTitle = 'About us';
        $pageSubTitle = '私たちについて';
        $mvImageName = 'photo-aboutus-mv.jpg';
        $mvImageNameSp = 'photo-aboutus-mv-sp.jpg';
        break;

    case 'service':
        $pageTitle = 'Service';
        $pageSubTitle = '事業内容';
        $mvImageName = 'photo-service-mv.jpg';
        $mvImageNameSp = 'photo-service-mv-sp.jpg';
        break;

    case 'company':
        $pageTitle = 'Company';
        $pageSubTitle = '会社概要';
        $mvImageName = 'photo-company-mv.jpg';
        $mvImageNameSp = 'photo-company-mv-sp.jpg';
        break;

    case 'news':
        $pageTitle = 'News';
        $pageSubTitle = 'お知らせ';
        $mvImageName = 'photo-news.jpg';
        $mvImageNameSp = 'photo-news-mv-sp.jpg';
        break;

    case 'contact':
        $pageTitle = 'Contact';
        $pageSubTitle = 'お問い合わせ';
        $mvImageName = 'photo-contact.jpg';
        $mvImageNameSp = 'photo-contact-mv-sp.jpg';
        break;

    default:
        $pageTitle = 'ページタイトル';
        $pageSubTitle = 'サブタイトル';
        $mvImageName = 'photo-aboutus-mv.jpg';
        $mvImageNameSp = 'photo-aboutus-mv-sp.jpg';
        break;
}

?>

<div class="sub-mv">
    <div class="sub-mv-inner">
        <div class="sub-mv-text">
            <h2 class="sub-mv-main-text"><?php echo $pageTitle; ?></h2>
            <p class="sub-mv-sub-text"><?php echo $pageSubTitle; ?></p>
        </div>
        <div class="sub-mv-content">
            <picture class="sub-mv__img">
                <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/<?php echo $mvImageNameSp; ?>">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/<?php echo $mvImageName; ?>" alt="握手をしている男性2人の手" width="1920" height="640">
            </picture>
        </div>
    </div>
</div>