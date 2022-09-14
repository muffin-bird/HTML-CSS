<?php get_header(); ?>

<div class="section">
  <div class="page-headline">
    <h2>Blog</h2>
    <?php get_template_part('template-parts/breadcrumb'); ?>
  </div>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="archive-sidebar">
    <div class="single-blog-list">
      <div class="single-blog-headline">
        <h2><?php the_title(); ?></h2>
      </div>
      <div class="meta">
        <time class="archive-blog-data">
          <span class="single-date"><?php echo get_the_date('Y.m.d'); ?><span>
        </time>
        <time class="archive-blog-data">
          <?php if (get_the_date('Y.m.d') != get_the_modified_date('Y.m.d')) : ?>
            <span class="single-update"><?php the_modified_date('Y.m.d'); ?></span>
          <?php endif; ?>
        </time>
        <span class="single-category"><?php the_category(); ?></span>
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
  <p class="page-top">
  </p>
</div>

<?php get_footer(); ?>