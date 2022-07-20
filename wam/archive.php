<?php get_header(); ?>

<div class="section">
  <div class="page-headline archive-headline">Blog</div>
    <ul class="archive-blog-list">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- ループ開始 -->
      <li class="archive-blog-item">
        <a href="<?php the_permalink(); ?>" class="archive-blog-link">
          <div class="archive-blog-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog.jpg" width="180" height="180" alt="blog">
          </div>
          <div class="archive-blog-info">
            <time class="archive-blog-data"><?php echo get_the_date('Y.m.d'); ?></time>
            <h2 class="archive-blog-title"><?php the_title(); ?></h2>
            <p class="archive-blog-ttl"><?php the_content(); ?></p>
          </div>
        </a>
      </li>
      <?php endwhile; endif; ?><!-- ループ終わり -->
    </ul>
</div>

<?php get_footer(); ?>