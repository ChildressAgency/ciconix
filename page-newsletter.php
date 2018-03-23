<?php get_header(); ?>
  <section id="newsletter" class="newsletter-signup">
    <div class="container">
      <?php 
        if(have_posts()){
          while(have_posts()){
            the_post();
            the_content();
          }
        } ?>
    </div>
  </section>
<?php get_footer(); ?>