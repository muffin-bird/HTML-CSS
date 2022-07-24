<?php get_header(); ?>

<div class="section">
  <div class="page-headline">Works</div>
    <?php
    $args = array(
      'post_type' => 'works',
      'posts_per_page' => 6
    );
    $the_query = new WP_Query($args);
    if($the_query->have_posts()):
    ?>
    <ul class="archive-works-list">
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?><!-- ループ開始 -->
      <li class="archive-works-item">
        <a href="<?php the_permalink(); ?>" class="archive-works-link">
        <div class="archive-works-img">
          <img class="works-img" src="<?php echo CFS()->get('thumbnail'); ?>" alt="works">
        </div>
        <div class="archive-works-info">
          <p class="archive-works-client"><?php echo CFS()->get('client'); ?></p>
          <p class="archive-works-type"><?php echo CFS()->get('type'); ?></p>
        </div>
        </a>
      </li>
      <?php endwhile; ?>
    <?php endif; wp_reset_postdata(); ?><!-- ループ終わり -->
    </ul>
</div>

<?php get_footer(); ?>