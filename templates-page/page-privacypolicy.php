<?php get_template_part('./template_header/header'); ?>
    <main class="l-main">

        <!-- FV テンプレートの呼び出し -->
        <?php get_template_part('./template_parts/FV'); ?>

        <!-- パンくずリストのテンプレート呼び出し -->
        <?php get_template_part('./template_parts/breadcrumb'); ?>

        <section class="p-privacy c-frame">
            <div class="p-privacy-inner">
                <div class="p-privacy-cont">
                    <?php the_content(); ?>
                </div>
                <!-- /.p-privacy-cont -->
            </div>
            <!-- /.p-privacy-inner -->
        </section>
        <!-- bannerのテンプレート呼び出し -->
        <?php get_template_part('./template_parts/banner'); ?>

    </main>
<?php get_template_part('./template_footer/footer'); ?>