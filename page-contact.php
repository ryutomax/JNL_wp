        <?php get_template_part('template_header/header'); ?>

        <main class="l-main">

            <!-- ページTOPスライドのテンプレート呼び出し -->
            <?php get_template_part('template_parts/topSlider'); ?>

            <!-- パンくずリストのテンプレート呼び出し -->
            <?php get_template_part('template_parts/breadcrumb'); ?>

            <section class="p-contact c-frame">
                <div class="p-contact-inner">
                    <div class="p-content-ttl c-sec-ttl">
                        <h3>
                            <span class="js-wave">C</span>
                            <span class="js-wave">o</span>
                            <span class="js-wave">n</span>
                            <span class="js-wave">t</span>
                            <span class="js-wave">a</span>
                            <span class="js-wave">c</span>
                            <span class="js-wave">t</span>
                        </h3>
                        <p>お問い合わせ</p>
                    </div>
                    <div class="p-contact-desc"><p>レシピに興味を持って頂きありがとうございます。レシピやモリンガについて詳しく知りたい場合は下記のフォームよりお問い合わせください。</p></div>

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
