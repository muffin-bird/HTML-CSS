<?php get_header(); ?>
 <section class="section">
    <figure class="top-img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/header-img.jpg" width="60%" height="auto" alt="">
      <figcaption class="top-discription">
        ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。
      </figcaption>
    </figure>
 </section>

 <section class="section">
    <h1 class="section-headline">Service</h1>
    <ul class="service-list">
      <li class="service-item">
        <dl class="service">
          <dt class="service-headline">Photograph</dt>
          <dd class="service-img"><img src="<?php echo get_template_directory_uri(); ?>/img/photograph-img.svg" width="100" height="100" alt="service"></dd>
          <dd class="service-description">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </dd>
        </dl>
      </li>
      <li class="service-item">
        <dl class="service">
          <dt class="service-headline">Design</dt>
          <dd class="service-img"><img src="<?php echo get_template_directory_uri(); ?>/img/design-img.svg" width="100" height="100" alt="service"></dd>
          <dd class="service-description">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </dd>
        </dl>
      </li>
      <li class="service-item">
        <dl class="service">
          <dt class="service-headline">Coding</dt>
          <dd class="service-img"><img src="<?php echo get_template_directory_uri(); ?>/img/coding-img.svg" width="100" height="100" alt="service"></dd>
          <dd class="service-description">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </dd>
        </dl>
      </li>
    </ul>
 </section>

  <section class="section section-secounday">
    <h1 class="section-headline">Works</h1>
    <ul class="works-list">
      <li class="works-item">
        <article class="works-card">
          <a href="#" class="works-link">
            <img class="works-img" src="<?php echo get_template_directory_uri(); ?>/img/works-site.jpg" width="330" height="200" alt="works">
            <p class="works-client">ここにクライアント名が入ります。</p>
            <p class="works-type">ここに業種が入ります。</p>
          </a>
        </article>
      </li>
      <li class="works-item">
        <article class="works-card">
          <a href="#" class="works-link">
            <img class="works-img" src="<?php echo get_template_directory_uri(); ?>/img/works-paper.jpg" width="330" height="200" alt="works">
            <p class="works-client">ここにクライアント名が入ります。</p>
            <p class="works-type">ここに業種が入ります。</p>
          </a>
        </article>
      </li>
      <li class="works-item">
        <article class="works-card">
          <a href="#" class="works-link">
            <img class="works-img" src="<?php echo get_template_directory_uri(); ?>/img/works-video.jpg" width="330" height="200" alt="works">
            <p class="works-client">ここにクライアント名が入ります。</p>
            <p class="works-type">ここに業種が入ります。</p>
          </a>
        </article>
      </li>
    </ul>
    <div class="section-button">
      <a href="#" class="button">
        <span>More</span>
        <img class="button-icon" src="<?php echo get_template_directory_uri(); ?>/img/icon.svg" width="20" height="20">
      </a>
    </div>
  </section>

  <section class="section">
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
        <span>More</span>
        <img class="button-icon" src="<?php echo get_template_directory_uri(); ?>/img/icon.svg" width="20" height="20">
      </a>
    </div>
  </section> 
<?php get_footer(); ?>