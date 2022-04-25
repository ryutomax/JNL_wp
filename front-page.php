<?php get_template_part('template_header/header'); ?>

        <main class="l-main">
            <!-- FV テンプレートの呼び出し -->
            <?php get_template_part('template_parts/FV'); ?>

            <section class="p-news c-frame">
                <div class="p-news-inner">
                    <div class="p-news-ttl c-sec-ttl">
                        <h3>
                            <span class="js-wave">N</span>
                            <span class="js-wave">e</span>
                            <span class="js-wave">w</span>
                            <span class="js-wave">s</span>
                        </h3>
                        <p>お知らせ</p>
                    </div>
                    <!-- /.p-news-ttl -->
                    <div class="p-news-top">
                        <div class="p-news-top__txt" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="800">
                            <p>美味しい、ヘルシー<br>
                                モリンガパウダーの<br>
                                レシピをご紹介します</p>
                        </div>
                        <!-- /.p-news-top__txt -->
                        <div class="p-news-top__img" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="300">
                            <figure class="p-news-top__img-inner object-fit"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/newside_img.png') ?>" alt="Moringa powder"></figure>
                        </div>
                    </div>
                    <!-- /.p-news-top -->

                    <div class="p-news-cont" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                        <div class="p-news-cont__wrap">
                            <div class="p-news-cont__ttl">
                                <p>お知らせ</p>
                            </div>
                            <ul class="p-news-list">
                                <?php
                                    $paged = get_query_var('paged') ?: 1;  //先頭ページでは 0 が返ってくるので、強制的に 1 をセット
                                    $query_args = array(
                                        'orderby' => 'post_date',
                                        'post_status'=> 'publish, future',
                                        'post_type'=> 'news',
                                        'order'=>'DESC',
                                        'posts_per_page'=>5,
                                        'paged'=>$paged
                                    );
                                $the_query = new WP_Query($query_args);
                                if ( $the_query->have_posts() ) :
                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                ?>
                                <li class="p-news-item">
                                    <a class="p-news-item__inner" href="<?php the_permalink(); ?>">
                                        <time class="p-news-date" datetime="<?php the_time('y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                        <div class="p-news-txt">
                                            <div class="p-news-txt__exc">
                                                <p><?php the_title(); ?></p>
                                            </div>
                                            <div class="p-news-txt__link">
                                                <p>こちら→</p>
                                            </div>
                                        </div>
                                        <!-- /.p-news-txt -->
                                    </a>
                                </li>
                                <?php endwhile; ?>
                                <?php else: ?>
                                <p>記事がありません。</p>
                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>
                            </ul>

                            <div class="p-news-more">
                                <div class="p-news-btn c-ctaBtn">
                                    <a href="<?php echo esc_url(home_url('/news'));?>">もっと見る</a>
                                </div>
                            </div>
                            <!-- /.p-recipe-more -->
                        </div>
                        <!-- /.p-news-cont__wrap -->
                    </div>
                    <!-- /.p-news-cont -->
                </div>
                <!-- /.p-news-inner -->
            </section>

            <section class="p-recipe c-frame">
                <div class="p-recipe-inner">
                    <div class="p-recipe-ttl c-sec-ttl">
                        <h3>
                            <span class="js-wave">R</span>
                            <span class="js-wave">e</span>
                            <span class="js-wave">c</span>
                            <span class="js-wave">i</span>
                            <span class="js-wave">p</span>
                            <span class="js-wave">e</span>
                        </h3>
                        <p>レシピ</p>
                    </div>

                    <div class="p-recipe-wrap" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                        <ul class="p-recipe-tabs">
                            <li class="p-recipe-tab js-tab is-tab-select"><p>ご飯・麺</p></li>
                            <li class="p-recipe-tab js-tab"><p>メイン</p></li>
                            <li class="p-recipe-tab js-tab"><p>サイド</p></li>
                            <li class="p-recipe-tab js-tab"><p><span>ドリンク•</span><span>スープ</span></p></li>
                            <li class="p-recipe-tab js-tab"><p>スイーツ</p></li>
                        </ul>
                        <div class="p-recipe-cont">
                            <ul class="c-recipe-cont__list js-tab-cont">
                                <?php
                                    $paged = get_query_var('paged') ?: 1;  //先頭ページでは 0 が返ってくるので、強制的に 1 をセット
                                    $query_args = array(
                                        'orderby' => 'post_date',
                                        'post_status'=> 'publish, future',
                                        'post_type'=> 'recipe',
                                        'tag'=> 'staple',
                                        'order'=>'DESC',
                                        'posts_per_page'=>6,
                                        'paged'=>$paged
                                    );
                                $the_query = new WP_Query($query_args);
                                if ( $the_query->have_posts() ) :
                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                ?>
                                <!-- メニューリストのテンプレート呼び出し -->
                                <?php get_template_part('template_parts/recipeList'); ?>

                                <?php endwhile; ?>
                                <?php else: ?>
                                <p>レシピがありません。</p>
                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>


                                <div class="p-recipe-more">
                                    <div class="p-recipe-btn c-ctaBtn">
                                        <a href="<?php echo esc_url(home_url('/recipe'));?>">もっと見る</a>
                                    </div>
                                </div>
                                <!-- /.p-recipe-more -->
                            </ul>
                            <ul class="c-recipe-cont__list js-tab-cont">
                                <?php
                                    $paged = get_query_var('paged') ?: 1;  //先頭ページでは 0 が返ってくるので、強制的に 1 をセット
                                    $query_args = array(
                                        'orderby' => 'post_date',
                                        'post_status'=> 'publish, future',
                                        'post_type'=> 'recipe',
                                        'tag'=> 'main',
                                        'order'=>'DESC',
                                        'posts_per_page'=>6,
                                        'paged'=>$paged
                                    );
                                $the_query = new WP_Query($query_args);
                                if ( $the_query->have_posts() ) :
                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                ?>
                                <!-- メニューリストのテンプレート呼び出し -->
                                <?php get_template_part('template_parts/recipeList'); ?>

                                <?php endwhile; ?>
                                <?php else: ?>
                                <p>レシピがありません。</p>
                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>

                                <div class="p-recipe-more">
                                    <div class="p-recipe-btn c-ctaBtn">
                                        <a href="<?php echo esc_url(home_url('/recipe'));?>">もっと見る</a>
                                    </div>
                                </div>
                                <!-- /.p-recipe-more -->
                            </ul>
                            <ul class="c-recipe-cont__list js-tab-cont">
                                <?php
                                    $paged = get_query_var('paged') ?: 1;  //先頭ページでは 0 が返ってくるので、強制的に 1 をセット
                                    $query_args = array(
                                        'orderby' => 'post_date',
                                        'post_status'=> 'publish, future',
                                        'post_type'=> 'recipe',
                                        'tag'=> 'side',
                                        'order'=>'DESC',
                                        'posts_per_page'=>6,
                                        'paged'=>$paged
                                    );
                                $the_query = new WP_Query($query_args);
                                if ( $the_query->have_posts() ) :
                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                ?>
                                <!-- メニューリストのテンプレート呼び出し -->
                                <?php get_template_part('template_parts/recipeList'); ?>

                                <?php endwhile; ?>
                                <?php else: ?>
                                <p>レシピがありません。</p>
                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>

                                <div class="p-recipe-more">
                                    <div class="p-recipe-btn c-ctaBtn">
                                        <a href="<?php echo esc_url(home_url('/recipe'));?>">もっと見る</a>
                                    </div>
                                </div>
                                <!-- /.p-recipe-more -->
                            </ul>
                            <ul class="c-recipe-cont__list js-tab-cont">
                                <?php
                                    $paged = get_query_var('paged') ?: 1;  //先頭ページでは 0 が返ってくるので、強制的に 1 をセット
                                    $query_args = array(
                                        'orderby' => 'post_date',
                                        'post_status'=> 'publish, future',
                                        'post_type'=> 'recipe',
                                        'tag'=> 'drink-soup',
                                        'order'=>'DESC',
                                        'posts_per_page'=>6,
                                        'paged'=>$paged
                                    );
                                $the_query = new WP_Query($query_args);
                                if ( $the_query->have_posts() ) :
                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                ?>
                                <!-- メニューリストのテンプレート呼び出し -->
                                <?php get_template_part('template_parts/recipeList'); ?>

                                <?php endwhile; ?>
                                <?php else: ?>
                                <p>レシピがありません。</p>
                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>

                                <div class="p-recipe-more">
                                    <div class="p-recipe-btn c-ctaBtn">
                                        <a href="<?php echo esc_url(home_url('/recipe'));?>">もっと見る</a>
                                    </div>
                                </div>
                                <!-- /.p-recipe-more -->
                            </ul>
                            <ul class="c-recipe-cont__list js-tab-cont">
                                <?php
                                    $paged = get_query_var('paged') ?: 1;  //先頭ページでは 0 が返ってくるので、強制的に 1 をセット
                                    $query_args = array(
                                        'orderby' => 'post_date',
                                        'post_status'=> 'publish, future',
                                        'post_type'=> 'recipe',
                                        'tag'=> 'sweets',
                                        'order'=>'DESC',
                                        'posts_per_page'=>6,
                                        'paged'=>$paged
                                    );
                                $the_query = new WP_Query($query_args);
                                if ( $the_query->have_posts() ) :
                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                ?>
                                <!-- メニューリストのテンプレート呼び出し -->
                                <?php get_template_part('template_parts/recipeList'); ?>

                                <?php endwhile; ?>
                                <?php else: ?>
                                <p>レシピがありません。</p>
                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>

                                <div class="p-recipe-more">
                                    <div class="p-recipe-btn c-ctaBtn">
                                        <a href="<?php echo esc_url(home_url('/recipe'));?>">もっと見る</a>
                                    </div>
                                </div>
                                <!-- /.p-recipe-more -->
                            </ul>

                        </div>
                        <!-- /.c-recipe-cont -->
                    </div>
                </div>
                <!-- /.c-recipe-inner -->
            </section>

            <section class="p-person c-frame">
                <div class="p-person-inner">
                    <div class="p-person-ttl c-sec-ttl">
                        <h3>
                            <span class="js-wave">P</span>
                            <span class="js-wave">e</span>
                            <span class="js-wave">r</span>
                            <span class="js-wave">s</span>
                            <span class="js-wave">o</span>
                            <span class="js-wave">n</span>
                        </h3>
                        <p>レシピ考案者</p>
                    </div>
                    <!-- /.p-person-ttl -->
                    <div class="p-person-cont">

                        <div class="p-person-img">
                            <figure class="p-person-img__inner js-img-bg object-fit">
                            <?php if ( get_field('prf_img',1211) ) : ?>
                                <img src="<?php the_field('prf_img',1211);?>" alt="レシピ考案者">
                            <?php endif ?>
                            </figure>
                        </div>

                        <ul class="p-person-infoList">
                            <li class="p-person-infoItem">
                                <p class="p-person-name">廣瀬　友子</p>
                            </li>
                            <!-- /.p-person-name -->
                            <li class="p-person-infoItem">
                                <div class="p-person-licenceTtl">
                                    <p>＜所持資格＞</p>
                                </div>
                                <ul class="p-person-licenceList">
                                    <li class="p-person-licenceItem">調理師・</li>
                                    <li class="p-person-licenceItem">東京都ふぐ調理師・</li>
                                    <li class="p-person-licenceItem">JSA認定ソムリエ・</li>
                                    <li class="p-person-licenceItem">酒Diproma・</li>
                                    <li class="p-person-licenceItem">WSET.level3・</li>
                                    <li class="p-person-licenceItem">魚検定1級・</li>
                                    <li class="p-person-licenceItem">薬膳アドバイザー</li>
                                </ul>
                            </li>
                            <!-- /.p-person-licence -->
                            <li class="p-person-infoItem">
                                <div class="p-person-prfTtl">
                                    <p>＜プロフィール＞</p>
                                </div>
                                <!-- /.p-person-prfTtl -->
                                <div class="p-person-prfTxt">
                                    <p>調理師学校卒業後、宮古島の琉球料理店を皮切りに
                                        <br>北海道ではラーメン作りを経て、都内料亭・割烹・寿司店・和食店・フレンチ・ワインバル等で研鑽を積み、銀座「奏」の料理長に就任。
                                        <br>その後、一部上場企業のメニュー開発、新規事業開発に携わる。
                                        <br>現在は惣菜店経営、飲食店の開業を準備中。
                                    </p>
                                </div>
                                <!-- /.p-person-prfTxt -->
                            </li>
                            <!-- /.p-person-prf -->
                        </ul>
                    </div>
                    <!-- /.p-person-cont -->
                </div>
                <!-- /.p-person-inner -->
            </section>

            <!-- productsCtaのテンプレート呼び出し -->
            <?php get_template_part('template_parts/productsCta'); ?>

            <!-- bannerのテンプレート呼び出し -->
            <?php get_template_part('template_parts/banner'); ?>

        </main>

<?php get_template_part('template_footer/footer'); ?>