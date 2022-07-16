<?php get_header(); ?>

<div class="section">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php echo get_the_date('Y.m.d'); ?>
  <?php the_title(); ?>
  <?php the_content(); ?>
  <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>