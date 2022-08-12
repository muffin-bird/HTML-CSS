<?php get_header(); ?>

<div class="section">
  <div class="archive-sidebar">
    <ul class="archive-blog-list">
      <div class="archive-blog-headline">Blog</div>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- ループ開始 -->
      <li class="archive-blog-item">
        <a href="<?php the_permalink(); ?>" class="archive-blog-link">
          <div class="archive-blog-img">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('thumbnail'); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg" width="150" height="150" alt="blog">
            <?php endif; ?>
          </div>
          <div class="archive-blog-info">
            <time class="archive-blog-data"><?php echo get_the_date('Y.m.d'); ?></time>
            <h2 class="archive-blog-title"><?php the_title(); ?></h2>
            <p class="archive-blog-ttl"><?php the_excerpt(); ?></p>
          </div>
        </a>
      </li>
      <?php endwhile; endif; ?><!-- ループ終わり -->
      <?php if (function_exists("pagination")): ?>
        <?php pagination(); ?>
      <?php endif; ?>
    </ul>
  <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>