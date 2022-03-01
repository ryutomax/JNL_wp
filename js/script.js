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

// IE対応 object-fit ////////////////////////

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

// IE対応 object-fit 終了////////////////////////


// タブ切り替え//////////////////////////////////////////////

// $(function() {
//     $('.p-recipe-tab').click(function() {
//         var index = $('.p-recipe-tab').index(this);
//         $('.p-recipe-cont__list').css('display','none');
//         $('.p-recipe-cont__list').eq(index).fadeIn(2000);
//         $('.p-recipe-tab').toggleClass('is-select');
//     });
// });

// タブ切り替え 終了/////////////////////////////////////////

$(function() {
	$('.tab_btn').click(function() {
		var index02 = $('.tab_btn').index(this);
		$('.tab_panel').css('display','none');
		$('.tab_panel').eq(index02).fadeIn(1000);
		$('.tab_btn').removeClass('active');
		$(this).addClass('active');
	});
	var index01 = $('tab_btn.active').index();
	$('.tab_panel').css('display','none');
	$('.tab_panel').eq(index01).fadeIn(1000);
});