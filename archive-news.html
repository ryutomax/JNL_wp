<?php get_header(); ?>

<main class="l-main">
    <section class="c-top-ttl">
        <div class="c-top-ttl-inner" style="background-image: url(<?php echo get_template_directory_uri();?>/img/news@2x.png);">
            <h2 class="c-top-ttl-main">お知らせ</h2>
        </div>
    </section>

    <div class="c-breadcrumb">
        <div class="c-breadcrumb-inner">
            <!-- パンくずリストプラグイン -->
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
            <div class="p-content-news-ttl c-sec-ttl"><h2>お知らせ一覧</h2></div>

            <div class="p-content-news__wrap">
                <ul class="p-content-news__list-wp">
                    <?php
                    $query_args = array(

                            'orderby' => 'post_date',
                            'post_status'=> 'publish',
                            'post_type'=> 'news',
                            'order'=>'DESC',
                            'posts_per_page'=>10,
                            'paged'=>$paged

                        );
                    $the_query = new WP_Query($query_args);
                    if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) : $the_query->the_post();

                    ?>

                    <li class="p-content-news__item-wp">
                        <a class="p-content-news__item-inner-wp" href="<?php the_permalink(); ?>">
                            <div class="p-content-news__date-wp"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time></div>
                            <h3 class="p-content-news__ttl-wp">
                                <?php
                                        if(mb_strlen($post->post_title, 'UTF-8')>40){
                                        $title= mb_substr($post->post_title, 0, 40, 'UTF-8');
                                                echo $title.'・・・';
                                        }else{
                                                echo $post->post_title;
                                        }
                                ?>
                            </h3>
                        </a>
                    </li>

                    <?php endwhile; ?>
                    <?php else: ?>
                        <p>記事がありません。</p>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
            </div>
            <!-- /.p-content-news-wrap -->
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
            <!-- /.p-content-pagination -->
        </div>
        <!-- /.p-content-inner -->
    </section>

<?php get_footer('cta'); ?>
