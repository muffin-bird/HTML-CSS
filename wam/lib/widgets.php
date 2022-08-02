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

  // ウィジェットの内容をWebページに出力

  public function widget($args, $instance){
    // ウィジェットのオプション[title]を取得
    $title = empty($instance['title']) ? '':$instance['title'];

    // ウィジェットのオプション['limit']を取得
    $limit = (!empty($instance['limit'])) ? absint($instance['limit']) : 5;
    if(!$limit) {
      $limit = 5;
    }

    // ウィジェットの開始タグ
    echo $args['before_widget'];
    if(!empty($title)) {
      echo $args['before_title']. $title. $args['after_title'];
    }

    // queryオブジェクト
    $query_args = array(
      'post_per_page' => $limit,
      'post_type' => 'post',
      'ignore_sticky_posts' => 1,
    );
    $my_query = new WP_Query($query_args);

    // 出力するHTML
    if($my_query->have_posts()):
    ?>
    <div class="recent-posts">
      <?php while($my_query->have_posts()): $my_query->the_post(); ?>
      <article>
        <a class="flex-container" href="<?php the_permalink(); ?>">
          <figure>
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('large'); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/blog.jpg" >
            <?php endif; ?>
          </figure>
          <h2><?php the_title(); ?></h2>
        </a>
      </article>
      <?php endwhile; ?>
    </div>
    <?php endif;
      wp_reset_postdata();
      echo $args['after_widget'];
  }
}

function theme_register_widget() { // ウィジェットの登録
  register_widget('ImgNewPostWidget');
}
add_action('widgets_init', 'theme_register_widget');
