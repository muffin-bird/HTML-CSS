<?php get_header(); ?>
<section class="section">
  <div class="page-headline">
    <h2>404 NOT FOUND</h2>
    <?php get_template_part('template-parts/breadcrumb'); ?>
  </div>
  <div class="container">
    <p>お探しのページが見つかりませんでした。</p>
    <p>申し訳ございませんが、<a href="<?php echo esc_url(home_url('/')); ?>">こちらのリンク</a>からトップページにお戻りください。</p>
  </div>
  <p class="page-top">
  </p>
</section>

<?php get_footer(); ?>