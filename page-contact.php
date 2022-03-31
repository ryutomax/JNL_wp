        <?php get_template_part('template_header/header'); ?>

        <main class="l-main">
            <!-- FV テンプレートの呼び出し -->
            <?php get_template_part('template_parts/FV'); ?>

            <!-- パンくずリストのテンプレート呼び出し -->
            <?php get_template_part('template_parts/breadcrumb'); ?>

            <section class="p-contact c-frame">
                <div class="p-contact-inner">
                    <div class="p-contact-desc"><p>レシピに興味を持って頂きありがとうございます。レシピやモリンガについて詳しく知りたい場合は下記のフォームよりお問い合わせください。</p></div>

                    <div class="p-contact-cont">

                        <?php the_content(); ?>

                    </div>
                    <!-- /.p-content-wrap -->
                </div>
                <!-- /.p-content-inner -->
            </section>

            <!-- bannerのテンプレート呼び出し -->
            <?php get_template_part('template_parts/banner'); ?>
        </main>

        <?php get_template_part('template_footer/footer'); ?>
