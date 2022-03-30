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
                            <span class="js-wave">T</span>
                            <span class="js-wave">h</span>
                            <span class="js-wave">a</span>
                            <span class="js-wave">n</span>
                            <span class="js-wave">k</span>
                            <span class="js-wave">s</span>
                        </h3>
                        <p>送信完了</p>
                    </div>
                    <div class="p-contact-thanks"><p>お問い合わせありがとうございました。<br>2-3営業日以内にご返信します。</p></div>
                    <div class="p-contact-back"><a href="<?php echo esc_url(home_url('/')); ?>">ホームへ戻る</a></div>
                </div>
                <!-- /.p-content-inner -->
            </section>

            <!-- bannerのテンプレート呼び出し -->
            <?php get_template_part('template_parts/banner'); ?>

        </main>

<?php get_template_part('template_footer/footer'); ?>
