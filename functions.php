<?php

function include_files() {
    // CSSファイルの読み込み
    wp_enqueue_style('aos', "https://unpkg.com/aos@2.3.1/dist/aos.css", array(), '2.3.1', false);
    wp_enqueue_style('swiper', "https://unpkg.com/swiper@8/swiper-bundle.min.css", array(), '8', false);
    wp_enqueue_style('style',get_theme_file_uri('/css_origin/style.css'), array(), '1.0.0', false);
    // WPのjQueryを解除
    // wp_deregister_script('jqeury');
    // JavaScriptファイルの読み込み
    wp_enqueue_script('my-jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array('jquery'), '3.6.0', true);
    wp_enqueue_script('aos','https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);
    wp_enqueue_script('my-script', get_theme_file_uri('/app/js/bundle.js'), array('jquery'), '1.0.0', true);
    if(is_singular('recipe')){
        wp_enqueue_script('single-script', get_theme_file_uri('/app/js/single.js'), array('jquery'), '1.0.0', true);
    };
}
add_action('wp_enqueue_scripts', 'include_files');

// ========================================
// バリデーション
// ========================================
function my_exam_validation_rule( $Validation, $data, $Data ) {

	$Validation->set_rule( 'お名前', 'noEmpty', array( 'message' => '※お名前を入力してください。' ) );
	$Validation->set_rule( 'メールアドレス', 'noEmpty', array( 'message' => '※メールアドレスを入力してください。' ) );
    $Validation->set_rule( 'メールアドレス', 'mail', array( 'message' => '※正式な書式で入力してください' ) );
    $Validation->set_rule( 'お問い合わせの種類', 'required', array( 'message' => '※１つ選択してください' ) );
	$Validation->set_rule( 'お問い合わせ内容', 'noEmpty', array( 'message' => '※お問い合わせ内容を入力してください。' ) );
	$Validation->set_rule( 'プライバシーポリシー', 'required', array( 'message' => '※チェックを入れてください。' ) );
	return $Validation;
}
add_filter( 'mwform_validation_mw-wp-form-301', 'my_exam_validation_rule', 10, 3 );
// ========================================
// バリデーション 終了
// ========================================

// ========================================
// サムネイル有効化
// ========================================
function twpp_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'small-thumb', 100, 150, true );
}
    add_action( 'after_setup_theme', 'twpp_setup_theme' );

// カスタム投稿にカテゴリ・タグを同期
function my_main_query( $query ) {
    if ( is_admin() || ! $query->is_main_query() )
        return;

    if ( $query->is_category() || $query->is_tag() ) {
        $query->set( 'post_type', array( 'post', 'news', 'recipe' ) );
        return;
    }
}
    add_action( 'pre_get_posts', 'my_main_query' );

//=======================
//ページネーション
//=======================
    function custom_pagination_html( $template ) {
        $template = '
        <nav class="c-pagination-inner" role="navigation">
            <h2 class="screen-reader-text">%2$s</h2>
            %3$s
        </nav>';
        return $template;
    }
    add_filter('navigation_markup_template','custom_pagination_html');

//=======================
//投稿一覧 タグ絞り込み実装
//=======================
    function add_post_tag_filter() {
        global $post_type;
        if ( $post_type == 'recipe' ) {        //ポストタイプを変更
        wp_dropdown_categories( array(
        'show_option_all' => 'タグ一覧',
        'orderby' => 'name',
        'hide_empty' => 0,
        'selected' => get_query_var( 'tag' ),
        'name' => 'tag',
        'taxonomy' => 'post_tag',
        'value_field' => 'slug',
        ) );
        }
        }
        add_action( 'restrict_manage_posts', 'add_post_tag_filter' );
        function reset_post_tag_filter() {
        if ( isset( $_GET['tag'] ) && '0' == $_GET['tag'] ) {
        unset( $_GET['tag'] );
        }
    }
//=======================
// Breadcrumb NavXT 拡張
//=======================
    function my_static_breadcrumb_adder($breadcrumb_trail){
        if ( is_category() || is_tag()) {
            $item = new bcn_breadcrumb( 'レシピ', NULL, array('archive'), esc_url(home_url('/recipe')), NULL, true );
            $stuck = array_pop( $breadcrumb_trail->breadcrumbs ); // ホーム 一時退避
            $breadcrumb_trail->breadcrumbs[] = $item; //任意 追加
            $breadcrumb_trail->breadcrumbs[] = $stuck; //ホーム 戻す
        }
    }
    add_action('bcn_after_fill','my_static_breadcrumb_adder');

//=========================
// 管理画面アイテム消去
//=========================
    function remove_menus () {
        remove_menu_page( 'edit.php' );       //投稿
        remove_menu_page( 'edit-comments.php' );    //コメント
    }
    add_action('admin_menu', 'remove_menus');

//=========================
// 管理画面メニューアイコン変更
//=========================
    function my_dashboard_print_styles() {
        ?>
        <style>
        /* レシピアイコン */
        #dashboard_right_now .recipe-count:before { content: "\f187"; }
        #adminmenu #menu-posts-recipe div.wp-menu-image:before { content: "\f187"; }
        /* フォームアイコン */
        #dashboard_right_now .mw-wp-form-count:before { content: "\f457"; }
        #adminmenu #menu-posts-mw-wp-form div.wp-menu-image:before { content: "\f457"; }
        /* Newsアイコン */
        #dashboard_right_now .news-count:before { content: "\f123"; }
        #adminmenu #menu-posts-news div.wp-menu-image:before { content: "\f123"; }
        /* メディアアイコン */
        #dashboard_right_now .media-count:before { content: "\f161"; }
        #adminmenu #menu-media div.wp-menu-image:before { content: "\f161"; }
        </style>
        <?php
        }
    add_action( 'admin_print_styles', 'my_dashboard_print_styles' );

?>