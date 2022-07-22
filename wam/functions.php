<?php

function post_has_archive($args, $post_type) { // パーマリンクの更新
  if ('post' == $post_type ) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blog';
    $args['label'] = 'ブログ';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10,2);

function my_excerpt_length() {
  return 70;
}
add_filter('excerpt_length','my_excerpt_length',999);

add_theme_support('post-thumbnails');