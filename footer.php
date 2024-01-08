<footer class="footer">
    <div class="footer-inner">

    <?php if(!is_page('contact')): ?>
        <div class="footer-contact">
            <div class="footer-contact-inner">

                <div class="footer-contact-heading">
                    <p class="footer-contact-heading__title">Contact</p>
                    <p class="footer-contact-heading__sub-title">お問い合わせ</p>
                </div>

                <!-- お問い合わせボタン -->
                <a href="<?php echo esc_url(home_url()); ?>/contact" class="button footer-contact__button">お問い合わせはこちらから<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon-footer-contact.svg" alt="" width="26" height="26"></a>

            </div>
        </div>
    <?php endif; ?>

        <div class="footer-content">
            <div class="footer-content-inner">

                <!-- フッターロゴ -->
                <a href="<?php echo esc_url(home_url()); ?>" class="footer-logo"><img src="<?php my_wp_footerLogo(); ?>" alt="" width="" height=""></a>
                

                <!-- フッターメニュー -->
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'footer-nav',
                    'container' => false,
                )) ?>

            </div>

            <!-- コピーライト -->
            <p class="copyright-wrapper"><small class="copyright">©︎ 2022 Tech Corporate</small></p>

        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>