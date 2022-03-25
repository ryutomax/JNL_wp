<?php get_template_part('template_header/header'); ?>

        <main class="l-main">
            <section class="p-fv"  style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/img/moringa.jpg'); ?>)">
                <div class="p-fv-inner" data-aos="zoom-out" data-aos-duration="3000" data-aos-delay="1000">
                    <h2 class="p-fv-copy">
                        <p>Moringa</p>
                        <p>Recipe</p>
                    </h2>
                </div>
                <!-- /.p-fv-inner -->
            </section>

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
                            <figure class="p-news-top__img-inner object-fit"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/moringa-powder.png') ?>" alt="Moringa powder"></figure>
                        </div>
                    </div>
                    <!-- /.p-news-top -->

                    <div class="p-news-cont" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                        <div class="p-news-cont__wrap">
                            <div class="p-news-cont__ttl">
                                <p>お知らせ</p>
                            </div>
                            <ul class="p-news-list">
                                <li class="p-news-item">
                                    <a class="p-news-item__inner" href="">
                                        <time class="p-news-date" datetime="">2022.2.2</time>
                                        <div class="p-news-txt">
                                            <div class="p-news-txt__exc">
                                                <p>モリンガパンケーキのレシピを
                                                    アップしました</p>
                                            </div>
                                            <div class="p-news-txt__link">
                                                <p>こちら→</p>
                                            </div>
                                        </div>
                                        <!-- /.p-news-txt -->
                                    </a>
                                </li>
                                <li class="p-news-item">
                                    <a class="p-news-item__inner" href="">
                                        <time class="p-news-date" datetime="">2022.2.2</time>
                                        <div class="p-news-txt">
                                            <div class="p-news-txt__exc">
                                                <p>モリンガパンケーキのレシピを
                                                    アップしました</p>
                                            </div>
                                            <div class="p-news-txt__link">
                                                <p>こちら→</p>
                                            </div>
                                        </div>
                                        <!-- /.p-news-txt -->
                                    </a>
                                </li>
                                <li class="p-news-item">
                                    <a class="p-news-item__inner" href="">
                                        <time class="p-news-date" datetime="">2022.2.2</time>
                                        <div class="p-news-txt">
                                            <div class="p-news-txt__exc">
                                                <p>モリンガパンケーキのレシピを
                                                    アップしました</p>
                                            </div>
                                            <div class="p-news-txt__link">
                                                <p>こちら→</p>
                                            </div>
                                        </div>
                                        <!-- /.p-news-txt -->
                                    </a>
                                </li>
                                <li class="p-news-item">
                                    <a class="p-news-item__inner" href="">
                                        <time class="p-news-date" datetime="">2022.2.2</time>
                                        <div class="p-news-txt">
                                            <div class="p-news-txt__exc">
                                                <p>モリンガパンケーキのレシピを
                                                    アップしました</p>
                                            </div>
                                            <div class="p-news-txt__link">
                                                <p>こちら→</p>
                                            </div>
                                        </div>
                                        <!-- /.p-news-txt -->
                                    </a>
                                </li>
                            </ul>
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

            <!-- prodactsCtaのテンプレート呼び出し -->
            <?php get_template_part('template_parts/prodactsCta'); ?>

        </main>

<?php get_template_part('template_footer/footer'); ?>