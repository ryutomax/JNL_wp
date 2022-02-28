"use strict";

//----------------------------------------------------------------------
//  モジュール読み込み
//----------------------------------------------------------------------
const gulp = require("gulp");
const { src, dest, watch, series, parallel } = require("gulp");

const plumber = require("gulp-plumber");
const sassGlob = require("gulp-sass-glob-use-forward");
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require("gulp-autoprefixer");
const purgecss = require("gulp-purgecss");
const cleancss = require("gulp-clean-css");


//----------------------------------------------------------------------
//  関数定義
//----------------------------------------------------------------------
function compile(done) {
    src(
        "./scss/**/*.scss",
        )
        .pipe(plumber())                   // watch中にエラーが発生してもwatchが止まらないようにする
        .pipe(sassGlob())                  // glob機能を使って@useや@forwardを省略する
        .pipe(sass(
            {
                includePaths: ['./scss/']
            }
        ))                                 // sassのコンパイルをする
        .pipe(autoprefixer())              // ベンダープレフィックスを自動付与する
        .pipe(dest("./css_origin/"));

    done();
}

function clean(done) {
    src(
        "./css_origin/*.css",
        )
        .pipe(plumber())                                  // watch中にエラーが発生してもwatchが止まらないようにする
        .pipe(purgecss({
            content: ["./*.html","./js/*.js","./*.php"],  // 指定したファイル（SCSS）が使用される可能性のあるファイルを全て指定
        }))
        .pipe(cleancss())                                 // コードの不要なインデントや改行を削除
        .pipe(dest("./css/"));

    done();
}

//----------------------------------------------------------------------
//  watch関数定義
//----------------------------------------------------------------------
function watchTask(done) {
    // watch( "監視したいファイル(またはフォルダ)を指定" , 処理 );
    watch("./scss/**/*.scss" , series(compile,clean));
}
//----------------------------------------------------------------------
//  タスク定義
//----------------------------------------------------------------------
exports.watch = series(watchTask);

/************************************************************************/
/*  END OF FILE                                                         */

// // img最適化

// //----------------------------------------------------------------------
// //  モジュール読み込み
// //----------------------------------------------------------------------

const imageMin = require("gulp-imagemin");
const mozjpeg = require("imagemin-mozjpeg");
const pngquant = require("imagemin-pngquant");
const changed = require("gulp-changed");

// // //----------------------------------------------------------------------
// // //  関数定義
// // //----------------------------------------------------------------------
function imagemin(done) {
    src("./img_origin/*")
    .pipe(changed("./img/"))
    .pipe(
        imageMin([
            pngquant({
                quality: [0.6, 0.7],
                speed: 1,
            }),
            mozjpeg({ quality: 65 }),
            imageMin.svgo(),
            imageMin.optipng(),
            imageMin.gifsicle({ optimizationLevel: 3 }),
        ])
    )
    .pipe(dest("./img/"));

    done();
}

// // //----------------------------------------------------------------------
// // //  タスク定義
// // //----------------------------------------------------------------------
exports.imgin = imagemin;

// /************************************************************************/
// /*  END OF FILE                                                         */
// /************************************************************************/