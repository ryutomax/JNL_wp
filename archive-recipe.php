
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
                        'posts_per_page'=>3,
                        'paged'=>$page
                    );
                $the_query = new WP_Query($query_args);
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                <li class="p-swiper-item swiper-slide">
                    <figure class="p-swiper-img js-img-bg object-fit" data-aos="zoom-out" data-aos-duration="1500" data-aos-delay="0">
                        <?php the_post_thumbnail('thumbnail'); ?>
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

    <section class="p-content">
        <div class="p-content-inner">
            <div class="p-news-ttl c-sec-ttl">
                <h3>RECIPE</h3>
                <p>レシピ一覧</p>
            </div>

            <div class="p-content-wrap">
                <ul class="p-content__list-wp">
                        <?php
                        $paged = get_query_var('paged') ?: 1;  //先頭ページでは 0 が返ってくるので、強制的に 1 をセット
                        $query_args = array(

                                'orderby' => 'post_date',   //日付順に並び替え
                                'order'=>'DESC',            //上記パラメータについて昇順か降順かを指定
                                'post_status'=> 'publish',  //公開された投稿もしくは固定ページ
                                'post_type'=> 'recipe',
                                'posts_per_page'=>10,
                                'paged'=>$paged

                            );
                        $the_query = new WP_Query($query_args);
                        if ( $the_query->have_posts() ) :
                            while ( $the_query->have_posts() ) : $the_query->the_post();

                    ?>

                    <li class="p-recipe-cont__item" ontouchstart="">
                        <a class="p-recipe-cont__item-inner" href="<?php the_permalink(); ?>" ontouchstart="">
                            <div class="p-recipe-img">
                                <figure class="p-recipe-img__inner js-img-bg object-fit">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </figure>

                                <span class="p-recipe-new"><p>New</p></span>

                                <span class="p-recipe-tag">
                                    <p>
                                        <?php
                                            $category = get_the_category();
                                            echo $category[0]->name;
                                        ?>
                                    </p>
                                </span>
                                <span class="p-recipe-coming">coming soon</span>
                            </div>
                            <!-- /.p-recipe-img -->
                            <div class="p-recipe-txt">
                                <p class="p-recipe-txt__exc"><?php echo get_secondary_title(); ?></p>
                                <h3 class="p-recipe-txt__ttl"><?php the_title(); ?></h3>
                            </div>
                        </a>
                    </li>
                    <?php endwhile; ?>
                                <?php else: ?>
                                <p>記事がありません。</p>
                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>
                </ul>
            </div>
            <!-- /.p-content-wrap -->
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
        </div>
        <!-- /.p-content-inner -->

    </section>
</main>

<?php get_footer('cta_products'); ?>
