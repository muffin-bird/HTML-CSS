<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mysite</title>
  <link rel="preconnect" href="<?php bloginfo('template_url') ;?>/https://fonts.googleapis.com">
  <link rel="preconnect" href="<?php bloginfo('template_url') ;?>/https://fonts.gstatic.com" crossorigin>
  <link href="<?php bloginfo('template_url') ;?>/https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url') ;?>/destyle.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url') ;?>/style.css">
  <?php wp_head(); ?>
</head>

<body> 
  <header class="header">
    <div class="nav-logo">
      <a href="#"><img src="<?php bloginfo('template_url') ;?>/img/logo.svg" width="50" height="50" alt="ロゴ"></a>
      <nav class="nav-list">
        <ul>
          <li><a href="#">About</a></li>
          <li><a href="#">Works</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </div>
    <figure class="header-img">
      <img src="<?php bloginfo('template_url') ;?>/img/header-img.jpg" width="60%" height="auto" alt="">
      <figcaption class="header-discription">
        ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。
      </figcaption>
    </figure>
  </header>