
            <section class="p-products c-frame">
                <div class="p-products-inner">
                    <div class="p-products-ttl c-sec-ttl">
                        <h3>Products</h3>
                        <p>商品のご紹介</p>
                    </div>
                    <div class="p-products-wrap">
                        <ul class="p-products-list">
                            <li class="p-products-item">
                                <a href="#">
                                    <figure class="p-products-img">
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/products.png'); ?>" alt="moringa powder">
                                    </figure>
                                </a>
                            </li>
                            <li class="p-products-item">
                                <a href="#">
                                    <figure class="p-products-img">
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/products.png'); ?>" alt="moringa soba">
                                    </figure>
                                </a>
                            </li>
                            <li class="p-products-item">
                                <a href="#">
                                    <figure class="p-products-img">
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/products.png'); ?>" alt="coupon">
                                    </figure>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="p-cta" style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/img/moringa.jpg'); ?>);">
                <div class="p-cta-inner">
                    <div class="p-cta-copy">
                        <h3>
                        <span>モリンガをお買い求めの際は</span>
                        <span>こちらからお願いいたいします</span>
                    </h3>
                    </div>
                    <div class="p-cta-btn">
                        <a href="<?php esc_url( home_url('/') );?>"  ontouchstart=""><span>食べるモリンガ</span>体験する</a>
                    </div>
                </div>
                <!-- /.p-cta-inner -->
            </section>

        </main>
        <footer class="l-footer">
            <div class="l-footer-inner">
                <nav class="p-footer-nav">
                    <ul class="p-footer-nav__list">
                        <li class="p-footer-nav__item">
                            <a href="<?php esc_url( home_url('/') );?>">ホーム</a>
                        </li>
                        <li class="p-footer-nav__item">
                            <a href="<?php esc_url( home_url('/') );?>">商品について</a>
                        </li>
                        <li class="p-footer-nav__item">
                            <a href="<?php esc_url( home_url('/') );?>">ジャパンナチュラル研究所</a>
                        </li>
                        <li class="p-footer-nav__item">
                            <a href="<?php esc_url( home_url('/') );?>">ご購入はこちらから</a>
                        </li>
                        <li class="p-footer-nav__item">
                            <a href="<?php esc_url( home_url('/') );?>">レシピ</a>
                        </li>
                    </ul>
                </nav>
                <div class="p-footer-bottom">
                    <div class="p-footer-bottom__inner">
                        <div class="p-footer-sns">
                            <ul class="p-footer-sns__list">
                                <li class="p-footer-sns__item">
                                    <a href="<?php esc_url( home_url('/') );?>">
                                        <figure class="p-footer-sns__icon"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/products.png'); ?>" alt=""></figure>
                                    </a>
                                </li>
                                <li class="p-footer-sns__item">
                                    <a href="<?php esc_url( home_url('/') );?>">
                                        <figure class="p-footer-sns__icon"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/products.png'); ?>" alt=""></figure>
                                    </a>
                                </li>
                                <li class="p-footer-sns__item">
                                    <a href="<?php esc_url( home_url('/') );?>">
                                        <figure class="p-footer-sns__icon"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/products.png'); ?>" alt=""></figure>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.p-footer-sns -->
                        <nav class="p-footer-bottom__nav">
                            <ul class="p-footer-bottom__list">
                                <li class="p-footer-bottom__item"><a href="">お問い合わせ</a></li>
                                <li class="p-footer-bottom__item"><a href="">サイトマップ</a></li>
                                <li class="p-footer-bottom__item"> <a href="">個人情報保護について</a></li>
                            </ul>
                            <ul class="p-footer-bottom__list">
                                <li class="p-footer-bottom__item"><a href="">ソーシャルメディアポリシー</a></li>
                                <li class="p-footer-bottom__item"> <a href="">ご利用規約</a></li>
                            </ul>
                            <ul class="p-footer-bottom__list">
                                <li class="p-footer-bottom__item"><a href="">アクセシビリティへの対応方針</a></li>
                            </ul>
                        </nav>
                        
                    </div>
                    <!-- /.p-footer-bottom__inner -->
                </div>
                <!-- /.p-footer-bottom -->
                <div class="l-footer-copy"><small>Copyright JNL Co., Ltd. All Right Reserved.</small></div>
            </div>
            <!-- /.l-footer-inner -->

        </footer>

        <?php wp_footer(); ?>

    </body>
</html>