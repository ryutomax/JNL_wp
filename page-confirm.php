<?php get_template_part('template_header/header'); ?>

<main class="l-main">

    <!-- ページTOPスライドのテンプレート呼び出し -->
    <?php get_template_part('template_parts/topSlider'); ?>

    <!-- パンくずリストのテンプレート呼び出し -->
    <?php get_template_part('template_parts/breadcrumb'); ?>

    <section class="p-contact">
        <div class="p-contact-inner">
            <div class="p-content-ttl c-sec-ttl">
                <h3>
                    <span class="js-wave">C</span>
                    <span class="js-wave">o</span>
                    <span class="js-wave">n</span>
                    <span class="js-wave">f</span>
                    <span class="js-wave">i</span>
                    <span class="js-wave">r</span>
                    <span class="js-wave">m</span>
                </h3>
                <p>確認画面</p>
            </div>
            <div class="p-contact-desc"><p>お問い合わせ内容をご確認ください</p></div>

            <div class="p-contact-cont">

                <?php
                    while ( have_posts() ) {
                        the_post();
                        the_content();
                    }
                ?>

            </div>
            <!-- /.p-content-wrap -->
        </div>
        <!-- /.p-content-inner -->
    </section>

    <!-- bannerのテンプレート呼び出し -->
    <?php get_template_part('template_parts/banner'); ?>
    
</main>

<?php get_template_part('template_footer/footer'); ?>
