<?php get_header(); ?>

<div class="section">
<div class="page-headline">Works</div>
<figure>
  <img class="single-works-img" src="<?php echo CFS()->get('thumbnail'); ?>" alt="works">
  <figcaption class="single-works-info">
    <p class="single-works-client"><?php echo CFS()->get('client'); ?></p>
    <p class="single-works-type"><?php echo CFS()->get('type'); ?></p>
    <p class="single-works-description"><?php echo CFS()->get('description'); ?></p>
  </figcaption>
</figure>
</div>

<?php get_footer(); ?>