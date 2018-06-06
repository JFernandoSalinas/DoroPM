<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="site-branding">
            <?php if(has_custom_logo()) {
              the_custom_logo();
            }else {?>
            <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
           <?php } ?>
        </div>
        <div class="primary nav-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
      <div class="bottom-nav-div row">
        <div class='weather-widget col-xs-12 col-md-5'><div id="plemx-root"></div></div>
        <div class="contact-details col-xs-12 col-md-7"><h4><ion-icon name="mail-open"></ion-icon><a href='mailto:luis.teodoro@doropm.com'>Email: luis.teodoro@doropm.com</a></h4><h4><ion-icon name="call"></ion-icon><a href='tel:416-897-8142'>Call Us: 416-897-8142</a></h4></div>
     </div>
      <div class="custom-header-bg">
      <!--Add Header image to page.-->
            <div id="header-wrap" class="header-wrap row" style="background-image: url('<?php the_post_thumbnail_url(array(700, 9999));?>')">
              <div class='col-md-2'></div>
              <div class='col-md-6'>
               <header class="entry-header">
                 <h1 class="entry-title">
                   <?php the_title();rewind_posts();?>
                 </h1>
                 <?php if(is_front_page()){ echo apply_filters( 'the_content', get_post( get_option( 'page_on_front' ) )->post_content ); }?>
              </header>
        </div>
       </div>
