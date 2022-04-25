        <footer class="l-footer">
            <div class="l-footer-inner">
                <nav class="p-footer-nav">
                    <ul class="p-footer-nav__list">
                        <li class="p-footer-nav__item">
                            <a href="<?php echo esc_url( home_url('/') );?>" ontouchstart="">ホーム</a>
                        </li>
                        <li class="p-footer-nav__item">
                            <a href="<?php echo esc_url( home_url('/news') );?>" ontouchstart="">お知らせ</a>
                        </li>
                        <li class="p-footer-nav__item">
                            <a href="<?php echo esc_url( home_url('/recipe') );?>" ontouchstart="">レシピ</a>
                        </li>
                        <li class="p-footer-nav__item js-products">
                            <a href="<?php echo esc_url('/');?>#products" ontouchstart="">商品のご紹介</a>
                        </li>
                        <li class="p-footer-nav__item">
                            <a href="<?php echo esc_url(home_url('/contact'));?>" ontouchstart="">お問い合わせ</a>
                        </li>
                    </ul>
                </nav>
                <div class="p-footer-bottom">
                    <div class="p-footer-bottom__inner">
                        <nav class="p-footer-bottom__nav">
                            <ul class="p-footer-bottom__list">
                                <li class="p-footer-bottom__item"><a href="<?php echo esc_url( home_url('/contact') );?>">お問い合わせ</a></li>
                                <li class="p-footer-bottom__item"> <a href="<?php echo esc_url( home_url('/privacypolicy') );?>">プライバシーポリシー</a></li>
                            </ul>
                            <ul class="p-footer-bottom__list">
                                <li class="p-footer-bottom__item"><a href="<?php echo esc_url( home_url('/sitemap') );?>">サイトマップ</a></li>
                                <li class="p-footer-bottom__item"> <a href="<?php echo esc_url( home_url('/company') );?>">会社概要</a></li>
                            </ul>
                        </nav>
                        <div class="p-footer-copy"><small>Copyright JNL Co., Ltd. All Right Reserved.</small></div>
                    </div>
                    <!-- /.p-footer-bottom__inner -->
                </div>
                <!-- /.p-footer-bottom -->
            </div>
            <!-- /.l-footer-inner -->

        </footer>

        <?php wp_footer(); ?>

    </body>

</html>