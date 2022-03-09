<?php
/**
 * CSS/JavaScriptの読み込み
 */
add_action('wp_enqueue_scripts', 'include_files');

function include_files() {
    // CSSファイルの読み込み
    // wp_enqueue_style('style',get_template_directory_uri() . '/css_origin/style.css', array(), '1.0.0', false);
    wp_enqueue_style('aos', "https://unpkg.com/aos@2.3.1/dist/aos.css", array(), '2.3.1', false);
    wp_enqueue_style('swiper', "https://unpkg.com/swiper@8/swiper-bundle.min.css", array(), '8', false);
    wp_enqueue_style('style',get_theme_file_uri('/css_origin/style.css'), array(), '1.0.0', false);
    // WPのjQueryを解除
    // wp_deregister_script('jqeury');
    // JavaScriptファイルの読み込み
    wp_enqueue_script('my-jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array('jquery'), '3.6.0', true);
    wp_enqueue_script('aos','https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);
    wp_enqueue_script('swiper','https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), '8', true);
    wp_enqueue_script('my-script', get_theme_file_uri('/js/script.js'), array('jquery'), '1.0.0', true);
}
// バリデーション/////////////////////////////////////////////////////////////////////////////////////////
function my_exam_validation_rule( $Validation, $data, $Data ) {

	$Validation->set_rule( '会社名', 'noEmpty', array( 'message' => '※入力してください。' ) );
	$Validation->set_rule( 'お名前', 'noEmpty', array( 'message' => '※入力してください。' ) );
	$Validation->set_rule( 'メールアドレス', 'noEmpty', array( 'message' => '※入力してください。' ) );
    $Validation->set_rule( 'メールアドレス', 'mail', array( 'message' => '※正式な書式で入力してください' ) );
	$Validation->set_rule( '電話番号', 'noEmpty', array( 'message' => '※入力してください。' ) );
    $Validation->set_rule( 'お問い合わせの種類', 'required', array( 'message' => '※１つ選択してください' ) );
	$Validation->set_rule( 'お問合せ内容', 'noEmpty', array( 'message' => '※入力してください。' ) );
	$Validation->set_rule( 'プライバシーポリシー', 'required', array( 'message' => '※チェックを入れてください。' ) );
	return $Validation;
}
add_filter( 'mwform_validation_mw-wp-form-24', 'my_exam_validation_rule', 10, 3 );
// バリデーション 終了/////////////////////////////////////////////////////////////////////////////////////////

// サムネイル有効化
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

//ページネーション////////////////////////////////////////
    function custom_pagination_html( $template ) {
        $template = '
        <nav class="c-pagination-inner" role="navigation">
            <h2 class="screen-reader-text">%2$s</h2>
            %3$s
        </nav>';
        return $template;
    }
    add_filter('navigation_markup_template','custom_pagination_html');

//本文抜粋//////////////////////////////////////////////
    function wpdocs_custom_excerpt_length( $length ) {
        return 70;
    }
    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//投稿一覧 タグ絞り込み実装/////////////////////////////////
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
        add_action( 'load-edit.php', 'reset_post_tag_filter' );
?>