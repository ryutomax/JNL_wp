<?php get_template_part('template_header/header'); ?>

<main class="l-main">

    <!-- ページTOPスライドのテンプレート呼び出し -->
    <?php get_template_part('template_parts/topSlider'); ?>

    <!-- パンくずリストのテンプレート呼び出し -->
    <?php get_template_part('template_parts/breadcrumb'); ?>
    
    <!-- タグ・カテゴリメニュー呼び出し -->
    <?php get_template_part('template_parts/mainMenu'); ?>

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

                    <!-- ページネーションのテンプレート呼び出し -->
                    <?php get_template_part('template_parts/pagination'); ?>
                </ul>
            </div>
            <!-- /.p-content-wrap -->
        </div>
        <!-- /.p-content-inner -->

    </section>
</main>

<?php get_template_part('template_footer/footer-cta_products'); ?>