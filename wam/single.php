<?php get_header(); ?>

<div class="section">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="archive-sidebar">
    <div class="single-blog-list">
      <div class="single-headline">
        <time class="archive-blog-data"><?php echo get_the_date('Y.m.d'); ?></time>
        <h2 class="single-blog-headline"><?php the_title(); ?></h2>
      </div>
      <figure class="single-blog-img">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('', ['class' => 'card-img']); ?>
        <?php else : ?>
          <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/img/blog.jpg" alt="thumbnail">
        <?php endif; ?>
        <figcaption class="single-blog-description">
          <?php the_content(); ?>
        </figcaption>
      </figure>
    </div>
  <?php endwhile; endif; ?>
  <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>