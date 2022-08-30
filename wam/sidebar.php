<aside class="sidebar-area">
  <aside class="twitter-widget">
    <h2 class="widget-headline">Twitter</h2>
    <?php dynamic_sidebar('sidebar-widget-area'); ?>
  </aside>
  <aside class="archive-widget">
    <h2 class="widget-headline">最近の投稿</h2>
    <ul class="archive-card">
      <?php
        $args = array( // パラメーターを指定
          'posts_per_page' => 3 // 表示件数
        );
        $posts = get_posts($args); // 投稿データの取得
        foreach($posts as $post): // ループ開始
        setup_postdata($post); // 記事データの取得
      ?>
        <li class="archive-card-item">
          <a href="<?php the_permalink(); ?>">
            <div class="archive-card-img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('', ['class' => 'card-img']); ?>
              <?php else : ?>
                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg" alt="thumbnail">
              <?php endif; ?>
            </div>
            <div class="archive-card-info">
              <time class="archive-card-data"><?php echo get_the_date('Y.m.d'); ?></time>
              <p class="archive-card-title"><?php the_title(); ?></p>
            </div>
          </a>
        </li>
      <?php 
      endforeach; // ループ終わり
      ?>
    </ul>
  </aside>
</aside>
