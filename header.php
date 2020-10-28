<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <?php wp_head(); ?>
  </head>
<body>
      <header>
            <div class="topheader container">
              <nav class="navbar navbar-expand-md">
                <div class="d-flex logo_container">
                  <a href="#" class="topheader_logo">
                  <?php  the_custom_logo();?></a>
                  <div class="logo_text"><?php echo get_theme_mod( 'logo_title' ); ?></div>
            </div> 
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon navbar-dark"></span>
            </button>
                <div class="collapse navbar-collapse flex-end justify-content-end" id="collapsibleNavbar">
                <?php 
								wp_nav_menu(array(
									'theme_location' => 'primary',
                  'depth'             =>  0,
                  'container'         => 'nav',
                 'container_class'   => 'collapse navbar-collapse',
                 'container_id'      => 'bs-example-navbar-collapse-1',
                 'menu_class'        => 'navbar-nav',
                 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
									'walker'          => new wp_bootstrap_navwalker()
									)
								);
							?>
               
                  <ul class="navbar-nav ">  
                    <li class="nav-item search">
                      <a class="nav-link" href="#">
                       <?php get_search_form(); ?>
                      
                    </li>
                  </ul>
                  </div>
                </div>
              </nav>
            </div>
    <div class="container-fluid banner  m-0 p-0">
      <div class="row m-0 ">
          <div class="col-md-7 m-0 p-0">
            <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""> 
          </div>
          <div class="col-md-5  m-0 p-0">
            <img class="img-fluid" src="<?php echo get_theme_mod( 'header-image2' ); ?>" alt=""> 
          </div>                 
      </div>
  </div>
  <div class="secondary-header container-fluid">
  <?php 
								wp_nav_menu(array(
									'theme_location' => 'secondary',
                  'depth'             =>  1,
                  'container'         => 'nav',
                 'container_class'   => 'nav nav-pills navbar navbar-expand-md d-flex justify-content-center',
                 'container_id'      => 'bs-example-navbar-collapse-1',
                 'menu_class'        => 'navbar-nav',
									)
								);
							?>
  </div>
</header>
