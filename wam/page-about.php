<?php get_header(); ?>

<?php
/*
Template Name: About
*/
?>

<section class="section">
  <div class="page-headline">
    <h2><?php the_title(); ?></h2>
    <?php get_template_part('template-parts/breadcrumb'); ?>
  </div>
  <div class="page-about">
    <img class="about-img" src="<?php echo CFS()->get('about_img'); ?>">
    <div class="about-info">
      <div class="about-description">
        <?php echo CFS()->get('about_description'); ?>
      </div> 
      <div class="sns-icon">
        <div class="github-icon">
          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/github.svg" width="35" height="35"></a>
        </div>
        <div class="twitter-icon">
          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.svg" width="35" height="35"></a>
        </div>
        <div class="instagram-icon">
          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" width="35" height="35"></a>
        </div>
        <div class="contact-button">
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button">
            <span>CONTACT</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>