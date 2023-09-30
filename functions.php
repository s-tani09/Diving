<?php
/**
 * Functions
 */

/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );



/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{
// css

wp_enqueue_style( 'noto-sans', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet" rel="stylesheet" rel="stylesheet"', array(), '1.0.0', 'all' );
wp_enqueue_style( 'gotu', '//fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet"', array(), '1.0.0', 'all' );
wp_enqueue_style( 'lato', '//fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet"', array(), '1.0.0', 'all' );
wp_enqueue_style( 'swiper-css', '//cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), '9.0.0', 'all' );
wp_enqueue_style( 'style-css', get_template_directory_uri() . '/dist/assets/css/style.css', array(), '1.0.1', 'all' );


	// js
	wp_enqueue_script( 'jquery-js', '//code.jquery.com/jquery-3.6.0.js', array( 'jquery' ), '1.0.1', true );
	wp_enqueue_script( 'swiper-js', '//cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array( 'jquery' ), '1.0.1', true );
	wp_enqueue_script( 'inview-js', get_template_directory_uri() . '/dist/assets/js/jquery.inview.min.js', array( 'jquery' ), '1.0.1', true );
	wp_enqueue_script( 'script-js', get_template_directory_uri() . '/dist/assets/js/script.js', array( 'jquery' ), '1.0.1', true );

}
add_action('wp_enqueue_scripts', 'my_script_init');




/**
 * メニューの登録
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
// function my_menu_init() {
// 	register_nav_menus(
// 		array(
// 			'global'  => 'ヘッダーメニュー',
// 			'utility' => 'ユーティリティメニュー',
// 			'drawer'  => 'ドロワーメニュー',
// 		)
// 	);
// }
// add_action( 'init', 'my_menu_init' );
/**
 * メニューの登録
 *
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */


/**
 * ウィジェットの登録
 *
 * @codex http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
 */
// function my_widget_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => 'サイドバー',
// 			'id'            => 'sidebar',
// 			'before_widget' => '<div id="%1$s" class="p-widget %2$s">',
// 			'after_widget'  => '</div>',
// 			'before_title'  => '<div class="p-widget__title">',
// 			'after_title'   => '</div>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'my_widget_init' );


/**
 * アーカイブタイトル書き換え
 *
 * @param string $title 書き換え前のタイトル.
 * @return string $title 書き換え後のタイトル.
 */
function my_archive_title( $title ) {

	if ( is_home() ) { /* ホームの場合 */
		$title = 'ブログ';
	} elseif ( is_category() ) { /* カテゴリーアーカイブの場合 */
		$title = '' . single_cat_title( '', false ) . '';
	} elseif ( is_tag() ) { /* タグアーカイブの場合 */
		$title = '' . single_tag_title( '', false ) . '';
	} elseif ( is_post_type_archive() ) { /* 投稿タイプのアーカイブの場合 */
		$title = '' . post_type_archive_title( '', false ) . '';
	} elseif ( is_tax() ) { /* タームアーカイブの場合 */
		$title = '' . single_term_title( '', false );
	} elseif ( is_search() ) { /* 検索結果アーカイブの場合 */
		$title = '「' . esc_html( get_query_var( 's' ) ) . '」の検索結果';
	} elseif ( is_author() ) { /* 作者アーカイブの場合 */
		$title = '' . get_the_author() . '';
	} elseif ( is_date() ) { /* 日付アーカイブの場合 */
		$title = '';
		if ( get_query_var( 'year' ) ) {
			$title .= get_query_var( 'year' ) . '年';
		}
		if ( get_query_var( 'monthnum' ) ) {
			$title .= get_query_var( 'monthnum' ) . '月';
		}
		if ( get_query_var( 'day' ) ) {
			$title .= get_query_var( 'day' ) . '日';
		}
	}
	return $title;
};
add_filter( 'get_the_archive_title', 'my_archive_title' );


/**
 * 抜粋文の文字数の変更
 *
 * @param int $length 変更前の文字数.
 * @return int $length 変更後の文字数.
 */
function my_excerpt_length( $length ) {
	return 80;
}
add_filter( 'excerpt_length', 'my_excerpt_length', 999 );


/**
 * 抜粋文の省略記法の変更
 *
 * @param string $more 変更前の省略記法.
 * @return string $more 変更後の省略記法.
 */
function my_excerpt_more( $more ) {
	return '...';

}
add_filter( 'excerpt_more', 'my_excerpt_more' );


// アイキャッチ画像を有効化
function setup_post_thumbnails(){
	add_theme_support('post-thumbnails', [['blog', 'campaign','voice']]);
}
add_action('after_setup_theme', 'setup_post_thumbnails');

// カスタム投稿タイプとタクソノミーページの投稿表示件数を変更する関数
function custom_change_posts_per_page($query) {
	if (is_admin() || !$query->is_main_query()) return;

	$post_types = [
			'campaign' => 4,
			'voice'    => 6,
	];

	foreach ($post_types as $post_type => $posts_per_page) {
			if ($query->is_post_type_archive($post_type) || $query->is_tax("{$post_type}_category")):
					$query->set('posts_per_page', $posts_per_page);
					break;
			endif;
	}
}

add_action('pre_get_posts', 'custom_change_posts_per_page');

// Contact Form7の送信ボタンをクリックした後の遷移先設定
add_action( 'wp_footer', 'add_origin_thanks_page' );
function add_origin_thanks_page() {
$thanks = home_url('/contact-thanks/');
  echo <<< EOC
    <script>
      var thanksPage = {
        204: '{$thanks}',
      };
    document.addEventListener( 'wpcf7mailsent', function( event ) {
      location = thanksPage[event.detail.contactFormId];
    }, false );
    </script>
  EOC;
}

 //特定の固定ページのエディタを表示にする
add_filter('use_block_editor_for_post', function($use_block_editor, $post){
    if($post->post_type === 'page'){
        if(!in_array($post->post_name, ['privacy-policy', 'terms-of-service'])){ // ページスラッグが該当しないならコンテンツエディターを非表示
            remove_post_type_support('page', 'editor');
            return false;
        }
    }
    return $use_block_editor;
}, 10, 2);

//「投稿」の名称変更
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'ブログ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'ブログ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );


// ContactForm7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
	return false;
}

// campaignタイトルをcontactフォームのドロップダウンに反映させる
function dynamic_field_values ( $tag, $unused ) {
	if ( $tag['name'] != 'campaign' )  // Contact Form 7内に記入するフィールド名
			return $tag;
	$args = array (
			'numberposts'   => -1, //全件
			'post_type'     => 'campaign', // 動的に表示させるカスタム投稿タイプ名（投稿タイプスラッグ）
			'orderby'       => 'title', // ソート対象 - タイトルで並び替え
			'order'         => 'ASC', // ソート順 - 最低から最高へ昇順 (1, 2, 3; a, b, c)
	);
	$custom_posts = get_posts($args);
	if ( ! $custom_posts )
			return $tag;
	// タイトルの最初に「以下から選択してください」を追加
	$tag['raw_values'][] = 'キャンペーン内容を選択';
	$tag['values'][] = 'キャンペーン内容を選択';
	$tag['labels'][] = 'キャンペーン内容を選択';

	foreach ( $custom_posts as $custom_post ) {

			$tag['raw_values'][] = $custom_post->post_title;
			$tag['values'][] = $custom_post->post_title;
			$tag['labels'][] = $custom_post->post_title;
	}
	return $tag;
}
add_filter( 'wpcf7_form_tag', 'dynamic_field_values', 10, 2);

// 閲覧数を取得する関数
function get_post_views($post_id) {
	return get_post_meta($post_id, 'post_views_count', true) ?: '0';
}

// 閲覧数を保存する関数
function set_post_views($post_id) {
	$count = get_post_meta($post_id, 'post_views_count', true) ?: 0;
	update_post_meta($post_id, 'post_views_count', $count + 1);
}

// タグ削除
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// カラム追加
function add_post_views_column($columns) {
	$columns['post_views'] = '閲覧数';
	return $columns;
}

// カラム表示
function display_post_views($column, $post_id) {
	if ($column === 'post_views') {
			echo get_post_views($post_id);
	}
}

// カラムクリックでソート
function make_post_views_sortable($columns) {
	$columns['post_views'] = 'post_views_count';
	return $columns;
}

// 投稿一覧のみに適用
function limit_to_posts($query) {
	global $pagenow;
	if (is_admin() && $pagenow == 'edit.php' && isset($query->query['post_type']) && $query->query['post_type'] == 'post') {
			add_filter('manage_posts_columns', 'add_post_views_column');
			add_action('manage_posts_custom_column', 'display_post_views', 10, 2);
			add_filter('manage_edit-post_sortable_columns', 'make_post_views_sortable');
	}
}

add_action('pre_get_posts', 'limit_to_posts');

// 料金一覧
SCF::add_options_page( '', '料金一覧', 'manage_options', 'theme-options-price', 'dashicons-money-alt', 9 );

// よくある質問
SCF::add_options_page( '', 'よくある質問', 'manage_options', 'theme-options-faq', 'dashicons-format-chat', 9 );

// 私たちについて
SCF::add_options_page( '', 'ギャラリー', 'manage_options', 'theme-options-gallery', 'dashicons-format-gallery', 9 );

// サムネイル・文字数 カラムに追加
function add_posts_columns($columns) {
	$columns['thumbnail'] = 'アイキャッチ';

	return $columns;
}
function add_posts_columns_row($column_name, $post_id) {
	if ( 'thumbnail' == $column_name ) {
			$thumb = get_the_post_thumbnail($post_id, array(100,100), 'thumbnail');
			echo ( $thumb ) ? $thumb : '-';
	} elseif ( 'postid' == $column_name ) {
			echo $post_id;
	} elseif ( 'count' == $column_name ) {
			$count = mb_strlen(strip_tags(get_post_field('post_content', $post_id)));
			echo $count;
	}
}
add_filter( 'manage_posts_columns', 'add_posts_columns' );
add_action( 'manage_posts_custom_column', 'add_posts_columns_row', 10, 2 );

// 固定ページの不要な項目を非表示にする
function my_remove_post_editor_support() {
remove_post_type_support( 'voice', 'editor' ); // 本文
remove_post_type_support( 'campaign', 'editor' ); // 本文
}
add_action( 'init' , 'my_remove_post_editor_support' );

function custom_admin_notice() {
	global $pagenow, $post_type;

	// 'post.php' または 'post-new.php' かつ指定の投稿タイプの場合
	if (($pagenow === 'post.php' || $pagenow === 'post-new.php') && in_array($post_type, ['voice', 'campaign'])) {
			?>
<script>
jQuery(document).ready(function($) {
  // タイトルフィールドのラベルを取得
  var titleLabel = $('label[for="title"]').text();
  // 新しいラベルと説明文を設定
  $('label[for="title"]').text(titleLabel + ' (<?php echo ($post_type === "voice") ? "22" : "30"; ?>文字以内)');
  $('#titlewrap').after(
    '<p class="description">タイトルは<?php echo ($post_type === "voice") ? "22" : "30"; ?>文字以内で入力してください。</p>');
});
</script>
<?php
	}
}
add_action('admin_notices', 'custom_admin_notice');