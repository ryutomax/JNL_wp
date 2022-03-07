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
            <section class="p-menu">
                <div class="p-menu-inner">
                    <ul class="p-menu-btns">
                        <li class="p-menu-btn" data-aos="flip-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" data-aos-delay="300"><a href="" ontouchstart="">Food<span>ご飯・麺</span></a></li>
                        <li class="p-menu-btn" data-aos="flip-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" data-aos-delay="400"><a href="" ontouchstart="">Main<span>メイン</span></a></li>
                        <li class="p-menu-btn" data-aos="flip-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" data-aos-delay="500"><a href="" ontouchstart="">Side<span>サイド</span></a></li>
                        <li class="p-menu-btn p-menu-btn__drink" data-aos-anchor-placement="top-bottom" data-aos="flip-up" data-aos-duration="2000" data-aos-delay="600">
                            <a href="" ontouchstart="">
                                <span>Drink<br> Soup</span>
                                <span>ドリンク・<br>スープ</span>
                            </a>
                        </li>
                        <li class="p-menu-btn" data-aos-anchor-placement="top-bottom" data-aos="flip-up" data-aos-duration="2000" data-aos-delay="700"><a href="" ontouchstart="">Sweets<span>スイーツ</span></a></li>
                        <li class="p-menu-btn" data-aos-anchor-placement="top-bottom" data-aos="flip-up" data-aos-duration="2000" data-aos-delay="800"><a href="" ontouchstart="">Style<span>和風メニュー</span></a></li>
                        <li class="p-menu-btn" data-aos-anchor-placement="top-bottom" data-aos="flip-up" data-aos-duration="2000" data-aos-delay="900"><a href="" ontouchstart="">Style<span>洋風メニュー</span></a></li>
                        <li class="p-menu-btn" data-aos-anchor-placement="top-bottom" data-aos="flip-up" data-aos-duration="2000" data-aos-delay="1000"><a href="" ontouchstart="">Style<span>中華メニュー</span></a></li>
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
                        <div class="p-intro-tag"><p>Food<span>ご飯・麺</span></p></div>
                        <div class="p-intro-ttl">
                            <h3 class="p-intro-ttl__sub">ヘルシーな豆腐とモリンガのさわやかなディップ</h3>
                            <h2 class="p-intro-ttl__main" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300"><?php the_title(); ?></h2>
                        </div>
                        <div class="p-intro-cont__inner" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                            <!-- <p> -->
                                <?php the_excerpt(); ?>
                                <!-- 豆腐とモリンガ、アンチョビ、オリーブオイルだけ
                                でも美味しくお召し上がりいただけます。
                                和風にしたいときワサビや醤油を足したり、
                                まろやかにしたいときはバターを足したり、
                                ワサビの代わりにタバスコを加えたりしても◎
                                しっかり冷やすと野菜スティックで
                                すくいやすくなります。 -->
                            <!-- </p> -->
                        </div>
                        <!-- /.p-intro-inner -->
                    </div>
                    <!-- /.p-intro-cont -->
                </div>
                <!-- /.p-intro-inner -->

            </section>
            <section class="p-detail">
                <div class="p-detail-inner">

                    <?php the_content(); ?>

                    <!-- <div class="p-detail-movie">
                        <video src="video.mp4" controls></video>
                    </div>
                    <div class="p-detail-explain">
                        <div class="p-detail-explain__inner" data-aos="zoom-in" data-aos-duration="2000">
                            <div class="p-detail-explain__ttl"><p>▪︎材料（２～３人分）</p></div>
                            <table>
                                    <tbody>
                                        <tr>
                                            <td>豆腐</td>
                                            <td>100g</td>
                                        </tr>
                                        <tr>
                                            <td>モリンガ</td>
                                            <td>小さじ１</td>
                                        </tr>
                                        <tr>
                                            <td>アンチョビフィレ</td>
                                            <td>30g</td>
                                        </tr>
                                        <tr>
                                            <td>オリーブオイル</td>
                                            <td>30g</td>
                                        </tr>
                                        <tr>
                                            <td>ワサビ</td>
                                            <td>小さじ1/2</td>
                                        </tr>
                                        <tr>
                                            <td>ハチミツ</td>
                                            <td>小さじ1/2</td>
                                        </tr>
                                        <tr>
                                            <td>醤油</td>
                                            <td>小さじ1/2</td>
                                        </tr>
                                        <tr>
                                            <td>お好みの野菜</td>
                                            <td>適量</td>
                                        </tr>
                                        <tr>
                                            <td>お好みのクラッカー</td>
                                            <td>適量</td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div> -->
                        <!-- /.p-detail-explain__inner -->
                        <!-- <div class="p-detail-explain__inner" data-aos="zoom-in" data-aos-duration="2000">
                            <div class="p-detail-explain__ttl"><p>作り方</p></div>
                            <table>
                                    <tbody>
                                        <tr>
                                            <td>❶豆腐を流水で洗い、ザルにあげペーパーで
                                                表面の水分を拭く。</td>
                                        </tr>
                                        <tr>
                                            <td>❷アンチョビをみじん切りにする。</td>
                                        </tr>
                                        <tr>
                                            <td>❸１と２のアンチョビをミキサーに入れ、回す。
                                                （またはすり鉢であたる）</td>
                                        </tr>
                                        <tr>
                                            <td>❹３にオリーブオイルを３回にわけて入れ、
                                                その都度ミキサーをかけ油分と水分が分離しない
                                                ようにする。</td>
                                        </tr>
                                        <tr>
                                            <td>❺４にお好みでワサビ・ハチミツ・醤油等を入れ
                                                ミキサーを回す。</td>
                                        </tr>
                                        <tr>
                                            <td>❻器に盛り冷蔵庫でしっかり冷やす。</td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div> -->
                        <!-- /.p-detail-explain__inner -->
                    <!-- </div> -->
                    <!-- /.p-detail-explain -->
                </div>
                <!-- /.p-detail-inner -->
            </section>
            <section class="p-review">

            </section>

        <?php get_footer('cta_prodacts'); ?>