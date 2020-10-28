<?php/*
Template Name: Front-page
Template Post Type:front-page*/
?>

<?php get_header();
?>

<div class="content-wrapper container">
    <div class="row">
      <div class="col-md-3 left-navbar">
         <?php get_sidebar('left'); ?>
           </div>
             <div class="col-md-6 main-content">
             <?php
         if ( have_posts() ) {
            while ( have_posts() ) {
            the_post();
            the_title();
           the_content(); ?>
         
          <?php
              }           
              } 
?>            
             </div>
      <div class="col-md-3">
         <?php get_sidebar('right'); ?>
      </div>
    </div>
</div>
<?php get_footer(); ?>