<?php get_template_part('template_header/header'); ?>

<main class="l-main">
    <!-- ページTOPスライドのテンプレート呼び出し -->
    <?php get_template_part('template_parts/topSlider'); ?>

    <section class="p-404 c-frame">
        <div class="p-404-inner">
            <p class="p-404__txt">申し訳ありません。<br>お探しのページはありません。</p>
            <p class="p-404__link"><a href="/#/">ホームへ戻る</a></p>
        </div>
    </section>

    <!-- productsCtaのテンプレート呼び出し -->
    <?php get_template_part('template_parts/productsCta'); ?>

</main>

<?php get_template_part('template_footer/footer'); ?>