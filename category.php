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

            <!-- コンテンツタイトルのテンプレート呼び出し -->
            <?php get_template_part('template_parts/title-content'); ?>

            <div class="p-content-wrap">
                <ul class="p-content-list">
                    <?php
                        $paged = get_query_var('paged') ?: 1;  //先頭ページでは 0 が返ってくるので、強制的に 1 をセット

                        $category = get_the_category();
                        $cat_id   = $category[0]->cat_ID;
                        $cat_name = $category[0]->cat_name;
                        $cat_slug = $category[0]->category_nicename;

                        $query_args = array(

                                'orderby' => 'post_date',   //日付順に並び替え
                                'order'=>'DESC',            //上記パラメータについて昇順か降順かを指定
                                'post_status'=> 'publish',  //公開された投稿もしくは固定ページ
                                'post_type'=> 'recipe',
                                'category_name'  => $cat_slug ,
                                'posts_per_page'=>10,
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
                    
                    <!-- ページネーションのテンプレート呼び出し -->
                    <?php get_template_part('template_parts/pagination'); ?>

                </ul>
            </div>
            <!-- /.p-content-wrap -->
        </div>
        <!-- /.p-content-inner -->

    </section>
    
    <!-- productsCtaのテンプレート呼び出し -->
    <?php get_template_part('template_parts/productsCta'); ?>

</main>

<?php get_template_part('template_footer/footer'); ?>