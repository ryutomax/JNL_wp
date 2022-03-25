<!--
// メニューリストのテンプレートです
-->
                                <?php if(is_front_page()): ?>
                                <li class="c-recipe-cont__item" ontouchstart="">
                                <?php else: ?>
                                <li class="p-content-item c-recipe-cont__item" ontouchstart="">
                                <?php endif; ?>
                                    <!-- 予約投稿時 リンクなし -->
                                    <?php if( get_post_status( $post->ID ) == 'publish'): ?>
                                        <a class="c-recipe-cont__item-inner" href="<?php the_permalink(); ?>" ontouchstart="">
                                    <?php endif; ?>
                                        <div class="c-recipe-img">
                                            <figure class="c-recipe-img__inner js-img-bg object-fit">
                                                <?php if ( has_post_thumbnail() ): ?><!-- if文による条件分岐 アイキャッチが有る時-->
                                                    <?php the_post_thumbnail( 'thumbnail' ); ?>
                                                <?php else: ?><!-- アイキャッチが無い時-->
                                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/moringa.jpg');?>" alt="アイキャッチがない時の画像です。" />
                                                <?php endif; ?>
                                            </figure>
                                            <!-- 更新から14日間 表示 -->
                                            <?php
                                                $post_time = get_the_time('U');
                                                $days = 14; //New!を表示させる日数
                                                $last = time() - ($days * 24 * 60 * 60);
                                                if ($post_time > $last):
                                            ?>
                                                <span class="c-recipe-new"><p>New</p></span>
                                            <?php endif; ?>

                                            <span class="c-recipe-tag">
                                                <p>
                                                    <?php
                                                        $category = get_the_category();
                                                        echo $category[0]->name;
                                                    ?>
                                                </p>
                                            </span>
                                            <!-- 予約投稿時 表示 -->
                                            <?php if( get_post_status( $post->ID ) == 'future'): ?>
                                                <span class="c-recipe-coming">coming soon</span>
                                            <?php endif; ?>
                                        </div>
                                        <!-- /.c-recipe-img -->
                                        <div class="c-recipe-txt">
                                            <p class="c-recipe-txt__exc"><?php the_field( 'sub_ttl' ); ?></p>
                                            <h3 class="c-recipe-txt__ttl"><?php the_title(); ?></h3>
                                        </div>
                                    <!-- 予約投稿時 リンクなし -->
                                    <?php if( get_post_status( $post->ID ) == 'publish'): ?>
                                        </a>
                                    <?php endif; ?>
                                </li>