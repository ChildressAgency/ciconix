<?php get_header(); ?>
<main id="main">
  <div class="container">
    <?php if(is_archive()): ?>
      <div class="row">
        <div class="col-sm-8">
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="blog-summary">
              <div class="row">
                <div class="col-sm-3">
                  <?php
                    if(has_post_thumbnail()){
                      the_post_thumbnail('full', array('class' => 'img-responsive center-block'));
                    } ?>
                </div>
                <div class="col-sm-9">
                  <h3 class="summary-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <h4 class="post-date"><?php echo get_the_date('F, j Y'); ?></h4>
                  <?php the_excerpt(); ?>
                </div>
              </div>
            </div>
          <?php endwhile; wp_pagenavi(); endif; ?>
        </div>
        <div class="col-sm-4">
          <?php get_sidebar(); ?>
        </div>
      </div>
    <?php else: ?>
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <article>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </article>
      <?php endwhile; endif; ?>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>