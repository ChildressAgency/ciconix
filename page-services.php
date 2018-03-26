<?php get_header(); ?>
  <main id="services">
    <section class="page-intro">
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
    <section id="program-governance" class="two-sided icon-title">
      <div class="container section-title">
        <h3><?php the_field('program_governance_section_title'); ?></h3>
      </div>
      <div class="container container-sm-height">
        <div class="row row-sm-height">
          <div class="col-sm-6 col-sm-push-6 col-sm-height">
            <img src="<?php the_field('program_governance_section_image'); ?>" class="img-responsive center-block" alt="" />
          </div>
          <div class="col-sm-6 col-sm-pull-6 col-sm-height">
            <?php the_field('program_governance_section_content'); ?>
            <a href="<?php echo home_url('experience'); ?>" class="btn-main">Experience</a>
          </div>
        </div>
      </div>
    </section>
    <section class="call-out">
      <div class="container">
        <?php the_field('program_governance_section_callout'); ?>
      </div>
    </section>
    <section id="business-advisory" class="two-sided icon-title">
      <div class="container section-title">
        <h3><?php the_field('business_advisory_section_title'); ?></h3>        
      </div>
      <div class="container container-sm-height">
        <div class="row row-sm-height">
          <div class="col-sm-6 col-sm-push-6 col-sm-height">
            <img src="<?php the_field('business_advisory_section_image'); ?>" class="img-responsive center-block" alt="" />
          </div>
          <div class="col-sm-6 col-sm-pull-6 col-sm-height">
            <?php the_field('business_advisory_section_content'); ?>
            <a href="<?php echo home_url('experience'); ?>" class="btn-main">Experience</a>
          </div>
        </div>
      </div>
    </section>
    <section id="information-management" class="two-sided icon-title">
      <div class="container section-title">
        <h3><?php the_field('information_management_section_title'); ?></h3>        
      </div>
      <div class="container container-sm-height">
        <div class="row row-sm-height">
          <div class="col-sm-6 col-sm-push-6 col-sm-height">
            <img src="<?php the_field('information_management_section_image'); ?>" class="img-responsive center-block" alt="" />
          </div>
          <div class="col-sm-6 col-sm-pull-6 col-sm-height">
            <?php the_field('information_management_section_content'); ?>
            <a href="<?php echo home_url('experience'); ?>" class="btn-main">Experience</a>
          </div>
        </div>
      </div>
    </section>
    <section class="call-out">
      <div class="container">
        <?php the_field('staff_augmentation_section_callout'); ?>
      </div>
    </section>
    <section id="staff-augmentation" class="two-sided icon-title">
      <div class="container section-title">
        <h3><?php the_field('staff_augmentation_section_title'); ?></h3>        
      </div>
      <div class="container container-sm-height">
        <div class="row row-sm-height">
          <div class="col-sm-6 col-sm-push-6 col-sm-height">
            <img src="<?php the_field('staff_augmentation_section_image'); ?>" class="img-responsive center-block" alt="" />
          </div>
          <div class="col-sm-6 col-sm-pull-6 col-sm-height">
            <?php the_field('staff_augmentation_section_content'); ?>
            <a href="<?php echo home_url('experience'); ?>" class="btn-main">Experience</a>
          </div>
        </div>
      </div>
    </section>
    <div class="background-logo"></div>
  </main>
<?php get_footer(); ?>