
<?php get_header(); ?>

<main class="l-main">

    <section class="c-top-ttl">
        <div class="c-top-ttl-inner" style="background-image: url(<?php echo get_template_directory_uri();?>/img/blog@2x.png);">
            <h2 class="c-top-ttl-main">ブログ</h2>
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
            <div class="p-content-ttl c-sec-ttl"><h2>新着一覧</h2></div>

            <div class="p-content-wrap">
                <ul class="p-content__list-wp">
                        <?php
                        $paged = get_query_var('paged') ?: 1;  //先頭ページでは 0 が返ってくるので、強制的に 1 をセット
                        $query_args = array(

                                'orderby' => 'post_date',   //日付順に並び替え
                                'order'=>'DESC',            //上記パラメータについて昇順か降順かを指定
                                'post_status'=> 'publish',  //公開された投稿もしくは固定ページ
                                'post_type'=> 'blog',
                                'posts_per_page'=>10,
                                'paged'=>$paged

                            );
                        $the_query = new WP_Query($query_args);
                        if ( $the_query->have_posts() ) :
                            while ( $the_query->have_posts() ) : $the_query->the_post();

                    ?>

                    <li class="p-content__item-wp">
                        <figure class="p-content__img-wp c-tag-img">
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ): ?><!-- if文による条件分岐 アイキャッチが有る時-->
                                <?php the_post_thumbnail( 'thumbnail' ); ?>
                                <?php else: ?><!-- アイキャッチが無い時-->
                                <img src="<?php echo get_template_directory_uri();?>/img/noimage.png" alt="アイキャッチがない時の画像です。" />
                                <?php endif; ?>
                            </a>
                            <span class="p-content__cat-wp c-tag-img__tag">
                                <!-- カテゴリ名のみ取得 ///////////////////////////////////// -->
                            <?php
                                $category = get_the_category();
                                echo $category[0]->name;
                            ?>

                            </span>
                        </figure>
                        <div class="p-content__txt-wp">
                            <div class="p-content__date-wp"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time></div>

                            <h3 class="p-content__ttl-wp">
                                <a href="<?php the_permalink(); ?>">
                                <?php
                                    if(mb_strlen($post->post_title, 'UTF-8')>30){
                                    $title= mb_substr($post->post_title, 0, 30, 'UTF-8');
                                            echo $title.'・・・';
                                    }else{
                                            echo $post->post_title;
                                    }
                                ?>
                                </a>
                            </h3>

                            <div class="p-content__exc-wp">
                                <a href="<?php the_permalink(); ?>">
                                    <p>
                                        <!-- 文章のみ取得 /////////////////////////////////////-->
                                        <?php the_excerpt(); ?>
                                    
                                    </p>
                                </a>
                            </div>
                        </div>
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

<?php get_footer('cta'); ?>
