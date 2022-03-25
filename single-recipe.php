<?php get_template_part('template_header/header'); ?>

        <main class="l-main">
            <section class="p-swiper">
                <div class="p-swiper-inner swiper-container">
                    <ul class="p-swiper-container swiper-wrapper">

                        <?php
                            $query_args = array(
                                'orderby' => 'post_date',
                                'post_status'=> 'publish',
                                'post_type'=> 'recipe',
                                'order'=>'DESC',
                                'posts_per_page'=>3,
                            );
                        $the_query = new WP_Query($query_args);
                        if ( $the_query->have_posts() ) :
                            while ( $the_query->have_posts() ) : $the_query->the_post();
                        ?>

                        <li class="p-swiper-item swiper-slide">
                            <figure class="p-swiper-img js-img-bg object-fit" data-aos="zoom-out" data-aos-duration="1500" data-aos-delay="0">
                                <?php if ( has_post_thumbnail() ): ?><!-- if文による条件分岐 アイキャッチが有る時-->
                                <?php the_post_thumbnail( 'thumbnail' ); ?>
                                <?php else: ?><!-- アイキャッチが無い時-->
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/moringa.jpg');?>" alt="アイキャッチがない時の画像です。" />
                                <?php endif; ?>
                                <div class="p-swiper-img__meta">
                                    <span class="p-swiper-img__tag" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="1000">モリンガパウダーで</span>
                                    <span class="p-swiper-img__ttl" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="1500"><?php the_title(); ?></span>
                                </div>
                            </figure>
                        </li>

                        <?php endwhile; ?>
                        <?php else: ?>
                            <p>記事がありません。</p>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </ul>
                </div>
            </section>
            <div class="p-content__breadcrumb c-breadcrumb">
                <div class="c-breadcrumb-inner">
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php
                            if(function_exists('bcn_display')){
                                bcn_display();
                            }
                        ?>
                    </div>
                </div>
            </div>

            <!-- タグ・カテゴリメニュー呼び出し -->
            <?php get_template_part('template_parts/mainMenu'); ?>

            <section class="p-intro">
                <div class="p-intro-inner">
                    <div class="p-intro-img">
                        <figure class="p-intro-img__inner js-img-bg object-fit ">
                            <?php if ( has_post_thumbnail() ): ?><!-- if文による条件分岐 アイキャッチが有る時-->
                            <?php the_post_thumbnail( 'thumbnail' ); ?>
                            <?php else: ?><!-- アイキャッチが無い時-->
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/moringa.jpg');?>" alt="アイキャッチがない時の画像です。" />
                            <?php endif; ?>
                        </figure>
                    </div>
                    <!-- /.p-intro-img -->
                    <div class="p-intro-cont">
                        <!-- SNS共有ボタン設置 -->
                        <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>

                        <div class="p-intro-tag">
                            <p>
                                <?php
                                    $category = get_the_category();
                                    echo $category[0]->name;
                                ?>
                            </p>
                        </div>
                        <div class="p-intro-ttl">
                            <h3 class="p-intro-ttl__sub"><?php the_field('sub_ttl'); ?></h3>
                            <h2 class="p-intro-ttl__main" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="100"><?php the_title(); ?></h2>
                        </div>
                        <div class="p-intro-cont__inner" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                            <p><?php the_field('point'); ?></p>
                        </div>
                        <!-- /.p-intro-inner -->
                    </div>
                    <!-- /.p-intro-cont -->
                </div>
                <!-- /.p-intro-inner -->

            </section>
            <section class="p-detail c-frame">
                <div class="p-detail-inner">
                    <div class="p-content-ttl c-sec-ttl">
                        <h3>
                            <span class="js-wave">R</span>
                            <span class="js-wave">e</span>
                            <span class="js-wave">c</span>
                            <span class="js-wave">i</span>
                            <span class="js-wave">p</span>
                            <span class="js-wave">e</span>
                            <span class="js-wave u-ml__16">M</span>
                            <span class="js-wave">o</span>
                            <span class="js-wave">v</span>
                            <span class="js-wave">i</span>
                            <span class="js-wave">e</span>
                        </h3>
                        <p>レシピ動画</p>
                    </div>
                    <?php
                        $movie = esc_url(get_field('movie'));
                        if( !empty($movie) ):
                    ?>
                        <video src="<?php echo $movie; ?>" controls muted autobuffer autoloop loop playsinline></video>
                    <?php endif; ?>

                    <div class="p-detail-table" id="tableTtl" data-aos="zoom-in" data-aos-duration="2000">
                        <h4><?php the_field('tableTtl_mate'); ?></h4>
                        <!-- テーブルのデータを取得 -->
                        <?php
                        $table = get_field( 'table_mate' );
                        if ( ! empty ( $table ) ) {
                            echo '<table>';
                                if ( ! empty( $table['caption'] ) ) {
                                    echo '<caption>' . $table['caption'] . '</caption>';
                                }
                                if ( ! empty( $table['header'] ) ) {
                                    echo '<thead>';
                                        echo '<tr>';
                                            foreach ( $table['header'] as $th ) {
                                                echo '<th>';
                                                    echo $th['c'];
                                                echo '</th>';
                                            }
                                        echo '</tr>';
                                    echo '</thead>';
                                }
                                echo '<tbody>';
                                    foreach ( $table['body'] as $tr ) {
                                        echo '<tr>';
                                            foreach ( $tr as $td ) {
                                                echo '<td>';
                                                    echo $td['c'];
                                                echo '</td>';
                                            }
                                        echo '</tr>';
                                    }
                                echo '</tbody>';
                            echo '</table>';
                        }
                        ?>
                        </div>
                        <!-- /.p-detail-table -->
                        <div class="p-detail-table" id="tableTtl2" data-aos="zoom-in" data-aos-duration="2000">
                            <h4>作り方</h4>
                            <!-- テーブルのデータを取得 -->
                            <?php
                            $table = get_field( 'table_way' );
                            if ( ! empty ( $table ) ) {
                                echo '<table>';
                                    if ( ! empty( $table['caption'] ) ) {
                                        echo '<caption>' . $table['caption'] . '</caption>';
                                    }
                                    if ( ! empty( $table['header'] ) ) {
                                        echo '<thead>';
                                            echo '<tr>';
                                                foreach ( $table['header'] as $th ) {
                                                    echo '<th>';
                                                        echo $th['c'];
                                                    echo '</th>';
                                                }
                                            echo '</tr>';
                                        echo '</thead>';
                                    }
                                    echo '<tbody>';
                                        foreach ( $table['body'] as $tr ) {
                                            echo '<tr>';
                                                foreach ( $tr as $td ) {
                                                    echo '<td class="p-detail-table_explain">';
                                                        echo $td['c'];
                                                    echo '</td>';
                                                }
                                            echo '</tr>';
                                        }
                                    echo '</tbody>';
                                echo '</table>';
                            }
                            ?>
                        </div>
                        <!-- /.p-detail-table -->
                        <div class="p-detail-review" data-aos="zoom-in" data-aos-duration="2000">
                            <h4>レビュー</h4>
                            <?php the_content(); ?>
                        </div>
                        <!-- /.p-detail-explain -->


                </div>
                <!-- /.p-detail-inner -->
            </section>

<?php get_template_part('template_footer/footer-cta_products'); ?>