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
                <?php the_post_thumbnail('thumbnail'); ?>
              <?php else : ?>
                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/img/blog.jpg" alt="blog">
              <?php endif; ?>
            </div>
            <div class="archive-card-info">
              <time class="archive-card-data"><?php echo get_the_date('Y.m.d'); ?></time>
              <h2 class="archive-card-title"><?php the_title(); ?></h2>
            </div>
          </a>
        </li>
      <?php 
      endforeach; // ループ終わり
      ?>
    </ul>
  </aside>
</aside>
