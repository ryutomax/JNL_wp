// アコーディオン実装
$(function(){
    $('.js-accordion__q').click(function() {
        // click要素の次の指定要素
        $(this).next('.js-accordion__a').slideToggle();
        // 指定の子要素を取得
        $(this).find('.js-minus').toggleClass('is-active');
    });
});
// アコーディオン実装終了/////////////////////////////////////////////


// ハンバーガーメニュー
$(function(){
    $('.js-nav__btn').on('click',function(){
        // ハンバーガーアイコン変形
        $(this).toggleClass('is-btn__active');
        // メニュー開閉
        $('.js-nav__open').fadeToggle(500);

        return false;

    });
});
$(function(){
    $('.header-nav__item').on('click',function(){
        // メニュー閉じる
        $('.nav').removeClass('header__menu-open');
        // ハンバーガーアイコン変形
        $('.js-header-nav-btn').removeClass('is-btn-active');

        return false;

    });
});
// ハンバーガーメニュー終了/////////////////////////////////////////////

// AOS/////////////////////////////////

$(function(){
    AOS.init();
});

// AOS 終了////////////////////////////

// スクロールヒント//////////////////////

$(function(){
    new ScrollHint('.js-scrollable', {
        applyToParents: true,
        suggestiveShadow: true,
        enableOverflowScrolling: true,
        i18n: {
            scrollable: 'スクロールできます'
        }
    });

});
// スクロールヒント 終了//////////////////////

(function ($) {
    // image bg
    $.fn.imageBg = function () {
        var $this = this;
        var imgSrc = $this.find('img').attr('src');
        $this.find('img').hide();
        $this.css({
            backgroundImage: 'url("' + imgSrc + '")'
        });
    }
    //↓実行
    $('.js-img-bg').each(function () {
        $(this).imageBg();
    });

})(jQuery);