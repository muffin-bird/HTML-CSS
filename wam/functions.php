<?php

require_once get_template_directory() . '/lib/widgets.php'; // 自作ウィジェット呼び出し


if (function_exists('register_sidebar')) { // ウィジェットの設定
  register_sidebar(array(
    'name' => 'サイドウィジェット',
    'id' => 'sidebar-widget-area',
    'before_widget' => '<div id="%1$s" class="sideWidget">',
    'after_widget' => '</div>',
    'bofore-title' => '<p class="widgetTitle">',
    'after_title' => '</p>',
  ));
}

function post_has_archive($args, $post_type) { // パーマリンクの更新
  if ('post' == $post_type ) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blog';
    $args['label'] = 'ブログ';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10,2);

function cpt_register_works() { // カスタム投稿
  $labels = [
    "singular_name" => "works",
    "edit_item" => "works",
  ];
  $args = [
    "label" => "Works",
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "map_meta_cap" => true,
    "hierarchical" => true,
    "rewrite" => ["slug" => "works", "with_front" => true],
    "query_var" => true,
    "menu_position" => 5,
    "supports" => ["title", "editor", "thumbnail"],
  ];
  register_post_type("works", $args);
}
add_action('init', 'cpt_register_works');

function cpt_register_dep() { // カテゴリー
  $labels = [
    "singular_name" => "dep",
  ];
  $args = [
    "label" => "カテゴリー",
    "labels" => $labels,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_in_menu" => true,
    "query_var" => true,
    "rewrite" => ['slug' => 'dep', 'with_front' => true],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "dep",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "show_in_quick_edit" => false,
  ];
  register_taxonomy("dep", ["works"], $args);
}
add_action('init', 'cpt_register_dep');

function pagination($pages = '', $range = 2) { // ページネーション
  $showitems = ($range * 2) + 1; // 表示するページ数(5ページを表示)

  global $paged; // 現在のページ値
  if(empty($paged)) { // デフォルトのページ
    $paged = 1;
  }

  if($pages == '') { 
    global $wp_query; // 全ページ値
    $pages = $wp_query->max_num_pages; // 全ページ値を取得
    if(!$pages) {
      $pages = 1;
    }
  }

  // ページ数が2ページ以上の場合のみ、ページネーションを表示
  if(1 != $pages) {
    echo '<div class="pagination">';
    echo '<ul>';

    // 1ページ目でなければ、「前のページ」リンクを表示
    if($paged > 1) {
      echo '<li class="prev"><a href="' . esc_url(get_pagenum_link($paged - 1)) . '">前のページ</a></li>';
    }

    // ページ番号を表示(現在のページはリンクにしない)
    for ($i=1; $i <= $pages; $i++) {
      if (1 != $pages &&(!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
        if ($paged == $i) {
          echo '<li class="active">' .$i. '</li>'; // 現在のページ番号表示
        } else {
          echo '<li><a href="' . esc_url(get_pagenum_link($i)) . '">' .$i. '</a></li>'; // 他のページ番号表示
        }
      }
    }

    // 最終ページでなければ、「次のページ」リンクを表示
    if ($paged < $pages) {
      echo '<li class="next"><a href="' . esc_url(get_pagenum_link($paged + 1)) . '">次のページ</a></li>';
    }
    echo '</ul>';
    echo '</div>';
  }
}

function my_excerpt_length() { // 抜粋
  return 60;
}
add_filter('excerpt_length','my_excerpt_length',999);

add_theme_support('post-thumbnails'); //  アイキャッチ設定