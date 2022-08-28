<footer class="footer">
    <nav class="footer-nav-list">
      <ul>
        <li <?php if(is_page('about')) echo 'class="current-footer"'; ?>><a href="<?php echo esc_url(home_url('/about/')); ?>">ABOUT</a></li>
        <li <?php if(is_post_type_archive('works') || is_singular('works')) echo 'class="current-footer"'; ?>><a href="<?php echo esc_url(home_url('/works/')); ?>">WORKS</a></li>
        <li <?php if(!is_post_type_archive('works') && is_archive() || is_single() && !is_singular('works')) echo 'class="current-footer"'; ?>><a href="<?php echo esc_url(home_url('/blog/')); ?>">BLOG</a></li>
        <li <?php if(is_page('contact')) echo 'class="current-footer"'; ?>><a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT</a></li>
      </ul>
      <small class="footer-copy">©2022 XXX.Inc All right Reserved</small>
    </nav>
  </footer>
<?php wp_footer(); ?>
</div>
</body>
</html>