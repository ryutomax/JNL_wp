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
            <div class="p-content__breadcrumb c-breadcrumb">
                <div class="c-breadcrumb-inner">
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php
                            if(function_exists('bcn_display')){
                                bcn_display();
                            }
                        ?>
                    </div>
                    <!-- <p class="c-breadcrumb-main">ホーム＞ブログ</p> -->
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
            <section class="p-intro">
                <div class="p-intro-inner">
                    <div class="p-intro-img">
                        <figure class="p-intro-img__inner js-img-bg object-fit ">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </figure>
                    </div>
                    <!-- /.p-intro-img -->
                    <div class="p-intro-cont">
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
                            <h3 class="p-intro-ttl__sub"><?php echo get_secondary_title(); ?></h3>
                            <h2 class="p-intro-ttl__main" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="100"><?php the_title(); ?></h2>
                        </div>
                        <div class="p-intro-cont__inner" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                            <?php the_excerpt(); ?>
                        </div>
                        <!-- /.p-intro-inner -->
                    </div>
                    <!-- /.p-intro-cont -->
                </div>
                <!-- /.p-intro-inner -->

            </section>
            <section class="p-detail c-frame">
                <div class="p-detail-inner">

                    <?php the_content(); ?>

                </div>
                <!-- /.p-detail-inner -->
            </section>

<?php get_footer('cta_products'); ?>