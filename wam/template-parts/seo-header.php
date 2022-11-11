<?php if(is_category()): ?>
  <meta name="description" content="<?php echo category_description(); ?>">
<?php elseif(is_post_type_archive('works')): ?>
  <meta name="description" content="">
<?php elseif(is_archive()): ?>
  <meta name="description" content="">
<?php elseif(is_singular('works')): ?>
  <meta name="description" content="<?php echo CFS()->get('description'); ?>">
<?php elseif(is_single()): ?>
  <meta name="description" content="<?php echo get_the_excerpt(); ?>">
<?php elseif(is_page('contact')): ?>
  <meta name="description" content="<?php echo get_the_excerpt(); ?>">
<?php else: ?>
  <meta name="description" content="<?php bloginfo('description'); ?>">
<?php endif; ?>