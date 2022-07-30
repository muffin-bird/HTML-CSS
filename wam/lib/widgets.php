<?php

class ImgNewPostWidget extends WP_Widget {

  public function __construct() { // 初期化処理,コンストラクタ
    $widget_options = array( // ウィジェットの初期値
      'classname' => 'widget-imgnewpost',
      'description' => '画像付きの最新記事',
      'customize_selective_refresh' => true,
    );

    $control_options = array(); // 操作用の設定値

    parent::__construct('widget-imgnewpost','画像付きの最新記事','$widget_options','$control_options');
  }

}

function theme_register_widget() { // ウィジェットの登録
  register_widget('ImgNewPostWidget');
}
add_action('widgets_init', 'theme_register_widget');
