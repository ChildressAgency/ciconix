<?php get_header(); ?>
  <section id="mission">
    <div class="container-fluid container-sm-height">
      <div class="row row-sm-height">
        <div class="col-sm-6 col-sm-height">
          <div class="text-side">
            <?php the_field('mission-statement'); ?>
            <a href="<?php echo home_url('services'); ?>" class="btn-main">Services</a>
          </div>
        </div>
        <div class="col-sm-6 col-sm-height">
          <ul class="list-unstyled">
            <li id="specialty-area-one" class="specialty-area" style="background-image:url(<?php the_field('specialty_1_background_image'); ?>);">
              <div class="caption-wrapper">
                <div class="caption">
                  <h3><?php the_field('specialty_1_title'); ?></h3>
                </div>
              </div>
              <div class="number-overlay"></div>
            </li>
            <li id="specialty-area-two" class="specialty-area" style="background-image:url(<?php the_field('specialty_2_background_image'); ?>);">
              <div class="caption-wrapper">
                <div class="caption">
                  <h3><?php the_field('specialty_2_title'); ?></h3>
                </div>
              </div>
              <div class="number-overlay"></div>
            </li>
            <li id="specialty-area-three" class="specialty-area" style="background-image:url(<?php the_field('specialty_3_background_image'); ?>);">
              <div class="caption-wrapper">
                <div class="caption">
                  <h3><?php the_field('specialty_3_title'); ?></h3>
                </div>
              </div>
              <div class="number-overlay"></div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="veterans" class="centered-content">
    <div class="container">
      <?php the_field('veterans_section_content'); ?>
    </div>
  </section>
  <section id="differentiators-short">
    <h2>Key CICONIX differentiators include:</h2>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="diff-block" style="background-image:url(<?php the_field('key_differentiator_1_image'); ?>); <?php the_field('key_differentiator_1_image_css'); ?>">
            <div class="diff-block-caption">
              <h4><?php the_field('key_differentiator_1_title'); ?></h4>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="diff-block" style="background-image:url(<?php the_field('key_differentiator_2_image'); ?>); <?php the_field('key_differentiator_2_image_css'); ?>>">
            <div class="diff-block-caption">
              <h4><?php the_field('key_differentiator_2_title'); ?></h4>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="diff-block" style="background-image:url(<?php the_field('key_differentiator_3_image'); ?>); <?php the_field('key_differentiator_3_image_css'); ?>">
            <div class="diff-block-caption">
              <h4><?php the_field('key_differentiator_3_title'); ?></h4>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="diff-block" style="background-image:url(<?php the_field('key_differentiator_4_image'); ?>); <?php the_field('key_differentiator_4_image_css'); ?>">
            <div class="diff-block-caption">
              <h4><?php the_field('key_differentiator_4_title'); ?></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="founders-message">
    <div class="container">
      <h2>Founder's Message</h2>
      <div class="row">
        <div class="col-sm-6">
          <?php the_field('founders_message'); ?>
        </div>
        <div class="col-sm-6">
          <img src="<?php the_field('marion_porter_image'); ?>" class="img-responsive center-block" alt="Marion A. Porter" />
        </div>
      </div>
    </div>
  </section>
  <section id="performance">
    <div class="container-fluid container-sm-height">
      <div class="row row-sm-height">
        <div class="col-sm-6 col-sm-height">
          <div class="text-side">
            <?php the_field('past_performance_section_content'); ?>
            <a href="<?php echo home_url('experience'); ?>" class="btn-main">Past and Present Performance</a>
          </div>
        </div>
        <div class="col-sm-6 col-sm-height image-side" style="background-image:url(<?php the_field('past_performance_section_image'); ?>); <?php the_field('past_performance_section_image_css'); ?>"></div>
      </div>
    </div>
  </section>
  <section class="centered-content">
    <?php the_field('careers_section_content'); ?>
    <a href="<?php echo home_url('careers'); ?>" class="btn-main btn-alt">Careers</a>
  </section>
  <section id="newsletter">
    <div class="container container-sm-height">
      <div class="row row-sm-height">
        <div class="col-sm-6 col-sm-height">
          <?php the_field('newsletter_section_content'); ?>
        </div>
        <div class="col-sm-6 col-sm-height">
          <?php echo do_shortcode('[contact-form-7 id="31" title="Newsletter Signup"]'); ?>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>