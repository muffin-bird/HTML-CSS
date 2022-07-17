<?php get_header(); ?>

<div class="section">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="page-headline"><?php the_title(); ?></div>
  <?php the_content(); ?>
  <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>