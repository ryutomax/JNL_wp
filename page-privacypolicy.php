<?php get_template_part('template_header/header'); ?>
<main class="l-main">
            <!-- ページTOPスライドのテンプレート呼び出し -->
            <?php get_template_part('template_parts/topSlider'); ?>

            <!-- パンくずリストのテンプレート呼び出し -->
            <?php get_template_part('template_parts/breadcrumb'); ?>

            <section class="p-privacy c-frame">
                <div class="p-privacy-inner">
                    <div class="p-privacy-ttl c-sec-ttl">
                        <h3>
                            <span class="js-wave">P</span>
                            <span class="js-wave">r</span>
                            <span class="js-wave">i</span>
                            <span class="js-wave">v</span>
                            <span class="js-wave">a</span>
                            <span class="js-wave">c</span>
                            <span class="js-wave">y</span>
                            <span class="js-wave u-ml__16">P</span>
                            <span class="js-wave">o</span>
                            <span class="js-wave">l</span>
                            <span class="js-wave">i</span>
                            <span class="js-wave">c</span>
                            <span class="js-wave">y</span>
                        </h3>
                        <p>プライバシーポリシー</p>
                    </div>
                    <div class="p-privacy-cont">
                        <?php the_content(); ?>
                    </div>
                    <!-- /.p-privacy-cont -->

                </div>
                <!-- /.p-privacy-inner -->
            </section>


</main>
<?php get_template_part('template_footer/footer'); ?>