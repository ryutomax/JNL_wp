<!--
// タグ・カテゴリメニューのテンプレートです
-->
    <section class="p-menu">
        <div class="p-menu-inner">
            <ul class="p-menu-btns">
                <li class="p-menu-btn" data-aos="flip-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" data-aos-delay="300">
                    <a href="<?php
                                $tag = get_term_by('name', 'ご飯・麺', 'post_tag');
                                $tag_id = $tag->term_id;
                                echo esc_url(get_tag_link($tag_id));
                            ?>" ontouchstart="">
                            <span>Staple</span>
                            <span>ご飯・麺</span>
                    </a>
                </li>
                <li class="p-menu-btn" data-aos="flip-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" data-aos-delay="400">
                    <a href="<?php
                                $tag = get_term_by('name', 'メイン', 'post_tag');
                                $tag_id = $tag->term_id;
                                echo esc_url(get_tag_link($tag_id));
                            ?>" ontouchstart="">
                            <span>Main</span>
                            <span>メイン</span>
                    </a>
                </li>
                <li class="p-menu-btn" data-aos="flip-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" data-aos-delay="500">
                    <a href="<?php
                                $tag = get_term_by('name', 'サイド', 'post_tag');
                                $tag_id = $tag->term_id;
                                echo esc_url(get_tag_link($tag_id));
                            ?>" ontouchstart="">
                            <span>Side</span>
                            <span>サイド</span>
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
                            ?>" ontouchstart="">
                            <span>Sweets</span>
                            <span>スイーツ</span>
                    </a>
                </li>
                <li class="p-menu-btn" data-aos-anchor-placement="top-bottom" data-aos="flip-up" data-aos-duration="2000" data-aos-delay="800"><a href="<?php echo esc_url( get_category_link( get_cat_ID( '和風メニュー' ) ) ); ?>" ontouchstart=""><span>Style</span><span>和風メニュー</span></a></li>
                <li class="p-menu-btn" data-aos-anchor-placement="top-bottom" data-aos="flip-up" data-aos-duration="2000" data-aos-delay="900"><a href="<?php echo esc_url( get_category_link( get_cat_ID( '洋風メニュー' ) ) ); ?>" ontouchstart=""><span>Style</span><span>洋風メニュー</span></a></li>
                <li class="p-menu-btn" data-aos-anchor-placement="top-bottom" data-aos="flip-up" data-aos-duration="2000" data-aos-delay="1000"><a href="<?php echo esc_url( get_category_link( get_cat_ID( '中華風メニュー' ) ) ); ?>" ontouchstart=""><span>Style</span><span>中華メニュー</span></a></li>
            </ul>
        </div>
        <!-- /.p-menu-inner -->
    </section>