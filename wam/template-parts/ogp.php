<meta property="og:url" content="<?php echo get_the_permalink(); ?>">
<meta property="og:title" content="<?php echo get_page_title(); ?>">
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:site" content="">
<meta property="fb:app_id" content="">

<?php if(is_category() || is_single()): ?>
  <meta property="og:type" content="article">
<?php else: ?>
  <meta property="og:type" content="website">
<?php endif; ?>

<?php if(is_category()): ?>
  <meta property="og:description" content="<?php echo category_description(); ?>">
<?php elseif(is_post_type_archive('works')): ?>
  <meta property="og:description" content="">
<?php elseif(is_archive()): ?>
  <meta property="og:description" content="">
<?php elseif(is_singular('works')): ?>
  <meta property="og:description" content="<?php echo CFS()->get('description'); ?>">
<?php elseif(is_single()): ?>
  <meta property="og:description" content="<?php echo get_the_excerpt(); ?>">
<?php elseif(is_page('contact')): ?>
  <meta property="og:description" content="<?php echo get_the_excerpt(); ?>">
<?php else: ?>
  <meta property="og:description" content="<?php bloginfo('description'); ?>">
<?php endif; ?>

<?php if(is_singular('works')): ?>
  <meta property="og:image" content="<?php echo CFS()->get('thumbnail'); ?>">
<?php elseif(is_single()): ?>
  <meta property="og:image" content="<?php the_post_thumbnail_url(); ?>">
<?php else: ?>
  <meta property="og:image" content="">
<?php endif; ?>