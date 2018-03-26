<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <?php 
        if(have_posts()){
          while(have_posts()){
            the_post();
            the_content();
          }
        } 

        $team_members = get_field('team_members');

        if($team_members):
          $team_member_groups = array_chunk($team_members, 3, true); ?>
          <div class="row">
            <?php 
              for($i=0; $i<count($team_member_groups); $i++):
                foreach($team_member_groups[$i] as $team_member):
                  $member_slug = sanitize_title($team_member['member_name']); ?>

                  <div class="col-sm-4">
                    <div class="member-image" role="button" data-toggle="collapse" data-target=".<?php echo $member_slug; ?>" aria-expanded="false" aria-controls="<?php echo $member_slug; ?>">
                      <img src="<?php echo $team_member['member_image'] ? $team_member['member_image'] : get_stylesheet_directory_uri() . '/images/profile-placeholder.png'; ?>" class="img-responsive center-block" alt="<?php echo $team_member['member_name']; ?>" />
                      <div class="member-name-title">
                        <h4><?php echo $team_member['member_name']; ?></h4>
                        <p><?php echo $team_member['member_title']; ?></p>
                      </div>
                    </div>
                    <div class="display-wrapper visible-xs-block">
                      <div id="<?php echo $member_slug; ?>" class="member-bio collapse <?php echo $member_slug; ?>">
                        <div class="member-bio-inner">
                          <hr />
                          <?php echo $team_member['member_bio']; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; reset($team_member_groups[$i]); ?>
              </div>
              <div class="row">
                <?php foreach($team_member_groups[$i] as $team_member): 
                  $member_slug = sanitize_title($team_member['member_name']); ?>
                  <div class="col-sm-12">
                    <div class="display-wrapper hidden-xs">
                      <div id="<?php echo $member_slug; ?>" class="member-bio collapse hidden-xs <?php echo $member_slug; ?>">
                        <div class="member-bio-inner">
                          <hr />
                          <?php echo $team_member['member_bio']; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
            <?php endfor; ?>
          </div>
      <?php endif; ?>
    </div>
  </main>
<?php get_footer(); ?>