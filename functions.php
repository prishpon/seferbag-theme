<?php
function safer_bag_files() {
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('bootsrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js');
	wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js');
	wp_enqueue_script('scriptjs', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
    wp_enqueue_style('main-styles', get_theme_file_uri('/style.css'));
}

add_action('wp_enqueue_scripts', 'safer_bag_files');


// Register Custom Navigation Walker

	
class wp_bootstrap_navwalker extends Walker_Nav_menu {
	
	function start_lvl (&$output, $depth = 0, $args = NULL){ 
		$indent = str_repeat("\t",$depth);
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
	}
	
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ //li a span
		
		$indent = ( $depth ) ? str_repeat("\t",$depth) : '';
		
		$li_attributes = '';
		$class_names = $value = '';
		
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		
		$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
		$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
		$classes[] = 'menu-item-' . $item->ID;
		if( $depth && $args->walker->has_children ){
			$classes[] = 'dropdown-submenu';
		}
		
		$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr($class_names) . '"';
		
		$id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
		
		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
		
		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
		
		$attributes .= ( $args->walker->has_children ) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';
		
		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= ( $depth == 0 && $args->walker->has_children ) ? ' <b class="caret"></b></a>' : '</a>';
		$item_output .= $args->after;
		
		$output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		
	}
	
	
}

//menu

add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
	register_nav_menu( 'secondary', 'Secondary Menu' );
}
//logo customizations
function saferbag_custom_logo_setup() {
	$defaults = array(
	'height'      => 50,
	'width'       => 50,
	'flex-height' => false,
	'flex-width'  => false,
	'header-text' => array( 'site-title', 'site-description' ),
   'unlink-homepage-logo' => false, 
	);
	add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'saferbag_custom_logo_setup' );





add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');




/*
	==========================================
	 Sidebar function
	==========================================
*/
function awesome_widget_setup() {
	
	register_sidebar(
		array(	
			'name'	=> 'Left Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> '',
			'description' => 'Left Sidebar area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
		);

	register_sidebar(	
	   array(	
		'name'	=> 'Right Sidebar',
		'id'	=> 'sidebar-2',
		'class'	=> '',
		'description' => 'Right Sidebar area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	)
);
	
}
add_action('widgets_init','awesome_widget_setup');


//customizer
function yellow_customizer_settings( $wp_customize ) {


//header image 2

$wp_customize->add_section( 'header-image2-section' , array(
	'title'      => 'Header image 2',
	'priority'   => 70,
) );
$wp_customize->add_setting( 'header-image2',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'esc_url_raw'
   )
);
 
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header-image2',
   array(
      'label' => __( 'Header image 2' ),
      'description' => esc_html__( 'Insert second header image' ),
	  'section'    => 'header-image2-section',
      'button_labels' => array( 
         'select' => __( 'Select Image' ),
         'change' => __( 'Change Image' ),
         'remove' => __( 'Remove' ),
         'default' => __( 'Default' ),
         'placeholder' => __( 'No image selected' ),
         'frame_title' => __( 'Select Image' ),
         'frame_button' => __( 'Choose Image' ),
      )
   )
) );
//logo text
$wp_customize->add_section( 'logotext' , array(
	'title'      => 'Logo Text',
	'priority'   => 40,
) );

$wp_customize->add_setting( 'logo_title',
   array(
	'default'            => '',
	'sanitize_callback'  => 'sanitize_text_field',
	'transport'          => $transport
   )
);
 
$wp_customize->add_control( 'logo_title',
   array(
	'section'  => 'logotext', 
	'label'    => 'Logo title',
	'type'     => 'text' 
   )
);
//footer

$wp_customize->add_section( 'footer' , array(
	'title'      => 'Footer',
	'priority'   => 90,
) );

$wp_customize->add_setting( 'copyright',
   array(
	'default'            => '',
	'sanitize_callback'  => 'sanitize_text_field',
	'transport'          => $transport
   )
);
 
$wp_customize->add_control( 'copyright',
   array(
	'section'  => 'footer', 
	'label'    => 'Copyright',
	'type'     => 'text' 
   )
);

//slider
$wp_customize->add_section( 'slider' , array(
	'title'      => 'Slider',
	'priority'   => 80,
) );
//slide1
$wp_customize->add_setting( 'slide1_image',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'esc_url_raw'
   )
);
 
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide1_image',
   array(
      'label' => __( 'slide1 image' ),
      'description' => esc_html__( '' ),
	  'section'    => 'slider',
      'button_labels' => array( 
         'select' => __( 'Select Image' ),
         'change' => __( 'Change Image' ),
         'remove' => __( 'Remove' ),
         'default' => __( 'Default' ),
         'placeholder' => __( 'No image selected' ),
         'frame_title' => __( 'Select Image' ),
         'frame_button' => __( 'Choose Image' ),
      )
   )
) );



//slide2

$wp_customize->add_setting( 'slide2_image',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'esc_url_raw'
   )
);
 
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide2_image',
   array(
      'label' => __( 'slide2 image' ),
      'description' => esc_html__( '' ),
	  'section'    => 'slider',
      'button_labels' => array( 
         'select' => __( 'Select Image' ),
         'change' => __( 'Change Image' ),
         'remove' => __( 'Remove' ),
         'default' => __( 'Default' ),
         'placeholder' => __( 'No image selected' ),
         'frame_title' => __( 'Select Image' ),
         'frame_button' => __( 'Choose Image' ),
      )
   )
) );

//slide3

$wp_customize->add_setting( 'slide3_image',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'esc_url_raw'
   )
);
 
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide3_image',
   array(
      'label' => __( 'slide3 image' ),
      'description' => esc_html__( '' ),
	  'section'    => 'slider',
      'button_labels' => array( 
         'select' => __( 'Select Image' ),
         'change' => __( 'Change Image' ),
         'remove' => __( 'Remove' ),
         'default' => __( 'Default' ),
         'placeholder' => __( 'No image selected' ),
         'frame_title' => __( 'Select Image' ),
         'frame_button' => __( 'Choose Image' ),
      )
   )




) );


}
add_action( 'customize_register', 'yellow_customizer_settings' );

