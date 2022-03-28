<!--
// ページTOPスライドのテンプレートです
-->
    <section class="p-swiper">
        <div class="p-swiper-inner swiper-container">
            <ul class="p-swiper-container swiper-wrapper">
                <?php
                    $paged = get_query_var('paged') ?: 1;  //先頭ページでは 0 が返ってくるので、強制的に 1 をセット

                    $query_args = array(
                        'orderby' => 'post_date',
                        'post_status'=> 'publish',
                        'post_type'=> 'recipe',
                        'order'=>'DESC',
                        'posts_per_page'=>6,
                        'paged'=>$paged
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