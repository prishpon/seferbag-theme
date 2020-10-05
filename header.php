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
                  <a href="#" class="topheader_logo"><img src="<?php bloginfo("template_directory"); ?>/img/logo.png" alt="logo" class="main_logo"></a>
                  <div class="logo_text">SAFER BAG</div>
            </div> 
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon navbar-dark"></span>
            </button>
                <div class="collapse navbar-collapse flex-end justify-content-end" id="collapsibleNavbar">
                  <ul class="navbar-nav ">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Home
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Video</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">FAQ</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Kontakt</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Impressum</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Datenshutzenklarung</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <img src="<?php bloginfo("template_directory"); ?>/img/germany-flag-icon-64.png" alt="" class="flag">
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <img src="<?php bloginfo("template_directory"); ?>/img/united-kingdom-flag-small.png" alt="" class="flag">
                      </a>
                    </li>
                    <li class="nav-item search">
                      <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
    <div class="container-fluid banner  m-0 p-0">
      <div class="row m-0 ">
          <div class="col-md-7 m-0 p-0">
            <img class="img-fluid" src="<?php bloginfo("template_directory"); ?>/img/boat.jpg" alt=""> 
          </div>
          <div class="col-md-5  m-0 pl-1">
            <img class="img-fluid" src="<?php bloginfo("template_directory"); ?>/img/stones.jpg" alt=""> 
          </div>                 
      </div>
  </div>
  <div class="secondary-header container-fluid">
    <ul class="nav nav-pills navbar navbar-expand-md nav-justified">
      <li class="nav-item">
        <a class="nav-link " href="#">Vorteille/Nutzen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Verfahren/System</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gepackstucke</a>
      </li>
    </ul>
  </div>
</header>