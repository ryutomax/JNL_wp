<!DOCTYPE html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex">
        <title> 【JNL】 モリンガパウダーレシピサイト</title>
        <meta name="description" content="美味しい、ヘルシーモリンガパウダーのレシピをご紹介します">

        <?php wp_head(); ?>
    </head>

    <body>
    <?php wp_body_open(); ?>

        <header class="l-header u-zindex__1000 js-header-scroll" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="300">
            <div class="l-header-inner">
                <h1 class="p-header-logo js-header-h65-scroll">
                    <a class="p-header-logo__img js-img-bg object-fit"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/moringa-powder.png'); ?>" alt="main logo"></a>
                </h1>

                <nav class="p-header-nav js-nav__open">
                    <ul class="p-header-nav__list">
                        <li class="p-header-nav__item">
                            <a href="">ホーム</a>
                        </li>
                        <li class="p-header-nav__item js-news">
                            <a href="#">お知らせ</a>
                        </li>
                        <li class="p-header-nav__item js-recipe">
                            <a href="#">レシピ</a>
                        </li>
                        <li class="p-header-nav__item js-products">
                            <a href="#">商品のご紹介</a>
                        </li>
                        <li class="p-header-nav__item c-ctaBtn">
                            <a href="/contact/">お問い合わせ</a>
                        </li>
                    </ul>
                </nav>
                <div class="p-header-btn__area">
                    <button class="p-header-nav__btn js-nav__btn c-hamburger__btn u-zindex__100">
                        <span class="p-nav-bar c-bar"></span>
                        <span class="p-nav-bar c-bar"></span>
                        <span class="p-nav-bar c-bar"></span>
                        <span class="p-nav-bar c-bar"></span>
                    </button>
                </div>
                <!-- /.p-header-btn__area -->
            </div>
            <!-- /.l-header-inner -->
        </header>
