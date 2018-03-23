<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();
            the_content();
          }
        } ?>
      <h2 style="text-align:center; font-weight:700;">How to reach us</h2>
      <div class="row">
        <div class="col-sm-6">
          <div class="contact-info">
            <h3>Headquarters Location</h3>
            <p>CICONIX, LLC<br /><?php the_field('street_address', 'option'); ?><br /><?php the_field('street_address_2', 'option'); ?><br /><?php the_field('city_state_zip', 'option'); ?></p>
            <h3>Email Us</h3>
            <p><?php the_field('email', 'option'); ?></p>
            <p>
              <?php the_field('google_map_embed_code', 'option'); ?>
            </p>
          </div>
        </div>
        <div class="col-sm-6">
          <?php echo do_shortcode('[contact_form]'); ?>
          <?php get_template_part('partials/social', 'content'); ?>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>