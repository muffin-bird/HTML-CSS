<?php get_header(); ?>

<div class="section">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="page-headline">
    <h2><?php the_title(); ?></h2>
    <?php get_template_part('template-parts/breadcrumb'); ?>
  </div>
  <?php the_content(); ?>
  <?php endwhile; endif; ?>
  <p class="page-top">
  </p>
</div>

<?php get_footer(); ?>