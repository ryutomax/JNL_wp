<?php get_template_part('template_header/header'); ?>

<main class="l-main">

    <!-- FV テンプレートの呼び出し -->
    <?php get_template_part('template_parts/FV'); ?>

    <!-- パンくずリストのテンプレート呼び出し -->
    <?php get_template_part('template_parts/breadcrumb'); ?>

    <section class="p-listNews c-frame">
        <div class="p-listNews-inner">
            <div class="p-listNews__wrap">
                <ul class="p-listNews__list">
                    <?php
                    $paged = get_query_var('paged') ?: 1;  //先頭ページでは 0 が返ってくるので、強制的に 1 をセット

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

                    <li class="p-listNews__item">
                        <a class="p-listNews__item-inner" href="<?php the_permalink(); ?>">
                            <div class="p-listNews__date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time></div>
                            <h3 class="p-listNews__ttl">
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

            <!-- ページネーションのテンプレート呼び出し -->
            <?php get_template_part('template_parts/pagination'); ?>
        </div>
        <!-- /.p-content-inner -->

    </section>

    <!-- productsCtaのテンプレート呼び出し -->
    <?php get_template_part('template_parts/productsCta'); ?>

    <!-- bannerのテンプレート呼び出し -->
    <?php get_template_part('template_parts/banner'); ?>

<?php get_template_part('template_footer/footer'); ?>
