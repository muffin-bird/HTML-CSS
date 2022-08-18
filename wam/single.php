<?php get_header(); ?>

<div class="section">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="archive-sidebar">
    <div class="single-blog-list">
      <time class="archive-blog-data"><?php echo get_the_date('Y.m.d'); ?></time>
      <div class="single-blog-headline">
        <h2><?php the_title(); ?></h2>
        <?php get_template_part('template-parts/breadcrumb'); ?>
      </div>
      <figure class="single-blog-img">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('', ['class' => 'card-img']); ?>
        <?php else : ?>
          <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg" alt="thumbnail">
        <?php endif; ?>
        <figcaption class="single-blog-description">
          <?php the_content(); ?>
        </figcaption>
      </figure>
      <div class="page-nation">
        <?php if (get_previous_post()) : ?>
          <div class="page-left">
            <?php previous_post_link('&laquo; %link', 'PREV'); ?>
          </div>  
        <?php endif; ?>
        <?php if (get_next_post()) : ?>
          <div class="page-right">
            <?php next_post_link('%link &raquo;', 'NEXT'); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  <?php endwhile; endif; ?>
  <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>