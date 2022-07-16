<?php get_header(); ?>

<div class="section">
    <ul class="blog-list">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- ループ開始 -->
      <li class="blog-item">
        <a href="<?php the_permalink(); ?>" class="blog-link">
          <time class="blog-data"><?php echo get_the_date('Y.m.d'); ?></time>
          <div class="blog-info">
            <h2 class="blog-title"><?php the_title(); ?></h2>
            <p class="blog-ttl"><?php the_content(); ?></p>
          </div>
        </a>
      </li>
      <?php endwhile; endif; ?><!-- ループ終わり -->
    </ul>
</div>

<?php get_footer(); ?>