<?php get_template_part('template_header/header'); ?>

        <main class="l-main">

            <!-- ページTOPスライドのテンプレート呼び出し -->
            <?php get_template_part('template_parts/topSlider'); ?>

            <!-- パンくずリストのテンプレート呼び出し -->
            <?php get_template_part('template_parts/breadcrumb'); ?>

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
                            <h3 class="p-intro-ttl__sub"><?php echo nl2br(esc_html(get_field('sub_ttl'))); ?></h3>
                            <h2 class="p-intro-ttl__main" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="100"><?php the_title(); ?></h2>
                        </div>
                        <div class="p-intro-cont__inner" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                            <p><?php echo nl2br(esc_html(get_field('point'))); ?></p>
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
                        <h4><?php echo esc_html(get_field('tableTtl_mate')); ?></h4>
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
                                                    echo nl2br( $th['c']);
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
                                                    echo nl2br($td['c']);
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

                    <!-- prevNextのテンプレートの呼び出し -->
                    <?php get_template_part('template_parts/prevNext'); ?>

                </div>
                <!-- /.p-detail-inner -->
            </section>

            <!-- prodactsCtaのテンプレート呼び出し -->
            <?php get_template_part('template_parts/prodactsCta'); ?>

        </main>

<?php get_template_part('template_footer/footer'); ?>