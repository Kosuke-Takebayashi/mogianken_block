<!-- 会社プロフィール -->
<?php get_template_part('template-parts/company-profile'); ?>

<!-- Googleマップ -->
<div class="map-wrapper">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10199.835577215172!2d139.76186966503437!3d35.681081895140956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1699783859604!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<!-- Message -->
<section class="message section">

    <div class="section-title">
        <h3 class="section-title__text">Message</h3>
        <span class="section-title__sub-text">社長挨拶</span>
    </div>

    <div class="section-content">
        <div class="section-content-inner">

            <div class="section-content-description">
                <h4 class="section-content-description__title">テキストテキスト</h4>
                <p class="section-content-description__text">
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキスト</p>
                <p class="section-content-description__text">
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                <p class="section-content-description__text">
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>

            </div>

            <figure class="section-content-figure section-content-figure--reverse">
                <picture class="section-content-figure__img">
                    <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-message-sp.jpg">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-message.jpg" alt="" width="444" height="444">
                </picture>
            </figure>

        </div>
    </div>

</section>