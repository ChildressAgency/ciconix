<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">

  <title>Ciconix</title>

  <?php wp_head(); ?>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
  <nav id="header-nav">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="<?php echo home_url(); ?>" class="header-logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive" alt="Ciconix Logo" />
        </a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="expanded" aria-controls="navbar">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <div class="subnav-social">
          <?php get_template_part('partials/social', 'content'); ?>
          <ul class="header-subnav list-unstyled list-inline">
            <li><a href="<?php echo home_url('careers'); ?>">Careers</a></li>
            <li><a href="<?php echo home_url('media-center'); ?>">Media Center</a></li>
            <li><a href="<?php echo home_url('newsletter'); ?>">Newsletter</a></li>
            <li><a href="<?php echo home_url('blog'); ?>">Blog</a></li>
          </ul>
        </div>
        <div class="clearfix"></div>
        <?php
          $header_nav_args = array(
            'theme_location' => 'header-nav',
            'menu' => '',
            'container' => '',
            'container_id' => '',
            'container_class' => '',
            'menu_class' => 'nav navbar-nav navbar-right',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'ciconix_header_fallback_menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 2,
            'walker' => new wp_bootstrap_navwalker();
          );
          wp_nav_menu($header_nav_args); ?>

      </div>
    </div>
  </nav>
  <?php
    $hero_image = get_field('default_hero_image', 'option');
    $hero_image_css = get_field('default_hero_image_css', 'option');
    if(get_field('hero_image')){
      $hero_image = get_field('hero_image');
      $hero_image_css = get_field('hero_image_css');
    } ?>
  <div id="hero" style="background-image:url(<?php echo $hero_image; ?>); <?php echo $hero_image_css; ?>">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-sm-push-3 col-md-7 col-md-push-5">
          <div class="hero-caption">
            <?php
              $page_title = '';
              $page_subtitle = '';
              if(is_home() || is_single()){
                $page_title = 'Blog';

                $blog_page = get_page_by_path('blog');
                $blog_page_id = $blog_page->ID;

                $page_subtitle = get_field('page_subtitle', $blog_page_id);
              } 
              elseif(is_category($category)){
                $categories = get_the_category();
                $page_title = esc_html($categories[0]->name);
                $page_subtitle = category_description($categories[0]->term_id);
              }
              else{
                $page_title = get_field('page_title') ? get_field('page_title') : get_the_title();
                $page_subtitle = get_field('page_subtitle');
              } ?>
            <h1><?php echo $page_title; ?></h1>
            <?php if($page_subtitle){ echo '<p>' . $page_subtitle . '</p>'; } ?>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay"></div>
  </div>
