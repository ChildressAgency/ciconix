<?php get_header(); ?>
  <section id="at-a-glance">
    <h2>CICONIX at a Glance</h2>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div id="founded" class="glance">
            <h3>Founded 2012</h3>
          </div>
        </div>
        <div class="col-sm-4">
          <div id="headquarters" class="glance">
            <h3>Maryland LLC headquartered in Annapolis, MD</h3>
          </div>
        </div>
        <div class="col-sm-4">
          <div id="certified" class="glance">
            <h3>8(a)-Certified through September 2025</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="codes" class="call-out">
    <div class="container">
      <?php the_field('codes_section_content'); ?>
    </div>
  </section>
  <section id="differentiators">
    <div class="container container-sm-height">
      <h2>Our key differentiators include:</h2>
      <article id="virtual-health" class="two-sided icon-title">
        <h3><?php the_field('virtual_health_section_title'); ?></h3>
        <div class="row row-sm-height">
          <div class="col-sm-6 col-sm-push-6 col-sm-height">
            <img src="<?php the_field('virtual_health_section_image'); ?>" class="img-responsive center-block" alt="" />
          </div>
          <div class="col-sm-6 col-sm-pull-6 col-sm-height">
            <?php the_field('virtual_health_section_content'); ?>
          </div>
        </div>
      </article>
      <article id="research-ta" class="two-sided icon-title">
        <h3><?php the_field('scientific_research_section_title'); ?></h3>
        <div class="row row-sm-height">
          <div class="col-sm-6 col-sm-push-6 col-sm-height">
            <img src="<?php the_field('scientific_research_section_image'); ?>" class="img-responsive center-block" alt="" />
          </div>
          <div class="col-sm-6 col-sm-pull-6 col-sm-height">
            <?php the_field('scientific_research_section_content'); ?>
          </div>
        </div>
      </article>
      <article id="training-advisory" class="two-sided icon-title">
        <h3><?php the_field('lean_training_section_title'); ?></h3>
        <div class="row row-sm-height">
          <div class="col-sm-6 col-sm-push-6 col-sm-height">
            <img src="<?php the_field('lean_training_section_image'); ?>" class="img-responsive center-block" alt="" />
          </div>
          <div class="col-sm-6 col-sm-pull-6 col-sm-height">
            <?php the_field('lean_training_section_content'); ?>
          </div>
        </div>
      </article>
      <article id="healthcare-ta" class="two-sided icon-title">
        <h3><?php the_field('talent_acquisition_section_title'); ?></h3>
        <div class="row row-sm-height">
          <div class="col-sm-6 col-sm-push-6 col-sm-height">
            <img src="<?php the_field('talent_acquisition_section_image'); ?>" class="img-responsive center-block" alt="" />
          </div>
          <div class="col-sm-6 col-sm-pull-6 col-sm-height">
            <?php the_field('talent_acquisition_section_content'); ?>
          </div>
        </div>
      </article>
    </div>
    <div class="background-logo"></div>
  </section>
<?php get_footer(); ?>