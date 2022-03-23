<?php get_header(); ?>

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
                        'posts_per_page'=>6,
                        'paged'=>$page
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

    <div class="c-breadcrumb">
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
    
    <section class="p-menu">
        <div class="p-menu-inner">
            <ul class="p-menu-btns">
                <li class="p-menu-btn" data-aos="flip-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" data-aos-delay="300">
                    <a href="<?php
                                $tag = get_term_by('name', 'ご飯・麺', 'post_tag');
                                $tag_id = $tag->term_id;
                                echo esc_url(get_tag_link($tag_id));
                            ?>" ontouchstart="">
                            Staple<span>ご飯・麺</span>
                    </a>
                </li>
                <li class="p-menu-btn" data-aos="flip-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" data-aos-delay="400">
                    <a href="<?php
                                $tag = get_term_by('name', 'メイン', 'post_tag');
                                $tag_id = $tag->term_id;
                                echo esc_url(get_tag_link($tag_id));
                            ?>" ontouchstart="">
                            Main<span>メイン</span>
                    </a>
                </li>
                <li class="p-menu-btn" data-aos="flip-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" data-aos-delay="500">
                    <a href="<?php
                                $tag = get_term_by('name', 'サイド', 'post_tag');
                                $tag_id = $tag->term_id;
                                echo esc_url(get_tag_link($tag_id));
                            ?>" ontouchstart="">Side<span>サイド</span>
                    </a>
                </li>
                <li class="p-menu-btn p-menu-btn__drink" data-aos-anchor-placement="top-bottom" data-aos="flip-up" data-aos-duration="2000" data-aos-delay="600">
                    <a href="<?php
                                $tag = get_term_by('name', 'ドリンク・スープ', 'post_tag');
                                $tag_id = $tag->term_id;
                                echo esc_url(get_tag_link($tag_id));
                            ?>" ontouchstart="">
                        <span>Drink<br> Soup</span>
                        <span>ドリンク・<br>スープ</span>
                    </a>
                </li>
                <li class="p-menu-btn" data-aos-anchor-placement="top-bottom" data-aos="flip-up" data-aos-duration="2000" data-aos-delay="700">
                    <a href="<?php
                                $tag = get_term_by('name', 'スイーツ', 'post_tag');
                                $tag_id = $tag->term_id;
                                echo esc_url(get_tag_link($tag_id));
                            ?>" ontouchstart="">Sweets<span>スイーツ</span>
                    </a>
                </li>
                <li class="p-menu-btn" data-aos-anchor-placement="top-bottom" data-aos="flip-up" data-aos-duration="2000" data-aos-delay="800"><a href="<?php echo esc_url( get_category_link( get_cat_ID( '和風メニュー' ) ) ); ?>" ontouchstart="">Style<span>和風メニュー</span></a></li>
                <li class="p-menu-btn" data-aos-anchor-placement="top-bottom" data-aos="flip-up" data-aos-duration="2000" data-aos-delay="900"><a href="<?php echo esc_url( get_category_link( get_cat_ID( '洋風メニュー' ) ) ); ?>" ontouchstart="">Style<span>洋風メニュー</span></a></li>
                <li class="p-menu-btn" data-aos-anchor-placement="top-bottom" data-aos="flip-up" data-aos-duration="2000" data-aos-delay="1000"><a href="<?php echo esc_url( get_category_link( get_cat_ID( '中華風メニュー' ) ) ); ?>" ontouchstart="">Style<span>中華メニュー</span></a></li>
            </ul>
        </div>
        <!-- /.p-menu-inner -->
    </section>

    <section class="p-content c-frame">
        <div class="p-content-inner">
            <div class="p-content-ttl c-sec-ttl">
                <h3>
                    <span class="js-wave">R</span>
                    <span class="js-wave">e</span>
                    <span class="js-wave">c</span>
                    <span class="js-wave">i</span>
                    <span class="js-wave">p</span>
                    <span class="js-wave">e</span>
                    <span class="js-wave u-ml__16">L</span>
                    <span class="js-wave">i</span>
                    <span class="js-wave">s</span>
                    <span class="js-wave">t</span>
                </h3>
                <p><?php single_term_title( '', true ); ?></p>
            </div>

            <div class="p-content-wrap">
                <ul class="p-content-list">
                    <?php
                        $paged = get_query_var('paged') ?: 1;  //先頭ページでは 0 が返ってくるので、強制的に 1 をセット

                        $term = get_queried_object();
                        $term_sug = $term->slug;            //ターム(カテゴリ・タグ)のスラッグを格納

                        $query_args = array(

                                'orderby' => 'post_date',   //日付順に並び替え
                                'order'=>'DESC',            //上記パラメータについて昇順か降順かを指定
                                'post_status'=> 'publish',  //公開された投稿もしくは固定ページ
                                'post_type'=> 'recipe',
                                'tag'  => $term_sug ,
                                'posts_per_page'=>10,
                                'paged'=>$paged

                            );
                        $the_query = new WP_Query($query_args);
                        if ( $the_query->have_posts() ) :
                            while ( $the_query->have_posts() ) : $the_query->the_post();

                    ?>

                    <li class="p-content-item c-recipe-cont__item" ontouchstart="">
                        <!-- 予約投稿時 リンクなし -->
                        <?php if( get_post_status( $post->ID ) == 'publish'): ?>
                            <a class="c-recipe-cont__item-inner" href="<?php the_permalink(); ?>" ontouchstart="">
                        <?php endif; ?>
                            <div class="c-recipe-img">
                                <figure class="c-recipe-img__inner js-img-bg object-fit">
                                    <?php if ( has_post_thumbnail() ): ?><!-- if文による条件分岐 アイキャッチが有る時-->
                                    <?php the_post_thumbnail( 'thumbnail' ); ?>
                                    <?php else: ?><!-- アイキャッチが無い時-->
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/moringa.jpg');?>" alt="アイキャッチがない時の画像です。" />
                                    <?php endif; ?>
                                </figure>

                                <!-- 更新から14日間 表示 -->
                                <?php
                                    $post_time = get_the_time('U');
                                    $days = 14; //New!を表示させる日数
                                    $last = time() - ($days * 24 * 60 * 60);
                                    if ($post_time > $last):
                                ?>
                                    <span class="c-recipe-new"><p>New</p></span>
                                <?php endif; ?>

                                <span class="c-recipe-tag">
                                    <p>
                                        <?php
                                            $category = get_the_category();
                                            echo $category[0]->name;
                                        ?>
                                    </p>
                                </span>
                                <!-- 予約投稿時 表示 -->
                                <?php if( get_post_status( $post->ID ) == 'future'): ?>
                                    <span class="c-recipe-coming">coming soon</span>
                                <?php endif; ?>
                            </div>
                            <!-- /.c-recipe-img -->
                            <div class="c-recipe-txt">
                                <p class="c-recipe-txt__exc"><?php the_field( 'sub_ttl' ); ?></p>
                                <h3 class="c-recipe-txt__ttl"><?php the_title(); ?></h3>
                            </div>
                        <!-- 予約投稿時 リンクなし -->
                        <?php if( get_post_status( $post->ID ) == 'publish'): ?>
                            </a>
                        <?php endif; ?>
                    </li>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <p>レシピがありません。</p>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>

                    <div class="p-content-pagination c-pagination">
                        <?php
                            the_posts_pagination(
                                array(
                                    'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
                                    'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
                                    'prev_text'     => __( '前へ'), // 「前へ」リンクのテキスト
                                    'next_text'     => __( '次へ'), // 「次へ」リンクのテキスト
                                    'type'          => 'list', // 戻り値の指定 (plain/list)
                                )
                            );
                        ?>
                    </div>
                    <!-- /.p-content-pagination  -->
                </ul>
            </div>
            <!-- /.p-content-wrap -->
        </div>
        <!-- /.p-content-inner -->

    </section>
</main>

<?php get_footer('cta_products'); ?>
