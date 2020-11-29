<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saferbag</title>
    <?php wp_head(); ?>
  </head>
<body>
      <header>
            <div class="topheader container">
              <nav class="navbar navbar-expand-md">
                <div class="d-flex logo_container">
                  <a href="#" class="topheader_logo">
                  <?php the_custom_logo();?>
                  </a>
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
                  'container'         => 'navbar-nav nav',
                 'container_class'   => 'collapse navbar-collapse',
                 'container_id'      => 'bs-example-navbar-collapse-1',
                 'menu_class'        => 'navbar-nav nav',
                 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
									'walker'          => new wp_bootstrap_navwalker()
									)
								);
							?>
                  </div>
                </div>
              </nav>
            </div>
    <div class="container-fluid banner d-flex align-items-center justify-content-center search-header p-0">
          <div class="p-0 ">
          <h1 class="header-title"><span>Results for:<?php echo ( get_search_query( ) ) ?></span></h1>
          </div>              

  </div>


</header>
