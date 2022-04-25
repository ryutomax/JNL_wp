<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Fahkwang:wght@600&family=Fjalla+One&family=Montserrat+Subrayada&family=Zen+Maru+Gothic:wght@400;700&display=swap" rel="stylesheet">

        <?php wp_head(); ?>
    </head>

    <body>
    <?php wp_body_open(); ?>

        <header class="l-header u-zindex__1000 js-header-scroll" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="300">
            <div class="l-header-inner">
                <h1 class="p-header-logo js-header-h65-scroll">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header-logo__img js-img-bg object-fit"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/main_logo.svg'); ?>" alt="main logo"></a>
                </h1>

                <nav class="p-header-nav js-nav__open">
                    <ul class="p-header-nav__list">
                        <li class="p-header-nav__item">
                            <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
                        </li>
                        <li class="p-header-nav__item js-news">
                        <?php if(is_front_page()): ?>
                            <a href="#">お知らせ</a>
                        <?php else: ?>
                            <a href="<?php echo esc_url(home_url('/news'));?>">お知らせ</a>
                        <?php endif; ?>
                        </li>
                        <li class="p-header-nav__item js-recipe">
                        <?php if(is_front_page()): ?>
                            <a href="#">レシピ</a>
                        <?php else: ?>
                            <a href="<?php echo esc_url(home_url('/recipe'));?>">レシピ</a>
                        <?php endif; ?>
                        </li>
                        <?php if(is_page(array( 'contact', 'confirm', 'thanks','privacypolicy' ) )): ?>
                        <li class="p-header-nav__item">
                            <a href="<?php echo esc_url(home_url('https://item.rakuten.co.jp/jn-lab/c/0000000129/'));?>#products">商品のご紹介</a>
                        </li>
                        <?php else: ?>
                        <li class="p-header-nav__item js-products">
                            <a href="#">商品のご紹介</a>
                        </li>
                        <?php endif; ?>
                        <li class="p-header-nav__item c-ctaBtn">
                            <a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
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
