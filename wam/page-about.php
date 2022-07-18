<?php get_header(); ?>

<section class="section">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="page-headline"><?php the_title(); ?></div>
  <div class="page-about">
    <img class="about-img" src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" width="250" height="250" alt="about">
    <div class="about-info">
      <div class="about-description">
        <?php the_content(); ?>
      </div>
      <div class="sns-icon">
        <div class="twitter-icon">
          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" width="40" height="40"></a>
        </div>
        <div class="instagram-icon">
          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" width="40" height="40"></a>
        </div>
        <div class="contact-button">
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button">
            <span>Contact</span>
            <img class="button-icon" src="<?php echo get_template_directory_uri(); ?>/img/icon.svg" width="20" height="20">
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>