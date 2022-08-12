<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title><?php echo bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/destyle.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <?php
  wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap');
  wp_enqueue_script('jquery');
  wp_enqueue_script('wam-main', get_template_directory_uri() . '/assets/js/main.js');
  wp_head();
  ?>
</head>

<body> 
  <header class="header">
    <div class="nav-logo">
      <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" width="50" height="50" alt="ロゴ"></a>
      <nav class="nav-list">
        <ul>
          <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
          <li><a href="<?php echo esc_url(home_url('/works/')); ?>">Works</a></li>
          <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>