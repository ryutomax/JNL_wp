<?php get_template_part('template_header/header'); ?>

<main class="l-main">

    <!-- FV テンプレートの呼び出し -->
    <?php get_template_part('template_parts/FV'); ?>

    <!-- パンくずリストのテンプレート呼び出し -->
    <?php get_template_part('template_parts/breadcrumb'); ?>

    <section class="p-company c-frame">
        <div class="p-company-inner">

            <div class="p-company-cont">
                <div class="p-company-cont_inner">
                    <div class="p-company-name">
                        <div class="p-company-name__main">
                            <?php the_field( 'name' ); ?>
                        </div>
                        <div class="p-company-name__sub">
                            <?php the_field( 'name_eng' ); ?>
                        </div>
                    </div>
                    <!-- /.p-company-name -->
                    <ul class="p-company-list">
                        <li class="p-company-item">
                            <div class="p-company-item_ttl">【代表者】</div>
                            <p class="p-company-item_desc"><?php the_field( 'ceo' ); ?></p>
                        </li>
                        <!-- /.p-company-ceo -->
                        <li class="p-company-item">
                            <div class="p-company-item_ttl">【設立】</div>
                            <p class="p-company-item_desc"><?php the_field( 'establish' ); ?></p>
                        </li>
                        <!-- /.p-company-establish -->
                        <li class="p-company-item">
                            <div class="p-company-item_ttl">【所在地】</div>
                            <p class="p-company-item_desc"><?php the_field( 'adress' ); ?></p>
                        </li>
                        <!-- /.p-company-adress -->
                        <li class="p-company-item">
                            <div class="p-company-item_ttl">【事業内容】</div>
                            <p class="p-company-item_desc"><?php the_field( 'business' ); ?></p>
                        </li>
                        <!-- /.p-company-business -->
                    </ul>
                    <div class="p-company-map">
                        <?php the_field( 'map' ); ?>
                    </div>
                    <!-- /.p-company-map -->
                </div>
                <!-- /.p-company-cont_inner -->
            </div>
            <!-- /.p-company-cont -->
        </div>
        <!-- /.p-content-inner -->
    </section>

    <!-- bannerのテンプレート呼び出し -->
    <?php get_template_part('template_parts/banner'); ?>

    </main>

<?php get_template_part('template_footer/footer'); ?>