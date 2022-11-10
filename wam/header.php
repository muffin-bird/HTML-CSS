<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Google Tag Manager -->
  <!-- End Google Tag Manager -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <?php if(is_search()): ?>
    <meta name="robots" content="noindex">
  <?php elseif(is_404()): ?>
    <meta name="robots" content="noindex">
  <?php endif; ?>
  <?php get_template_part('template-parts/seo-header'); ?>
  <?php get_template_part('template-parts/ogp'); ?> 
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/destyle.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <?php
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css');
  wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css');
  wp_enqueue_style('slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css');
  wp_enqueue_script('jquery');
  wp_enqueue_script('jquery Easing Plugin', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js');
  wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js');
  wp_enqueue_script('wam-main', get_template_directory_uri() . '/assets/js/main.js');
  wp_head();
  ?>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <!-- End Google Tag Manager (noscript) -->
  <div id="loader-bg">
    <div id="loader">
      <span></span>
      <span></span>
      <span></span>
      <p>LOADING</p>
    </div>
  </div>
  <div id="contents">
    <header class="header">
      <div class="nav-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff.svg" width="146" height="26" alt="logo"></a>
        <div class="burger"><span></span><span></span><span></span></div>
        <nav class="nav-list">
          <ul>
            <li <?php if(is_page('about')) echo 'class="current"'; ?>><a href="<?php echo esc_url(home_url('/about/')); ?>">ABOUT</a></li>
            <li <?php if(is_post_type_archive('works') || is_singular('works')) echo 'class="current"'; ?>><a href="<?php echo esc_url(home_url('/works/')); ?>">WORKS</a></li>
            <li <?php if(!is_post_type_archive('works') && is_archive() || is_single() && !is_singular('works')) echo 'class="current"'; ?>><a href="<?php echo esc_url(home_url('/blog/')); ?>">BLOG</a></li>
            <li <?php if(is_page('contact')) echo 'class="current"'; ?>><a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT</a></li>
          </ul>
        </nav>
      </div>
    </header>