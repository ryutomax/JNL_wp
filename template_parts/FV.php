<!--
    FVのテンプレートです
-->
            <section class="p-fv"  style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/img/fv_img.jpg'); ?>)">
                <div class="p-fv-inner" data-aos="zoom-out" data-aos-duration="3000" data-aos-delay="1000">
                    <h2 class="p-fv-copy">
                    <!-- TOPページ＆404ページ -->
                    <?php if(is_front_page() || is_404()): ?>
                        <p>Moringa</p>
                        <p>Recipe</p>
                    <!-- カテゴリ・タグページ -->
                    <?php elseif(is_category() || is_tag()): ?>
                        <p>Recipe List</p>
                        <p class="p-fv-copy_sub"><?php single_term_title( '', true ); ?></p>
                    <!-- アーカイブページ -->
                    <?php elseif(is_post_type_archive()): ?>
                        <?php if(is_post_type_archive( 'recipe' )): ?>
                        <p>Recipe List</p>
                        <p class="p-fv-copy_sub">レシピ一覧</p>
                        <?php elseif(is_post_type_archive( 'news' )):?>
                        <p>News List</p>
                        <p class="p-fv-copy_sub">お知らせ一覧</p>
                        <?php endif; ?>
                    <!-- 固定ページ -->
                    <?php elseif(is_page()): ?>
                        <?php if(is_page( array('contact','confirm','thanks'))): ?>

                        <p>
                            <?php
                                global $post;
                                $slug = $post->post_name;
                                echo $slug
                            ?>
                        </p>
                        <p class="p-fv-copy_sub"><?php the_title(); ?></p>

                        <?php elseif(is_page('company')): ?>

                        <p>Company</p>
                        <p class="p-fv-copy_sub">会社概要</p>

                        <?php elseif(is_page('privacypolicy')): ?>

                        <p>Privacy Policy</p>
                        <p class="p-fv-copy_sub">プライバシーポリシー</p>

                        <?php elseif(is_page('sitemap')): ?>

                        <p>Site Map</p>
                        <p class="p-fv-copy_sub">サイトマップ</p>

                        <?php endif; ?>
                    <!-- カスタム投稿タイプの記事ページ -->
                    <?php elseif(is_singular()): ?>
                        <?php if(is_singular( 'recipe' )): ?>
                        <p>Recipe</p>
                        <?php elseif(is_singular( 'news' )):?>
                        <p>News</p>
                        <?php endif; ?>

                    <?php endif; ?>
                    </h2>
                </div>
                <!-- /.p-fv-inner -->
            </section>