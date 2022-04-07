<?php get_template_part('template_header/header'); ?>

        <main class="l-main">

            <!-- FV テンプレートの呼び出し -->
            <?php get_template_part('template_parts/FV'); ?>

            <!-- パンくずリストのテンプレート呼び出し -->
            <?php get_template_part('template_parts/breadcrumb'); ?>

            <section class="p-contact">
                <div class="p-contact-inner">
                    <div class="p-contact-thanks"><p>お問い合わせありがとうございました。<br>2-3営業日以内にご返信します。</p></div>
                    <div class="p-contact-back"><a href="<?php echo esc_url(home_url('/')); ?>">ホームへ戻る</a></div>
                </div>
                <!-- /.p-content-inner -->
            </section>

            <!-- bannerのテンプレート呼び出し -->
            <?php get_template_part('template_parts/banner'); ?>

        </main>

<?php get_template_part('template_footer/footer'); ?>
