// swiper////////////////////////////////

const mySwiper = new Swiper('.swiper-container', {
    speed: 3000,
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    loop: true,
	autoplay: {
		delay: 3000,
		stopOnLastSlide: false,
		disableOnInteraction: false,
		reverseDirection: false
	},
    navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev'
	}
});

// swiper 終了////////////////////////////////

// AOS/////////////////////////////////

AOS.init({
    once: true,
});

// AOS 終了////////////////////////////

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
	$('.js-tab').click(function() {
		var index02 = $('.js-tab').index(this);
		$('.js-tab-cont').css('display','none');
		$('.js-tab-cont').eq(index02).fadeIn(2000);
		$('.js-tab').removeClass('is-tab-select');
		$(this).addClass('is-tab-select');
	});
    // 初期状態//
	var index01 = $('.js-tab.is-tab-select').index();
	$('.js-tab-cont').css('display','none');
	$('.js-tab-cont').eq(index01).fadeIn(2000);
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

function FixedAnime() {
    $(window).scroll(function () {
        var headerH = $(".js-header-scroll").outerHeight(true);      //headerの高さを取得
        var $header = $('.js-header-scroll');

        // header高以上スクロールしたら処理
        if ($(window).scrollTop() > headerH) {
        $header.addClass('is-header__op06');
        $header.addClass('is-header__h65');
        $header.addClass('is-header__slidein');
        $header.removeAttr('data-aos');       //AOS削除

        } else {

        $header.removeClass('is-header__op06');
        $header.removeClass('is-header__h65');
        $header.removeClass('is-header__slidein');

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
}
//スクロール途中からヘッダーの高さを変化させる関数を呼ぶ
$(window).on('load', function () {
	FixedAnime();
});

// ヘッダー変形 終了/////////////////////////////////////////////


//Site reviewsの配置入れ替え///////////////////
$(function() {
    $('.glsr-field-textarea').insertAfter('.glsr-field-text');
});
//Site reviewsの配置入れ替え 終了///////////////////


// パンくずリスト<br>削除///////////////////////
$(function() {
    $('.current-item').children('br').remove();
});
// パンくずリスト<br>削除 終了///////////////////////

// セクションタイトルアニメ//////////////////////////
function waveAnime(){
    $('.js-wave').each(function(){
        const elemPos = $(this).offset().top-50;//要素より、50px上の
        const scroll = $(window).scrollTop();
        const windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight){
            $(this).addClass('is-show__wave');// 画面内に入ったらfadeInというクラス名を追記
        } else {
            $(this).removeClass('is-show__wave');// 画面外に出たらfadeInというクラス名を外す
        }
    });
}
// 画面をスクロールをしたら動く場合の記述
    $(window).scroll(function (){ waveAnime(); });

// 画面が読み込まれたらすぐに動く場合の記述
    $(window).on('load', function(){ waveAnime(); });

// セクションタイトルアニメ 終了//////////////////////////



// $(function() {
//     var str = document.getElementById("tableTtl").innerHTML;

// str = str.replace(/＜/g,'<br><b class="p-detail-tableTtl">＜');
// str = str.replace(/＞/g,'＞</b>');

// document.getElementById("tableTtl").innerHTML = str;
// });

$(function() {
    var str = document.getElementById("tableTtl").innerHTML;

    str = str.replace(/＜(.*?)＞/g,'<br><b class="p-detail-tableTtl">＜$1＞</b>');

    document.getElementById("tableTtl").innerHTML = str;
});

$(function() {
    var str = document.getElementById("tableTtl2").innerHTML;

    str = str.replace(/＜(.*?)＞/g,'<br><b class="p-detail-tableTtl">＜$1＞</b>');

    document.getElementById("tableTtl2").innerHTML = str;
});


// getElementsByClassName = class

// getElementsByTagName = HTMLtag

// getElementById = id