<?php get_header(); ?>
 <section class="section">
    <figure class="top-img">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header-img.jpg" alt="">
      <figcaption class="top-discription">
        ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。
      </figcaption>
    </figure>
 </section>

 <section class="section main">
    <h1 class="section-headline">Service</h1>
    <ul class="service-list">
      <li class="service-item">
        <dl class="service">
          <dt class="service-headline">Photograph</dt>
          <dd class="service-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/photograph-img.svg" width="100" height="100" alt="service"></dd>
          <dd class="service-description">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </dd>
        </dl>
      </li>
      <li class="service-item">
        <dl class="service">
          <dt class="service-headline">Design</dt>
          <dd class="service-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/design-img.svg" width="100" height="100" alt="service"></dd>
          <dd class="service-description">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </dd>
        </dl>
      </li>
      <li class="service-item-last">
        <dl class="service">
          <dt class="service-headline">Coding</dt>
          <dd class="service-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/coding-img.svg" width="100" height="100" alt="service"></dd>
          <dd class="service-description">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </dd>
        </dl>
      </li>
    </ul>
 </section>

  <section class="section main section-secounday">
    <h1 class="section-headline">Works</h1>
    <?php
    $args = array(
      'post_type' => 'works', // 投稿タイプスラッグ
      'posts_per_page' => 4
    );
    $the_query = new WP_query($args); 
    if ($the_query->have_posts()) :
    ?>
    <ul class="slider">
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <li class="works-item">
        <article class="works-card">
          <a href="<?php the_permalink(); ?>" class="works-link">
            <img class="works-img" src="<?php echo CFS()->get('thumbnail'); ?>" alt="works">
          </a>
        </article>
      </li>
      <?php endwhile; ?>
    </ul>
    <?php endif; wp_reset_postdata(); ?>
    <div class="section-button">
      <a href="<?php echo esc_url(home_url('/works/')); ?>" class="button">
        <span>View More</span>
      </a>
    </div>
  </section>

  <section class="section main">
    <h1 class="section-headline">Blog</h1>
    <ul class="blog-list">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- ループ開始 -->
      <li class="blog-item">
        <a href="<?php the_permalink(); ?>" class="blog-link">
          <time class="blog-data"><?php echo get_the_date('Y.m.d'); ?></time>
          <div class="blog-info">
            <h2 class="blog-title"><?php the_title(); ?></h2>
            <p class="blog-ttl"><?php the_excerpt(); ?></p>
          </div>
        </a>
      </li>
      <?php endwhile; endif; ?><!-- ループ終わり -->
    </ul>
    <div class="section-button blog-button">
      <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="button">
        <span>View More</span>
      </a>
    </div>
    <p class="page-top">
    </p>
  </section> 
<?php get_footer(); ?>