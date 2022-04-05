/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/entry.js":
/*!*************************!*\
  !*** ./src/js/entry.js ***!
  \*************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _modules_script__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/script */ \"./src/js/modules/script.js\");\n/* harmony import */ var _modules_script__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_modules_script__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _modules_plugin__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/plugin */ \"./src/js/modules/plugin.js\");\n/* harmony import */ var _modules_plugin__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_modules_plugin__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _modules_scroll__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/scroll */ \"./src/js/modules/scroll.js\");\n/* harmony import */ var _modules_scroll__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_modules_scroll__WEBPACK_IMPORTED_MODULE_2__);\n\n\n\n\n\n(_modules_script__WEBPACK_IMPORTED_MODULE_0___default());\n(_modules_plugin__WEBPACK_IMPORTED_MODULE_1___default());\n(_modules_scroll__WEBPACK_IMPORTED_MODULE_2___default());\n\n\n//# sourceURL=webpack://jnl_recipe/./src/js/entry.js?");

/***/ }),

/***/ "./src/js/modules/plugin.js":
/*!**********************************!*\
  !*** ./src/js/modules/plugin.js ***!
  \**********************************/
/***/ (function() {

eval("// AOS/////////////////////////////////\nAOS.init({\n    once: true,\n});\n// AOS 終了////////////////////////////\n\n//# sourceURL=webpack://jnl_recipe/./src/js/modules/plugin.js?");

/***/ }),

/***/ "./src/js/modules/script.js":
/*!**********************************!*\
  !*** ./src/js/modules/script.js ***!
  \**********************************/
/***/ (function() {

eval("// ========================================\n// ハンバーガーメニュー\n// ========================================\n$(\".js-nav__btn\").click(function () {//ボタンがクリックされたら\n    $(this).toggleClass('is-btn__active');//ボタン自身に activeクラスを付与し\n    $(\".js-nav__open\").toggleClass('is-menu__open');//ナビゲーションにpanelactiveクラスを付与\n});\n\n$(\"#g-nav a\").click(function () {//ナビゲーションのリンクがクリックされたら\n    $(\".js-nav__btn\").removeClass('is-btn__active');//ボタンの activeクラスを除去し\n    $(\".js-nav__open\").removeClass('is-menu__open');//ナビゲーションのpanelactiveクラスも除去\n});\n// ========================================\n// ハンバーガーメニュー終了\n// ========================================\n\n// ========================================\n// IE対応 object-fit\n// ========================================\n(function ($) {\n    // image bg\n    $.fn.imageBg = function () {\n        var $this = this;\n        var imgSrc = $this.find('img').attr('src');\n        $this.find('img').hide();\n        $this.css({\n            backgroundImage: 'url(\"' + imgSrc + '\")'\n        });\n    }\n    //↓実行\n    $('.js-img-bg').each(function () {\n        $(this).imageBg();\n    });\n})(jQuery);\n// ========================================\n// IE対応 object-fit 終了\n// ========================================\n\n// ========================================\n// タブ切り替え\n// ========================================\n$(function() {\n\t$('.js-tab').click(function() {\n\t\tvar index02 = $('.js-tab').index(this);\n\t\t$('.js-tab-cont').css('display','none');\n\t\t$('.js-tab-cont').eq(index02).fadeIn(2000);\n\t\t$('.js-tab').removeClass('is-tab-select');\n\t\t$(this).addClass('is-tab-select');\n\t});\n    // 初期状態//\n\tvar index01 = $('.js-tab.is-tab-select').index();\n\t$('.js-tab-cont').css('display','none');\n\t$('.js-tab-cont').eq(index01).fadeIn(2000);\n});\n// ========================================\n// タブ切り替え 終了\n// ========================================\n\n// ========================================\n// パンくずリスト<br>削除/\n// ========================================\n$(function() {\n    $('.current-item').children('br').remove();\n});\n// ========================================\n// パンくずリスト<br>削除 終了\n// ========================================\n\n// ========================================\n// Site reviewsの配置入れ替え\n// ========================================\n$(function() {\n    $('.glsr-field-textarea').insertAfter('.glsr-field-text');\n});\n// ========================================\n// Site reviewsの配置入れ替え 終了\n// ========================================\n\n//# sourceURL=webpack://jnl_recipe/./src/js/modules/script.js?");

/***/ }),

