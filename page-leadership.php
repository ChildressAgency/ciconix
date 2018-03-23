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
        if(!empty($team_members)): ?>
          <div class="row">
            <?php 
              $i=1; foreach($team_members as $team_member): 
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
            <?php $i++; endwhile; ?>
          </div>
      <?php endif; ?>
        <div class="col-sm-4">
          <div class="member-image" role="button" data-toggle="collapse" data-target=".member2" aria-expanded="false" aria-controls="member2">
            <img src="images/dan-cassidy.jpg" class="img-responsive center-block" alt="member2" />
            <div class="member-name-title">
              <h4>Member 2</h4>
              <p>CEO</p>
            </div>
          </div>
          <div class="display-wrapper visible-xs-block">
            <div id="member2" class="member2 member-bio collapse">
              <div class="member-bio-inner">
                <hr />
                <p>Marion a. Porter is a former U.S. Navy Corpsman who went on to become a Physician's Assistant (PA). After several years as a civilian urgent care practitioner, he began a government consulting career marked by more than two decades of progressive experiences in the health and human services domains spanning a range of diverse roles and responsibilities involving Business Capture, Project Delivery, and Operations Oversight.</p>
                <p>As the founder and managing principal of CICONIX, Mr. Porter is directly responsible for the tone and governance of an organizational culture and climate established to attract quality professional staff, offer clear and collaborative thinking, and deliver outcomes to our customers that are not only measurable, but also solidly cost positioned.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="member-image" role="button" data-toggle="collapse" data-target=".member3" aria-expanded="false" aria-controls="member3">
            <img src="images/team-member-placeholder.jpg" class="img-responsive center-block" alt="member3" />
            <div class="member-name-title">
              <h4>Member 3</h4>
              <p>President & COO</p>
            </div>
          </div>
          <div class="display-wrapper visible-xs-block">
            <div id="member3" class="member3 member-bio collapse">
              <div class="member-bio-inner">
                <hr />
                <p>Marion a. Porter is a former U.S. Navy Corpsman who went on to become a Physician's Assistant (PA). After several years as a civilian urgent care practitioner, he began a government consulting career marked by more than two decades of progressive experiences in the health and human services domains spanning a range of diverse roles and responsibilities involving Business Capture, Project Delivery, and Operations Oversight.</p>
                <p>As the founder and managing principal of CICONIX, Mr. Porter is directly responsible for the tone and governance of an organizational culture and climate established to attract quality professional staff, offer clear and collaborative thinking, and deliver outcomes to our customers that are not only measurable, but also solidly cost positioned.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="display-wrapper hidden-xs">
            <div id="marion-porter" class="marion-porter member-bio collapse hidden-xs">
              <div class="member-bio-inner">
                <hr />
                <p>Marion a. Porter is a former U.S. Navy Corpsman who went on to become a Physician's Assistant (PA). After several years as a civilian urgent care practitioner, he began a government consulting career marked by more than two decades of progressive experiences in the health and human services domains spanning a range of diverse roles and responsibilities involving Business Capture, Project Delivery, and Operations Oversight.</p>
                <p>As the founder and managing principal of CICONIX, Mr. Porter is directly responsible for the tone and governance of an organizational culture and climate established to attract quality professional staff, offer clear and collaborative thinking, and deliver outcomes to our customers that are not only measurable, but also solidly cost positioned.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="display-wrapper hidden-xs">
            <div id="member2" class="member2 member-bio collapse">
              <div class="member-bio-inner">
                <hr />
                <p>Marion a. Porter is a former U.S. Navy Corpsman who went on to become a Physician's Assistant (PA). After several years as a civilian urgent care practitioner, he began a government consulting career marked by more than two decades of progressive experiences in the health and human services domains spanning a range of diverse roles and responsibilities involving Business Capture, Project Delivery, and Operations Oversight.</p>
                <p>As the founder and managing principal of CICONIX, Mr. Porter is directly responsible for the tone and governance of an organizational culture and climate established to attract quality professional staff, offer clear and collaborative thinking, and deliver outcomes to our customers that are not only measurable, but also solidly cost positioned.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="display-wrapper hidden-xs">
            <div id="member3" class="member3 member-bio collapse">
              <div class="member-bio-inner">
                <hr />
                <p>Marion a. Porter is a former U.S. Navy Corpsman who went on to become a Physician's Assistant (PA). After several years as a civilian urgent care practitioner, he began a government consulting career marked by more than two decades of progressive experiences in the health and human services domains spanning a range of diverse roles and responsibilities involving Business Capture, Project Delivery, and Operations Oversight.</p>
                <p>As the founder and managing principal of CICONIX, Mr. Porter is directly responsible for the tone and governance of an organizational culture and climate established to attract quality professional staff, offer clear and collaborative thinking, and deliver outcomes to our customers that are not only measurable, but also solidly cost positioned.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="member-image" role="button" data-toggle="collapse" data-target=".member4" aria-expanded="false" aria-controls="member4">
            <img src="images/marion-porter-profile.jpg" class="img-responsive center-block" alt="Marion Porter" />
            <div class="member-name-title">
              <h4>Marion A. Porter</h4>
              <p>Founder and Managing Principal</p>
            </div>
          </div>
          <div class="display-wrapper visible-xs-block">
            <div id="member4" class="member4 member-bio collapse">
              <div class="member-bio-inner">
                <hr />
                <p>Marion a. Porter is a former U.S. Navy Corpsman who went on to become a Physician's Assistant (PA). After several years as a civilian urgent care practitioner, he began a government consulting career marked by more than two decades of progressive experiences in the health and human services domains spanning a range of diverse roles and responsibilities involving Business Capture, Project Delivery, and Operations Oversight.</p>
                <p>As the founder and managing principal of CICONIX, Mr. Porter is directly responsible for the tone and governance of an organizational culture and climate established to attract quality professional staff, offer clear and collaborative thinking, and deliver outcomes to our customers that are not only measurable, but also solidly cost positioned.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="member-image" role="button" data-toggle="collapse" data-target=".member5" aria-expanded="false" aria-controls="member5">
            <img src="images/dan-cassidy.jpg" class="img-responsive center-block" alt="member2" />
            <div class="member-name-title">
              <h4>Member 2</h4>
              <p>CEO</p>
            </div>
          </div>
          <div class="display-wrapper visible-xs-block">
            <div id="member5" class="member5 member-bio collapse">
              <div class="member-bio-inner">
                <hr />
                <p>Marion a. Porter is a former U.S. Navy Corpsman who went on to become a Physician's Assistant (PA). After several years as a civilian urgent care practitioner, he began a government consulting career marked by more than two decades of progressive experiences in the health and human services domains spanning a range of diverse roles and responsibilities involving Business Capture, Project Delivery, and Operations Oversight.</p>
                <p>As the founder and managing principal of CICONIX, Mr. Porter is directly responsible for the tone and governance of an organizational culture and climate established to attract quality professional staff, offer clear and collaborative thinking, and deliver outcomes to our customers that are not only measurable, but also solidly cost positioned.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="member-image" role="button" data-toggle="collapse" data-target=".member6" aria-expanded="false" aria-controls="member6">
            <img src="images/team-member-placeholder.jpg" class="img-responsive center-block" alt="member3" />
            <div class="member-name-title">
              <h4>Member 3</h4>
              <p>President & COO</p>
            </div>
          </div>
          <div class="display-wrapper visible-xs-block">
            <div id="member6" class="member6 member-bio collapse">
              <div class="member-bio-inner">
                <hr />
                <p>Marion a. Porter is a former U.S. Navy Corpsman who went on to become a Physician's Assistant (PA). After several years as a civilian urgent care practitioner, he began a government consulting career marked by more than two decades of progressive experiences in the health and human services domains spanning a range of diverse roles and responsibilities involving Business Capture, Project Delivery, and Operations Oversight.</p>
                <p>As the founder and managing principal of CICONIX, Mr. Porter is directly responsible for the tone and governance of an organizational culture and climate established to attract quality professional staff, offer clear and collaborative thinking, and deliver outcomes to our customers that are not only measurable, but also solidly cost positioned.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="display-wrapper hidden-xs">
            <div id="member4" class="member4 member-bio collapse">
              <div class="member-bio-inner">
                <hr />
                <p>Marion a. Porter is a former U.S. Navy Corpsman who went on to become a Physician's Assistant (PA). After several years as a civilian urgent care practitioner, he began a government consulting career marked by more than two decades of progressive experiences in the health and human services domains spanning a range of diverse roles and responsibilities involving Business Capture, Project Delivery, and Operations Oversight.</p>
                <p>As the founder and managing principal of CICONIX, Mr. Porter is directly responsible for the tone and governance of an organizational culture and climate established to attract quality professional staff, offer clear and collaborative thinking, and deliver outcomes to our customers that are not only measurable, but also solidly cost positioned.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="display-wrapper hidden-xs">
            <div id="member5" class="member5 member-bio collapse">
              <div class="member-bio-inner">
                <hr />
                <p>Marion a. Porter is a former U.S. Navy Corpsman who went on to become a Physician's Assistant (PA). After several years as a civilian urgent care practitioner, he began a government consulting career marked by more than two decades of progressive experiences in the health and human services domains spanning a range of diverse roles and responsibilities involving Business Capture, Project Delivery, and Operations Oversight.</p>
                <p>As the founder and managing principal of CICONIX, Mr. Porter is directly responsible for the tone and governance of an organizational culture and climate established to attract quality professional staff, offer clear and collaborative thinking, and deliver outcomes to our customers that are not only measurable, but also solidly cost positioned.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="display-wrapper hidden-xs">
            <div id="member6" class="member6 member-bio collapse">
              <div class="member-bio-inner">
                <hr />
                <p>Marion a. Porter is a former U.S. Navy Corpsman who went on to become a Physician's Assistant (PA). After several years as a civilian urgent care practitioner, he began a government consulting career marked by more than two decades of progressive experiences in the health and human services domains spanning a range of diverse roles and responsibilities involving Business Capture, Project Delivery, and Operations Oversight.</p>
                <p>As the founder and managing principal of CICONIX, Mr. Porter is directly responsible for the tone and governance of an organizational culture and climate established to attract quality professional staff, offer clear and collaborative thinking, and deliver outcomes to our customers that are not only measurable, but also solidly cost positioned.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>