<?php dynamic_sidebar('sidebar-2'); ?>

<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="<?php echo get_theme_mod( 'slide1_image' ); ?>"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
    
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="<?php echo get_theme_mod( 'slide2_image' ); ?>"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="<?php echo get_theme_mod( 'slide3_image' ); ?>"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>

    </div>
  </div>
  <!--/.Slides-->
</div>
