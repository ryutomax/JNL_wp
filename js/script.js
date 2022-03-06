// swiper////////////////////////////////

var mySwiper = new Swiper('.swiper-container', {
    speed: 3000,
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    loop: true,
	// autoplay: {
	// 	delay: 3000,
	// 	stopOnLastSlide: false,
	// 	disableOnInteraction: true,
	// 	reverseDirection: false
	// }
});

// swiper 終了////////////////////////////////

// ハンバーガーメニュー

$(".js-nav__btn").click(function () {//ボタンがクリックされたら
    $(this).toggleClass('is-btn__active');//ボタン自身に activeクラスを付与し
    $(".js-nav__open").toggleClass('is-menu__open');//ナビゲーションにpanelactiveクラスを付与
});

$("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".js-nav__btn").removeClass('is-btn__active');//ボタンの activeクラスを除去し
    $(".js-nav__open").removeClass('is-menu__open');//ナビゲーションのpanelactiveクラスも除去
});

// ハンバーガーメニュー終了/////////////////////////////////////////////

//AOSクラスを強制付与 ////////////////////////////////

// var tagElements = document.getElementsByTagName('table');
// for (var i = 0; i < tagElements.length; i++) {
// 	tagElements[i].setAttribute('data-aos', 'zoom-in');
// 	tagElements[i].setAttribute('data-aos-duration', '2000');
// }

//AOSクラスを強制付与 ////////////////////////////////

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

$(function() {
	$('.p-recipe-tab').click(function() {
		var index02 = $('.p-recipe-tab').index(this);
		$('.p-recipe-cont__list').css('display','none');
		$('.p-recipe-cont__list').eq(index02).fadeIn(2000);
		$('.p-recipe-tab').removeClass('is-tab-select');
		$(this).addClass('is-tab-select');
	});
    // 初期状態//
	var index01 = $('.p-recipe-tab.is-tab-select').index();
	$('.p-recipe-cont__list').css('display','none');
	$('.p-recipe-cont__list').eq(index01).fadeIn(2000);
	// $('.p-recipe-cont__list').eq(index01).css('display','block');
});

// タブ切り替え 終了/////////////////////////////////////////

// スムーススクロール///////////////////////////////////////////////
$(function ($) {
    $('.js-news').on('click',function(){
        const faqTop = $('.p-news').offset().top;
        $("html,body").animate({scrollTop: faqTop-80},1000);
    });
    $('.js-recipe').on('click',function(){
        const faqTop = $('.p-recipe').offset().top;
        $("html,body").animate({scrollTop: faqTop-80},1000);
    });
    $('.js-products').on('click',function(){
        const faqTop = $('.p-products').offset().top;
        $("html,body").animate({scrollTop: faqTop-80},1000);
    });
});
// スムースクロール終了/////////////////////////////////////////////


// ヘッダー変形/////////////////////////////////////////////
$(function () {
    $(window).scroll(function () {
        var $header = $('.js-header-scroll');

      // 200以上スクロールしたら処理
        if ($(window).scrollTop() > 200) {
        $header.addClass('is-header__op06');
        $header.addClass('is-header__h65');
        $header.removeAttr('data-aos');       //AOS削除

        } else {

        $header.removeClass('is-header__op06');
        $header.removeClass('is-header__h65');

        }
    });
		/* ウィンドウサイズ860以上の処理を記述 */
    $(window).on('load scroll', function () {
        if (window.matchMedia('(min-width: 860px)').matches) {
            var $logo = $('.js-header-h65-scroll');
            if ($(window).scrollTop() > 200) {
                $logo.addClass('is-header__h65');
        }else {
            $logo.removeClass('is-header__h65');;
        }}
    });

});
// ヘッダー変形 終了/////////////////////////////////////////////

// AOS/////////////////////////////////

$(function(){
    AOS.init();
});

// AOS 終了////////////////////////////