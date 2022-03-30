<?php get_template_part('template_header/header'); ?>

<main class="l-main">

    <!-- ページTOPスライドのテンプレート呼び出し -->
    <?php get_template_part('template_parts/topSlider'); ?>

    <!-- パンくずリストのテンプレート呼び出し -->
    <?php get_template_part('template_parts/breadcrumb'); ?>

    <section class="p-company c-frame">
        <div class="p-company-inner">
            <div class="p-company-ttl c-sec-ttl">
                <h3>
                    <span class="js-wave">C</span>
                    <span class="js-wave">o</span>
                    <span class="js-wave">m</span>
                    <span class="js-wave">p</span>
                    <span class="js-wave">a</span>
                    <span class="js-wave">n</span>
                    <span class="js-wave">y</span>
                </h3>
                <p>会社概要</p>
            </div>

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


    <!-- productsCtaのテンプレート呼び出し -->
    <?php get_template_part('template_parts/productsCta'); ?>

    <!-- bannerのテンプレート呼び出し -->
    <?php get_template_part('template_parts/banner'); ?>

    </main>

<?php get_template_part('template_footer/footer'); ?>