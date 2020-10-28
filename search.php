<?php get_header();
?>

<div class="content-wrapper container">
    <div class="row">
             <div class="col-md-8 main-content">
             <?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('content', 'search'); ?>
			
			<?php endwhile;
			
		endif;
				
		?>
             </div>
    
    </div>
</div>
<?php get_footer(); ?>