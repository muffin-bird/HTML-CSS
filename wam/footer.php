<footer class="footer">
    <nav class="footer-nav-list">
      <ul>
        <li <?php if(is_page('about')) echo 'class="current-footer"'; ?>><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
        <li <?php if(is_post_type_archive('works') || is_singular('works')) echo 'class="current-footer"'; ?>><a href="<?php echo esc_url(home_url('/works/')); ?>">Works</a></li>
        <li <?php if(!is_post_type_archive('works') && is_archive() || is_single() && !is_singular('works')) echo 'class="current-footer"'; ?>><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a></li>
        <li <?php if(is_page('contact')) echo 'class="current-footer"'; ?>><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
      </ul>
      <small class="footer-copy">©2022 XXX.Inc All right Reserved</small>
    </nav>
  </footer>
<?php wp_footer(); ?>
</div>
</body>
</html>