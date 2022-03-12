<?php get_header('home'); ?>
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
                        <h3>NEWS</h3>
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
                        <h3>Recipe</h3>
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
                                    $query_args = array(
                                        'orderby' => 'post_date',
                                        'post_status'=> 'publish',
                                        'post_type'=> 'recipe',
                                        'tag'=> 'staple',
                                        'order'=>'DESC',
                                        'posts_per_page'=>6,
                                        'paged'=>$page
                                    );
                                $the_query = new WP_Query($query_args);
                                if ( $the_query->have_posts() ) :
                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                ?>

                                <li class="c-recipe-cont__item" ontouchstart="">
                                    <a class="c-recipe-cont__item-inner" href="<?php the_permalink(); ?>" ontouchstart="">
                                        <div class="c-recipe-img">
                                            <figure class="c-recipe-img__inner js-img-bg object-fit">
                                                <?php the_post_thumbnail('thumbnail'); ?>
                                            </figure>

                                            <span class="c-recipe-new"><p>New</p></span>

                                            <span class="c-recipe-tag">
                                                <p>
                                                    <?php
                                                        $category = get_the_category();
                                                        echo $category[0]->name;
                                                    ?>
                                                </p>
                                            </span>
                                            <span class="c-recipe-coming">coming soon</span>
                                        </div>
                                        <!-- /.c-recipe-img -->
                                        <div class="c-recipe-txt">
                                            <p class="c-recipe-txt__exc"><?php echo get_secondary_title(); ?></p>
                                            <h3 class="c-recipe-txt__ttl"><?php the_title(); ?></h3>
                                        </div>
                                    </a>
                                </li>
                                <?php endwhile; ?>
                                <?php else: ?>
                                <p>レシピがありません。</p>
                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>
                            </ul>
                            <ul class="c-recipe-cont__list js-tab-cont">
                                <?php
                                    $query_args = array(
                                        'orderby' => 'post_date',
                                        'post_status'=> 'publish',
                                        'post_type'=> 'recipe',
                                        'tag'=> 'main',
                                        'order'=>'DESC',
                                        'posts_per_page'=>6,
                                        'paged'=>$page
                                    );
                                $the_query = new WP_Query($query_args);
                                if ( $the_query->have_posts() ) :
                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                ?>

                                <li class="c-recipe-cont__item" ontouchstart="">
                                    <a class="c-recipe-cont__item-inner" href="<?php the_permalink(); ?>" ontouchstart="">
                                        <div class="c-recipe-img">
                                            <figure class="c-recipe-img__inner js-img-bg object-fit">
                                                <?php the_post_thumbnail('thumbnail'); ?>
                                            </figure>

                                            <span class="c-recipe-new"><p>New</p></span>

                                            <span class="c-recipe-tag"><p>
                                                    <?php
                                                        $category = get_the_category();
                                                        echo $category[0]->name;
                                                    ?>
                                            </p></span>
                                            <span class="c-recipe-coming">coming soon</span>
                                        </div>
                                        <!-- /.c-recipe-img -->
                                        <div class="c-recipe-txt">
                                            <p class="c-recipe-txt__exc"><?php echo get_secondary_title(); ?></p>
                                            <h3 class="c-recipe-txt__ttl"><?php the_title(); ?></h3>
                                        </div>
                                    </a>
                                </li>
                                <?php endwhile; ?>
                                <?php else: ?>
                                <p>レシピがありません。</p>
                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>
                            </ul>
                            <ul class="c-recipe-cont__list js-tab-cont">
                                <?php
                                    $query_args = array(
                                        'orderby' => 'post_date',
                                        'post_status'=> 'publish',
                                        'post_type'=> 'recipe',
                                        'tag'=> 'side',
                                        'order'=>'DESC',
                                        'posts_per_page'=>6,
                                        'paged'=>$page
                                    );
                                $the_query = new WP_Query($query_args);
                                if ( $the_query->have_posts() ) :
                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                ?>

                                <li class="c-recipe-cont__item" ontouchstart="">
                                    <a class="c-recipe-cont__item-inner" href="<?php the_permalink(); ?>" ontouchstart="">
                                        <div class="c-recipe-img">
                                            <figure class="c-recipe-img__inner js-img-bg object-fit">
                                                <?php the_post_thumbnail('thumbnail'); ?>
                                            </figure>

                                            <span class="c-recipe-new"><p>New</p></span>

                                            <span class="c-recipe-tag"><p>
                                                    <?php
                                                        $category = get_the_category();
                                                        echo $category[0]->name;
                                                    ?>
                                            </p></span>
                                            <span class="c-recipe-coming">coming soon</span>
                                        </div>
                                        <!-- /.c-recipe-img -->
                                        <div class="c-recipe-txt">
                                            <p class="c-recipe-txt__exc"><?php echo get_secondary_title(); ?></p>
                                            <h3 class="c-recipe-txt__ttl"><?php the_title(); ?></h3>
                                        </div>
                                    </a>
                                </li>
                                <?php endwhile; ?>
                                <?php else: ?>
                                <p>レシピがありません。</p>
                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>
                            </ul>
                            <ul class="c-recipe-cont__list js-tab-cont">
                                <?php
                                    $query_args = array(
                                        'orderby' => 'post_date',
                                        'post_status'=> 'publish',
                                        'post_type'=> 'recipe',
                                        'tag'=> 'drink-soup',
                                        'order'=>'DESC',
                                        'posts_per_page'=>6,
                                        'paged'=>$page
                                    );
                                $the_query = new WP_Query($query_args);
                                if ( $the_query->have_posts() ) :
                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                ?>

                                <li class="c-recipe-cont__item" ontouchstart="">
                                    <a class="c-recipe-cont__item-inner" href="<?php the_permalink(); ?>" ontouchstart="">
                                        <div class="c-recipe-img">
                                            <figure class="c-recipe-img__inner js-img-bg object-fit">
                                                <?php the_post_thumbnail('thumbnail'); ?>
                                            </figure>

                                            <span class="c-recipe-new"><p>New</p></span>

                                            <span class="c-recipe-tag"><p>
                                                    <?php
                                                        $category = get_the_category();
                                                        echo $category[0]->name;
                                                    ?>
                                            </p></span>
                                            <span class="c-recipe-coming">coming soon</span>
                                        </div>
                                        <!-- /.c-recipe-img -->
                                        <div class="c-recipe-txt">
                                            <p class="c-recipe-txt__exc"><?php echo get_secondary_title(); ?></p>
                                            <h3 class="c-recipe-txt__ttl"><?php the_title(); ?></h3>
                                        </div>
                                    </a>
                                </li>
                                <?php endwhile; ?>
                                <?php else: ?>
                                <p>レシピがありません。</p>
                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>
                            </ul>
                            <ul class="c-recipe-cont__list js-tab-cont">
                                <?php
                                    $query_args = array(
                                        'orderby' => 'post_date',
                                        'post_status'=> 'publish',
                                        'post_type'=> 'recipe',
                                        'tag'=> 'sweets',
                                        'order'=>'DESC',
                                        'posts_per_page'=>6,
                                        'paged'=>$page
                                    );
                                $the_query = new WP_Query($query_args);
                                if ( $the_query->have_posts() ) :
                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                ?>

                                <li class="c-recipe-cont__item" ontouchstart="">
                                    <a class="c-recipe-cont__item-inner" href="<?php the_permalink(); ?>" ontouchstart="">
                                        <div class="c-recipe-img">
                                            <figure class="c-recipe-img__inner js-img-bg object-fit">
                                                <?php the_post_thumbnail('thumbnail'); ?>
                                            </figure>

                                            <span class="c-recipe-new"><p>New</p></span>

                                            <span class="c-recipe-tag"><p>
                                                    <?php
                                                        $category = get_the_category();
                                                        echo $category[0]->name;
                                                    ?>
                                            </p></span>
                                            <span class="c-recipe-coming">coming soon</span>
                                        </div>
                                        <!-- /.c-recipe-img -->
                                        <div class="c-recipe-txt">
                                            <p class="c-recipe-txt__exc"><?php echo get_secondary_title(); ?></p>
                                            <h3 class="c-recipe-txt__ttl"><?php the_title(); ?></h3>
                                        </div>
                                    </a>
                                </li>
                                <?php endwhile; ?>
                                <?php else: ?>
                                <p>レシピがありません。</p>
                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>
                            </ul>

                        </div>
                        <!-- /.c-recipe-cont -->
                    </div>
                </div>
                <!-- /.c-recipe-inner -->
            </section>

<?php get_footer('cta_products'); ?>