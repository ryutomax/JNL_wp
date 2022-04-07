        <?php get_template_part('template_header/header'); ?>

        <main class="l-main">
            <!-- FV テンプレートの呼び出し -->
            <?php get_template_part('template_parts/FV'); ?>

            <!-- パンくずリストのテンプレート呼び出し -->
            <?php get_template_part('template_parts/breadcrumb'); ?>

            <section class="p-sitemap c-frame">
                <div class="p-sitemap-inner">

                    <div class="p-sitemap-cont">
                        <div class="p-sitemap-top">
                            <a href="<?php echo esc_url(home_url('/')); ?>">Top</a>
                        </div>
                        <div class="p-sitemap-bottom">
                            <ul class="p-sitemap-list">
                                <li class="p-sitemap-item">
                                    <a href="">レシピ</a>
                                    <ul class="p-sitemap-inList">
                                        <li class="p-sitemap-inItem">
                                            <a href="<?php
                                                $tag = get_term_by('name', 'ご飯・麺', 'post_tag');
                                                $tag_id = $tag->term_id;
                                                echo esc_url(get_tag_link($tag_id));
                                            ?>">
                                                ご飯・麺
                                            </a>
                                        </li>
                                        <li class="p-sitemap-inItem">
                                            <a href="<?php
                                                $tag = get_term_by('name', 'メイン', 'post_tag');
                                                $tag_id = $tag->term_id;
                                                echo esc_url(get_tag_link($tag_id));
                                            ?>">
                                                メイン
                                            </a>
                                        </li>
                                        <li class="p-sitemap-inItem">
                                            <a href="<?php
                                                $tag = get_term_by('name', 'サイド', 'post_tag');
                                                $tag_id = $tag->term_id;
                                                echo esc_url(get_tag_link($tag_id));
                                            ?>">
                                                サイド
                                            </a>
                                        </li>
                                        <li class="p-sitemap-inItem">
                                            <a href="<?php
                                                $tag = get_term_by('name', 'ドリンク・スープ', 'post_tag');
                                                $tag_id = $tag->term_id;
                                                echo esc_url(get_tag_link($tag_id));
                                            ?>">
                                                ドリンク・スープ
                                            </a>
                                        </li>
                                        <li class="p-sitemap-inItem">
                                            <a href="<?php
                                                $tag = get_term_by('name', 'スイーツ', 'post_tag');
                                                $tag_id = $tag->term_id;
                                                echo esc_url(get_tag_link($tag_id));
                                            ?>">
                                                スイーツ
                                            </a>
                                        </li>
                                        <li class="p-sitemap-inItem">
                                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( '和風メニュー' ) ) ); ?>">和風メニュー</a>
                                        </li>
                                        <li class="p-sitemap-inItem">
                                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( '洋風メニュー' ) ) ); ?>">洋風メニュー</a>
                                        </li>
                                        <li class="p-sitemap-inItem">
                                            <a href="<?php echo esc_url( get_category_link( get_cat_ID( '中華風メニュー' ) ) ); ?>">中華メニュー</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="p-sitemap-item">
                                    <a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a>
                                </li>
                            </ul>
                            <ul class="p-sitemap-list">
                                <li class="p-sitemap-item">
                                    <a href="<?php echo esc_url(home_url('/')); ?>">会社概要</a>
                                </li>
                                <li class="p-sitemap-item">
                                    <a href="<?php echo esc_url(home_url('/')); ?>">お問い合わせ</a>
                                </li>
                                <li class="p-sitemap-item">
                                    <a href="<?php echo esc_url(home_url('/')); ?>">プライバシーポリシー</a>
                                </li>
                                <li class="p-sitemap-item">
                                    <a href="<?php echo esc_url(home_url('/')); ?>">サイトマップ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.p-content-wrap -->
                </div>
                <!-- /.p-content-inner -->
            </section>

            <!-- bannerのテンプレート呼び出し -->
            <?php get_template_part('template_parts/banner'); ?>
        </main>

        <?php get_template_part('template_footer/footer'); ?>
