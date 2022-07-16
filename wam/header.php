<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title><?php echo bloginfo('name'); ?></title>
  <link rel="preconnect" href="<?php echo get_template_directory_uri(); ?>/https://fonts.googleapis.com">
  <link rel="preconnect" href="<?php echo get_template_directory_uri(); ?>/https://fonts.gstatic.com" crossorigin>
  <link href="<?php echo get_template_directory_uri(); ?>/https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/destyle.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <?php wp_head(); ?>
</head>

<body> 
  <header class="header">
    <div class="nav-logo">
      <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" width="50" height="50" alt="ロゴ"></a>
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