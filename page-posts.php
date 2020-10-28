<?php/*
Template Name: Posts page
*/
?>

<?php get_header();
?>

<div class="content-wrapper container">
    <div class="row">
             <?php 
			
			$args_cat = array(
				'include' => '31,32'
			);
			
			$categories = get_categories($args_cat);
			foreach($categories as $category):
				
				$args = array( 
					'type' => 'post',
					'posts_per_page' => 1,
					'category__in' => $category->term_id,
					'category__not_in' => array( 10 ),
				);
				
				$lastBlog = new WP_Query( $args );
				
				if( $lastBlog->have_posts() ):
					
					while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
						
						<div class="col-xs-12 col-sm-6">
						
							<?php get_template_part('content','featured'); ?>
						
						</div>
					
					<?php endwhile;
					
				endif;
				
				wp_reset_postdata();
				
			endforeach;
		
		?>
             </div>

    </div>
</div>
<?php get_footer(); ?>