<?php get_header(); ?>

<div class="section">
  <div class="page-headline">
      <h2>Blog</h2>
      <?php get_template_part('template-parts/breadcrumb'); ?>
  </div>
  <div class="archive-sidebar">
    <div class="category-archive">
      <h2 class="category-headline"></h2>
      <ul class="archive-blog-list">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- ループ開始 -->
        <li class="archive-blog-item">
          <a href="<?php the_permalink(); ?>" class="archive-blog-link">
            <div class="archive-blog-img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(array(400, 225)); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg" width="400" height="225" alt="blog">
              <?php endif; ?>
            </div>
            <div class="archive-blog-info">
              <time class="archive-blog-data"><?php echo get_the_date('Y.m.d'); ?></time>
              <h2 class="archive-blog-title"><?php the_title(); ?></h2>
            </div>
          </a>
        </li>
        <?php endwhile; endif; ?><!-- ループ終わり -->
        <?php if (function_exists("pagination")): ?>
          <?php pagination(); ?>
        <?php endif; ?>
      </ul>
    </div>
  <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>