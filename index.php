<?php get_header();
?>

<div class="content-wrapper container">
    <div class="row">
      <div class="col-md-3 left-navbar">
           <h2 class="side-header mb-0 heading">  FLKUFHAFFEN
                DUSSELDORF
                ASFLUGBENE A-B + C</h2>
             <div class="item"> <strong>AB 9 E</strong>  </div>
             <div class="item">  Taglich von 06:00 bis 19:30 Uhr </div>
             <div class="item"> T:0162/7112557 </div>
             <div class="item"> Die Offnungzeiten 
               konnen sich taglich anderen.
               Fur genauer information emphelen wir
               Ihnen,und anzurufen
               </div>
           </div>
             <div class="col-md-6 main-content">
             <?php
         if ( have_posts() ) {
            while ( have_posts() ) {
            the_post();
           the_content(); ?>
         
          <?php
              }           
              } 
?>            
             </div>
      <div class="col-md-3">
            <img src="<?php bloginfo("template_directory"); ?>/img/tiramisu-5581806__340.jpg" alt="" class="img-fluid">
      </div>
    </div>
</div>
<?php get_footer(); ?>