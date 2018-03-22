  <footer>
    <div class="container">
      <a href="<?php echo home_url(); ?>" class="footer-logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-grey.png" class="img-responsive center-block" alt="Ciconix Logo" />
      </a>
      <?php
        $footer_nav_args = array(
          'theme_location' => 'footer-nav',
          'menu' => '',
          'container' => 'div',
          'container_id' => 'footer-nav',
          'container_class', => '',
          'menu_class' => 'nav nav-justified',
          'menu_id' => '',
          'echo' => true,
          'fallback_cb' => 'ciconix_footer_fallback_menu',
          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth' => 1,
          'walker' => new wp_bootstrap_navwalker()
        );
        wp_nav_menu($footer_nav_args); ?>
      <div id="footer-sub-nav">
        <div class="row">
          <div class="col-sm-3">
            <?php get_template_part('partials/social', 'content'); ?>
          </div>
          <div class="col-sm-5 col-md-4">
            <div class="email-phone">
              <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>&bull;<a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
            </div>
          </div>
          <div class="col-sm-4 col-md-5">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo home_url('careers'); ?>">Careers</a></li>
              <li><a href="<?php echo home_url('media-center'); ?>">Media Center</a></li>
              <li><a href="<?php echo home_url('newsletter'); ?>">Newsletter</a></li>
              <li><a href="<?php echo home_url('blog'); ?>">Blog</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="colophon">
        <p>Copyright &copy;<?php echo date('Y'); ?> Ciconix. All Rights Reserved</p>
        <p>Website Created by <a href="https://childressagency.com" target="_blank">The Childress Agency</a></p>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>