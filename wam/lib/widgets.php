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

  // 管理画面のウィジェット設定フォーム

  public function form($instance) {
    $title = isset($instance['title']) ? esc_attr($instance['title']):'';
    $limit = isset($instance['limit']) ? absint($instance['limit']): 5;
  ?>
  <p>
    <?php /*タイトル*/ ?>
    <label for="<?php echo $this->get_field_id('title'); ?>">タイトル</label>
    <input type="text"
      class="widefat"
      id="<?php echo $this->get_field_id('title'); ?>"
      name="<?php echo $this->get_field_name('title'); ?>"
      value="<?php echo $title; ?>" />
  </p>
  <p>
    <?php /*表示する投稿数*/ ?>
    <label for="<?php echo $this->get_field_id('limit'); ?>">表示件数</label>
    <input type="number"
      class="tiny-text"
      id="<?php echo $this->get_field_id('limit'); ?>"
      name="<?php echo $this->get_field_name('limit'); ?>"
      value="<?php echo $limit; ?>"
      min="1" max="15" step="1" size="3" required />
  </p>
  <?php
  }

  // ウィジェットオプションのデータ検証/無害化

  public function update($new_instance, $old_instance) {
    // 入力した値が適切でない場合
    $instance = $old_instance;

    // タイトル値を無害化
    $instance['title'] = sanitize_text_field($new_instance['title']);

    // 投稿数の検証
    $instance['limit'] = is_numeric($new_instance['limit']) ? $new_instance['limit'] : 5;

    return $instance;
  }
}

function theme_register_widget() { // ウィジェットの登録
  register_widget('ImgNewPostWidget');
}
add_action('widgets_init', 'theme_register_widget');
