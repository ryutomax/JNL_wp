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


// スクロールアニメ//////////////////////////

//[waveAnime]
//|||||||||||||||||||||||||||||||||||||||||||||
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

//[fadeUpAnime]
//|||||||||||||||||||||||||||||||||||||||||||||
    function fadeUpAnime(){
    $('.js-fade').each(function(){
        const elemPos = $(this).offset().top+100;//要素より、50px上の
        const scroll = $(window).scrollTop();
        const windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight){
            $(this).addClass('is-show__fadeup');;// 画面内に入ったらfadeInというクラス名を追記
        }
    });
}
// 画面をスクロールをしたら動く場合の記述
    $(window).scroll(function (){ fadeUpAnime(); });

// 画面が読み込まれたらすぐに動く場合の記述
    $(window).on('load', function(){ fadeUpAnime(); });

// スクロールアニメ 終了//////////////////////////////////