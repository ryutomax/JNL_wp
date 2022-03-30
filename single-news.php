<?php get_template_part('template_header/header'); ?>

    <main class="l-main">
        <!-- ページTOPスライドのテンプレート呼び出し -->
        <?php get_template_part('template_parts/topSlider'); ?>
        <!-- パンくずリストのテンプレート呼び出し -->
        <?php get_template_part('template_parts/breadcrumb'); ?>
        <section class="p-contNews c-frame">
            <div class="p-contNews-inner">
                <div class="p-contNews-head">
                    <div class="p-contNews__ttl"><h1><?php the_title(); ?></h1></div>
                    <div class="p-contNews__date">
                        <time datetime="<?php the_time('Y-m-d'); ?>">
                            <?php the_time('Y-m-d'); ?>
                        </time>
                    </div>
                    <!-- /.p-news-content__date -->
                </div>
                <!-- /.p-content-head -->
                <div class="p-contNews_post p-content-post">
                <?php
                    $head= get_field( 'head_l' );
                    if($head):
                ?>
                    <figure>
                    <?php if ( get_field( 'img' ) ) : ?>
                        <img src="<?php the_field( 'img' ); ?>" />
                    <?php endif ?>
                    </figure>
                        <h2><?php the_field( 'head_l' ); ?></h2>
                        <p><?php echo nl2br(esc_html(get_field( 'text' ))); ?></p>
                    <figure>
                    <?php if ( get_field( 'img1' ) ) : ?>
                        <img src="<?php the_field( 'img1' ); ?>" />
                    <?php endif ?>
                    </figure>
                        <h3><?php the_field( 'head_s1' ); ?></h3>
                        <p><?php echo nl2br(esc_html(get_field( 'text1_1' ))); ?></p>
                    <?php if ( have_rows( 'link_g1' ) ) : ?>
                        <?php while ( have_rows( 'link_g1' ) ) : the_row(); ?>
                            <?php $link1 = get_sub_field( 'link1' ); ?>
                            <?php if ( $link1 ) : ?>
                                <a href="<?php echo esc_url( $link1); ?>"><?php echo esc_html(get_sub_field( 'linkname_1' )); ?></a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                        <p><?php echo nl2br(esc_html(get_field( 'text1_2' ))); ?></p>
                    <figure>
                    <?php if ( get_field( 'img2' ) ) : ?>
                        <img src="<?php the_field( 'img2' ); ?>" />
                    <?php endif ?>
                    </figure>
                        <h3><?php the_field( 'head_s2' ); ?></h3>
                        <p><?php echo nl2br(esc_html(get_field( 'text2_1' ))); ?></p>
                    <?php if ( have_rows( 'link_g2' ) ) : ?>
                        <?php while ( have_rows( 'link_g2' ) ) : the_row(); ?>
                            <?php $link2 = get_sub_field( 'link2' ); ?>
                            <?php if ( $link2 ) : ?>
                                <a href="<?php echo esc_url( $link2); ?>"><?php echo esc_html(get_sub_field( 'linkname_2' )); ?></a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                        <p><?php echo nl2br(esc_html(get_field( 'text2_2' ))); ?></p>
                <?php endif; ?>
                <?php the_content(); ?>
                </div>
                <!-- /.p-content-wrap -->
                <!-- prevNextのテンプレートの呼び出し -->
                <?php get_template_part('template_parts/prevNext'); ?>
            </div>
            <!-- /.p-content-inner -->
        </section>
        
        <!-- bannerのテンプレート呼び出し -->
        <?php get_template_part('template_parts/banner'); ?>
    </main>

<?php get_template_part('template_footer/footer'); ?>