<?php

function my_enqueue_scripts() {
	$uri = esc_url( get_template_directory_uri() );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_style("my", get_template_directory_uri() . "/assets/css/style.css", array(), filemtime(get_theme_file_path('/assets/css/style.css')), "all");
	wp_enqueue_script( 'script_js', $uri . '/assets/js/script.js', array('jquery'), filemtime(get_theme_file_path('/assets/js/script.js')), true );
	
	// font-awesome
	wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css", array(), "5.8.2", "all");
	
  //swiper読み込み時
	wp_enqueue_script("swiper", "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js", array(), false, "all", true);
  wp_enqueue_style("swiper_css", "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css", array(), false, "all");
  wp_enqueue_script( 'swiper_js', $uri . '/assets/js/swiper.js', array(), filemtime(get_theme_file_path('/assets/js/swiper.js')), true );
	
	// luminous
  wp_enqueue_style("luminous_css", $uri . '/assets/css/luminous-basic.min.css', array(), false, "all");
	wp_enqueue_script( 'luminous_js', $uri . '/assets/js/luminous.min.js', array(), false, "all", true );
	
	//clipboard.js
	wp_enqueue_script( 'clipboard_js', 'https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js', array('jquery'), false, "all", true );

}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );

// メニューの有効化
function my_menu_init() {
  register_nav_menus(
    array(
      'global' => 'グローバルーメニュー',
      'drawer' => 'ドロワーメニュー',
      'footer' => 'フッターメニュー',
    )
  );
}
add_action('init', 'my_menu_init');

function my_setup() {
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
  // サイドバー画像用のサイズ設定
  add_image_size( 'sidebar', 100, 70, true );
}
add_action("after_setup_theme", "my_setup");

// 各テンプレートごとのメイン画像を表示
function get_main_image() {
  if ( is_page() ):
    return get_the_post_thumbnail( get_queried_object()->ID);
	elseif ( is_home() or is_single() ):
    return '';
  elseif ( is_archive() ):
    return get_the_post_thumbnail( get_page_by_path( 'news' ));
  endif;
}

// 各テンプレートごとのタイトル
function get_main_title() {
  if ( is_page() ):
    return get_the_title();
	elseif ( is_404() ):
		return '404 Not Found';
  elseif ( is_single() or is_home() or is_archive() ):
    return 'News';
  endif;
}

// ページネーション
function page_navi() {
  the_posts_pagination(array(
    'mid_size' => 1,
    'prev_text' => '',
    'next_text' => '',
  ));
}

//　投稿記事取得 $postの値でカスタム投稿に対応
function get_entry_posts( $post='post', $per_page=10) {
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $custom_query = new WP_Query(
    array(
      'post_type' => $post,
      'posts_per_page' => $per_page,
			'paged' => $paged,
    )
  );
  return $custom_query;
}

// 関連記事
function get_post_related( $per_page = 5, $post_type = 'post' ) {
  $post_id = get_the_ID(); // 投稿のIDを取得
  $categories = get_the_category($post_id); // 投稿のカテゴリーを取得
  $cat_ids = []; // カテゴリーIDを格納するための空の配列を用意

  foreach ($categories as $category) :
    array_push($cat_ids, $category->term_id); // 用意した空配列にカテゴリーIDを格納
  endforeach;

  $args = [
  'post_type' => $post_type, // 投稿タイプを指定
  'posts_per_page' =>$per_page, // 表示する記事数を指定 初期値は5ページ
  'category__in' => $cat_ids, // カテゴリーIDを指定
  'post__not_in' => [$post_id] // 現在の投稿を除外
  ];

  $related_cats_query = new WP_Query($args);

  return $related_cats_query;
}
