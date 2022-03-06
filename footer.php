        </main>
        <footer class="l-footer">
            <div class="l-footer-inner">
                <nav class="p-footer-nav">
                    <ul class="p-footer-nav__list">
                        <li class="p-footer-nav__item" ontouchstart="">
                            <a href="<?php esc_url( home_url('/') );?>">ホーム</a>
                        </li>
                        <li class="p-footer-nav__item" ontouchstart="">
                            <a href="<?php esc_url( home_url('/') );?>">商品について</a>
                        </li>
                        <li class="p-footer-nav__item" ontouchstart="">
                            <a href="<?php esc_url( home_url('/') );?>">ジャパンナチュラル研究所</a>
                        </li>
                        <li class="p-footer-nav__item" ontouchstart="">
                            <a href="<?php esc_url( home_url('/') );?>">ご購入はこちらから</a>
                        </li>
                        <li class="p-footer-nav__item" ontouchstart="">
                            <a href="<?php esc_url( home_url('/') );?>">レシピ</a>
                        </li>
                    </ul>
                </nav>
                <div class="p-footer-bottom">
                    <div class="p-footer-bottom__inner">
                        <div class="p-footer-sns">
                            <ul class="p-footer-sns__list">
                                <li class="p-footer-sns__item">
                                    <a href="">
                                        <figure class="p-footer-sns__icon"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/products.png'); ?>" alt=""></figure>
                                    </a>
                                </li>
                                <li class="p-footer-sns__item">
                                    <a href="">
                                        <figure class="p-footer-sns__icon"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/products.png'); ?>" alt=""></figure>
                                    </a>
                                </li>
                                <li class="p-footer-sns__item">
                                    <a href="">
                                        <figure class="p-footer-sns__icon"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/products.png'); ?>" alt=""></figure>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.p-footer-sns -->
                        <nav class="p-footer-bottom__nav">
                            <ul class="p-footer-bottom__list">
                                <li class="p-footer-bottom__item"><a href="<?php esc_url( home_url('/') );?>">お問い合わせ</a></li>
                                <li class="p-footer-bottom__item"><a href="<?php esc_url( home_url('/') );?>">サイトマップ</a></li>
                                <li class="p-footer-bottom__item"> <a href="<?php esc_url( home_url('/') );?>">個人情報保護について</a></li>
                            </ul>
                            <ul class="p-footer-bottom__list">
                                <li class="p-footer-bottom__item"><a href="<?php esc_url( home_url('/') );?>">ソーシャルメディアポリシー</a></li>
                                <li class="p-footer-bottom__item"> <a href="<?php esc_url( home_url('/') );?>">ご利用規約</a></li>
                            </ul>
                            <ul class="p-footer-bottom__list">
                                <li class="p-footer-bottom__item"><a href="<?php esc_url( home_url('/') );?>">アクセシビリティへの対応方針</a></li>
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