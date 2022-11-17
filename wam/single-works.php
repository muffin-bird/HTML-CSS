<?php get_header(); ?>

<div class="section">
  <div class="page-headline">
    <h2>Works</h2>
    <?php get_template_part('template-parts/breadcrumb'); ?>
  </div>
  <figure>
    <img class="single-works-img" src="<?php echo CFS()->get('thumbnail'); ?>" alt="works">
    <figcaption class="single-works-info">
      <p class="single-works-client"><?php echo CFS()->get('client'); ?></p>
      <p class="single-works-type"><?php echo CFS()->get('type'); ?></p>
      <p class="single-works-description"><?php echo CFS()->get('description'); ?></p>
    </figcaption>
  </figure>
  <div class="page-nation">
    <?php if (get_previous_post()) : ?>
      <div class="page-left">
        <p><?php previous_post_link('&laquo; %link', 'PREV'); ?></p>
      </div>  
    <?php endif; ?>
    <?php if (get_next_post()) : ?>
      <div class="page-right">
        <?php next_post_link('%link &raquo;', 'NEXT'); ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>