/***/ "./src/js/modules/scroll.js":
/*!**********************************!*\
  !*** ./src/js/modules/scroll.js ***!
  \**********************************/
/***/ (function() {

eval("// ========================================\n// スムーススクロール\n// ========================================\n$(function ($) {\n    $('.js-news').on('click',function(){\n        const faqTop = $('.p-news').offset().top;\n        $(\"html,body\").animate({scrollTop: faqTop-80},1000);\n    });\n    $('.js-recipe').on('click',function(){\n        const faqTop = $('.p-recipe').offset().top;\n        $(\"html,body\").animate({scrollTop: faqTop-80},1000);\n    });\n    $('.js-products').on('click',function(){\n        const faqTop = $('.p-products').offset().top;\n        $(\"html,body\").animate({scrollTop: faqTop-80},1000);\n    });\n});\n// ========================================\n// スムースクロール終了\n// ========================================\n\n// ========================================\n// ヘッダー変形\n// ========================================\nfunction FixedAnime() {\n    $(window).scroll(function () {\n        var headerH = $(\".js-header-scroll\").outerHeight(true);      //headerの高さを取得\n        var $header = $('.js-header-scroll');\n\n        // header高以上スクロールしたら処理\n        if ($(window).scrollTop() > headerH) {\n        $header.addClass('is-header__op06');\n        $header.addClass('is-header__h65');\n        $header.addClass('is-header__slidein');\n        $header.removeAttr('data-aos');       //AOS削除\n\n        } else {\n\n        $header.removeClass('is-header__op06');\n        $header.removeClass('is-header__h65');\n        $header.removeClass('is-header__slidein');\n\n        }\n    });\n\t\t/* ウィンドウサイズ860以上の処理を記述 */\n    $(window).on('load scroll', function () {\n        if (window.matchMedia('(min-width: 860px)').matches) {\n            var $logo = $('.js-header-h65-scroll');\n            if ($(window).scrollTop() > 200) {\n                $logo.addClass('is-header__h65');\n        }else {\n            $logo.removeClass('is-header__h65');;\n        }}\n    });\n}\n//スクロール途中からヘッダーの高さを変化させる関数を呼ぶ\n$(window).on('load', function () {\n\tFixedAnime();\n});\n// ========================================\n// ヘッダー変形 終了\n// ========================================\n\n// ========================================\n// スクロールアニメ\n// ========================================\n\n// =========================\n// waveAnime\n// =========================\nfunction waveAnime(){\n    $('.js-wave').each(function(){\n        const elemPos = $(this).offset().top-50;//要素より、50px上の\n        const scroll = $(window).scrollTop();\n        const windowHeight = $(window).height();\n        if (scroll >= elemPos - windowHeight){\n            $(this).addClass('is-show__wave');// 画面内に入ったらfadeInというクラス名を追記\n        } else {\n            $(this).removeClass('is-show__wave');// 画面外に出たらfadeInというクラス名を外す\n        }\n    });\n}\n// 画面をスクロールをしたら動く場合の記述\n    $(window).scroll(function (){ waveAnime(); });\n\n// 画面が読み込まれたらすぐに動く場合の記述\n    $(window).on('load', function(){ waveAnime(); });\n\n// =========================\n// fadeUpAnime\n// =========================\n    function fadeUpAnime(){\n    $('.js-fade').each(function(){\n        const elemPos = $(this).offset().top+100;//要素より、50px上の\n        const scroll = $(window).scrollTop();\n        const windowHeight = $(window).height();\n        if (scroll >= elemPos - windowHeight){\n            $(this).addClass('is-show__fadeup');;// 画面内に入ったらfadeInというクラス名を追記\n        }\n    });\n}\n// 画面をスクロールをしたら動く場合の記述\n    $(window).scroll(function (){ fadeUpAnime(); });\n\n// 画面が読み込まれたらすぐに動く場合の記述\n    $(window).on('load', function(){ fadeUpAnime(); });\n// ========================================\n// スクロールアニメ 終了\n// ========================================\n\n//# sourceURL=webpack://jnl_recipe/./src/js/modules/scroll.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	!function() {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = function(module) {
/******/ 			var getter = module && module.__esModule ?
/******/ 				function() { return module['default']; } :
/******/ 				function() { return module; };
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/js/entry.js");
/******/ 	
/******/ })()
;