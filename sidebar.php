<aside class="p-sidebar">
                <div class="p-sidebar-inner">
                    <div class="p-sidebar-section">
                        <div class="p-sidebar-section__ttl"><p>関連記事</p></div>
                        <ul class="p-sidebar-section__list-wp">
                            <?php

                            $categ = get_the_category($post->ID);
                            $catID = array();

                            foreach($categ as $cat){
                                array_push($catID, $cat -> cat_ID);
                            }

                            $args = array(
                                'post__not_in' => array($post->ID),
                                'category__in' => $catID,
                                'post_type'=> 'blog',
                                'posts_per_page' => 3,
                                'orderby' => 'rand'
                            );

                            $the_query = new WP_Query($args);
                            if($the_query -> have_posts()) :
                            while($the_query -> have_posts()) : $the_query -> the_post();
                            ?>

                            <li class="p-sidebar-section__item-wp">
                                <!-- <figure class="p-sidebar__thumnail-wp"><img src="" alt="thumnail"></figure> -->
                                <figure class="p-sidebar__thumnail-wp">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if ( has_post_thumbnail() ): ?><!-- if文による条件分岐 アイキャッチが有る時-->
                                        <?php the_post_thumbnail( 'thumbnail' ); ?>
                                        <?php else: ?><!-- アイキャッチが無い時-->
                                        <img src="<?php echo get_template_directory_uri();?>/img/noimage.png" alt="アイキャッチがない時の画像です。" />
                                        <?php endif; ?>
                                    </a>
                                </figure>

                                <h3 class="p-sidebar__ttl-wp">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if(mb_strlen($post->post_title, 'UTF-8')>55){
                                            $title= mb_substr($post->post_title, 0, 55, 'UTF-8');
                                            echo $title.'・・・';
                                        }else{
                                            echo $post->post_title;
                                        }
                                        ?>
                                    </a>
                                </h3>
                            </li>
                            <?php endwhile; ?>
                            <?php else: ?>
                                <p>記事がありません。</p>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                    </div>
                    <!-- /.l-sidebar-section -->
                    <div class="p-sidebar-section">
                        <div class="p-sidebar-section__ttl"><p>カテゴリー</p></div>
                        <ul class="p-sidebar-section__list-wp">
                            <?php
                            	// 親カテゴリーのものだけを一覧で取得
                                $args = array(
                                    'parent' => 0,
                                    'orderby' => 'term_order',
                                    'order' => 'ASC'
                                );
                                $categories = get_categories( $args );
                            ?>
                            <?php foreach( $categories as $category ) : ?>
                                <li class="p-sidebar-section__cat-wp">
                                    <a href="<?php echo get_category_link( $category->term_id ); ?>">
                                        ・<?php echo $category->name; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <!-- /.l-sidebar-section -->
                </div>
                <!-- /.l-sidebar-inner -->
            </aside>