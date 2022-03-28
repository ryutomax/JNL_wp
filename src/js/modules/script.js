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

// footer nav anime////////////////////////////

$('.js-borderNone a').hover(
    function() {
        $(".js-borderNone").toggleClass("is-borderNone");
    }
);
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


// パンくずリスト<br>削除///////////////////////
$(function() {
    $('.current-item').children('br').remove();
});
// パンくずリスト<br>削除 終了///////////////////////

//Site reviewsの配置入れ替え///////////////////
$(function() {
    $('.glsr-field-textarea').insertAfter('.glsr-field-text');
});
//Site reviewsの配置入れ替え 終了///////////////////


//正規表現 [カスタムフィールド]/////////////////////////////////

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

//正規表現 end ////////////////////////////////////