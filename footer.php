<?php wp_footer(); ?>
<footer class="footer">
      <div class="footer__wrapper">
        <a href="<?php echo site_url('/') ?>">BLOG</a>
        <?php wp_nav_menu(array(
              'theme_location' => 'footer-menu',
            ))?>
        <p>Copyrights 2022. All Right Reserved</p>
        <!-- echo get_template_directory(); -> localhost -->
        <!-- echo get_template_directory_uri() -> online -->
      </div>
    </footer>
  </body>
</html>