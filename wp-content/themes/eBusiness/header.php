<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo get_bloginfo( 'name' ); ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

 

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  
  <?php wp_head();?>
</head>

<body data-spy="scroll" data-target="#navbar-example">

   <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="<?php echo get_bloginfo( 'wpurl' );?>">
                  <h1><span>e</span><?php echo get_bloginfo( 'name' ); ?></h1>
                <p style="color:#3ec1d5;"><?php echo get_bloginfo( 'description' ); ?></p>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) {
        echo '<img src="'. esc_url( $logo[0] ) .'">';
} //else {
        //echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
//}?>
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="<?php echo get_bloginfo( 'wpurl' );?>">Home</a>
                    				
<?php wp_list_pages( '&title_li=' ); ?>                    				
                  </li>
                  	 <!--	<li class="active">
                  	<a class="page-scroll"><?php wp_list_pages( '&title_li=' ); ?></a>
                  </li>
                  
                 <li>
                    <a class="page-scroll" href="#about">About</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#services">Services</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#team">Team</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#portfolio">Portfolio</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#blog">Blog</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                  </li>
                  -->
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
      <img src="<?php echo get_theme_mod('first_slide') ?>" height="" width="" title="#slider-direction-1">
      <img src="<?php echo get_theme_mod('second_slide') ?>" height="" width="" title="#slider-direction-2">
      <img src="<?php echo get_theme_mod('third_slide') ?>" height="" width="" title="#slider-direction-3" > 

      <!--	  <img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
      	  <img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
      	  <img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider3.jpg" alt="" title="#slider-direction-3" />
      	  	  

      	  
        <!--<img src="img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
        <img src="img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
        <img src="img/slider/slider3.jpg" alt="" title="#slider-direction-3" />-->
      </div>

      	  <!--<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
      	  
      	  
      	  <img alt="" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">-->
      	  	  
      	  	  <!-- this is the code for header image customizer <?php if ( get_header_image() ) : ?>
    <div id="site-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    </div>
<?php endif; ?>-->
      	 <!--<img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
        <img src="img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider2.jpg" alt="" title="#slider-direction-1" />
        <img src="img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider3.jpg" alt="" title="#slider-direction-1" />
        <img src="img/slider/slider3.jpg" alt="" title="#slider-direction-3" />
        
      </div>-->

      	  <!-- <ul class="slider">
    <li><img src="<?php echo get_theme_mod('first_slide') ?>" height="" width=""></li>
    <li><img src="<?php echo get_theme_mod('second_slide') ?>" height="" width=""></li>
    <li><img src="<?php echo get_theme_mod('third_slide') ?>" height="" width=""></li>
</ul> -->
      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1"> <?php echo get_theme_mod('first_text') ?>
            </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2"><?php echo get_theme_mod('second_first_text') ?> </h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="<?php echo get_theme_mod('first_buttonlink_text') ?>"><?php echo get_theme_mod('first_button_text') ?></a>
                  <a class="ready-btn page-scroll" href="<?php echo get_theme_mod('second_buttonlink_text') ?>"><?php echo get_theme_mod('second_button_text') ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1"><?php echo get_theme_mod('first_second_slide_text') ?> </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2"><?php echo get_theme_mod('second_second_slide_text') ?></h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="<?php echo get_theme_mod('first_secondbuttonlink_text') ?>"><?php echo get_theme_mod('first_second_button_text') ?></a>
                  <a class="ready-btn page-scroll" href="<?php echo get_theme_mod('second_secondbuttonlink_text') ?>"><?php echo get_theme_mod('second_second_button_text') ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1"><?php echo get_theme_mod('first_third_slide_text') ?> </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2"><?php echo get_theme_mod('second_third_slide_text') ?></h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="<?php echo get_theme_mod('first_third_buttonlink_text') ?>"><?php echo get_theme_mod('first_third_button_text') ?></a>
                  <a class="ready-btn page-scroll" href="<?php echo get_theme_mod('second_third_buttonlink_text') ?>"><?php echo get_theme_mod('second_third_button_text') ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->
  
  
  
