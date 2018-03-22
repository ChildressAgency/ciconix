<div class="social">
  <?php if(get_field('facebook', 'option')): ?>
    <a href="<?php the_field('facebook', 'option'); ?>" target="_blank">
      <span class="fa-layers fa-fw">
        <i class="fas fa-circle"></i>
        <i class="fab fa-facebook" data-fa-transform="shrink-6"></i>
      </span>
    </a>
  <?php endif; if(get_field('twitter', 'option')): ?>
    <a href="<?php the_field('twitter', 'option'); ?>" target="_blank">
      <span class="fa-layers fa-fw">
        <i class="fas fa-circle"></i>
        <i class="fab fa-twitter" data-fa-transform="shrink-6"></i>
      </span>
    </a>
  <?php endif; if(get_field('instagram', 'option')): ?>
    <a href="<?php the_field('instagram', 'option'); ?>" target="_blank">
      <span class="fa-layers fa-fw">
        <i class="fas fa-circle"></i>
        <i class="fab fa-instagram" data-fa-transform="shrink-6"></i>
      </span>
    </a>
  <?php endif; if(get_field('linkedin', 'option')): ?>
    <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank">
      <span class="fa-layers fa-fw">
        <i class="fas fa-circle"></i>
        <i class="fab fa-linkedin-in" data-fa-transform="shrink-6"></i>
      </span>
    </a>
  <?php endif; ?>
</div>
