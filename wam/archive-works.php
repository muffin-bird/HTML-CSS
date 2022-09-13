<?php get_header(); ?>

<div class="section">
  <div class="page-headline">
    <h2>Works</h2>
    <?php get_template_part('template-parts/breadcrumb'); ?>
  </div>
    <?php
    $args = array(
      'post_type' => 'works',
      'posts_per_page' => 4,
      'paged' => $paged,
    );
    $the_query = new WP_Query($args);
    if($the_query->have_posts()):
    ?>
    <ul class="archive-works-list">
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?><!-- ループ開始 -->
      <li class="archive-works-item">
        <a href="<?php the_permalink(); ?>" class="archive-works-link">
        <div class="archive-works-img">
          <img class="works-img" src="<?php echo CFS()->get('thumbnail'); ?>" width="550px" height="350px" alt="works">
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
    <?php if (function_exists("pagination")): ?>
      <div class="pagination-works">
        <?php pagination($the_query->max_num_pages); ?>
      </div>
    <?php endif; ?>
    <p class="page-top">
      <a href="#top"><i class="fa-sharp fa-solid fa-2x fa-angles-up"></i></a>
    </p>
</div>

<?php get_footer(); ?>