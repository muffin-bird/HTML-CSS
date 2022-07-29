<?php

function theme_register_widget() { // ウィジェットの登録
  register_widget('ImgNewPostWidget');
}
add_action('widgets_init', 'theme_register_widget');
