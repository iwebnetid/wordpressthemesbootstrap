<?php
	
		function get_home_blog_excerpt()
	{
		global $post;
		$excerpt = get_the_content();
		$excerpt = strip_tags(preg_replace(" (\[.*?\])",'',$excerpt));
		$excerpt = strip_shortcodes($excerpt);		
		$original_len = strlen($excerpt);
		$excerpt = substr($excerpt, 0, 145);		
		$len=strlen($excerpt);	 
		if($original_len>275) {
		$excerpt = $excerpt;
		return $excerpt . '<div class="blog-btn-area-sm"><a href="' . get_permalink() . '" class="blog-btn-sm">'.__("Read More","appointment").'</a></div>';
		}
		else
		{ return $excerpt; }
	}
	
add_theme_support( 'post-thumbnails' ); 	
	require_once('theme_setup_data.php');
	// Add scripts and stylesheets
function eBusiness_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'nivo-slider', get_template_directory_uri() . '/lib/nivo-slider/css/nivo-slider.css' );
	wp_enqueue_style( 'owl', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.css' );
	wp_enqueue_style( 'owl.transitions', get_template_directory_uri() . '/lib/owlcarousel/owl.transitions.css' );
	wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/lib/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'animate.min', get_template_directory_uri() . '/lib/animate/animate.min.css' );
	wp_enqueue_style( 'venobox', get_template_directory_uri() . '/lib/venobox/venobox.css' );
	wp_enqueue_style( 'nivo-slider-theme', get_template_directory_uri() . '/css/nivo-slider-theme.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/lib/jquery/jquery.min.js', array( 'jquery' ), '3.3.6', true );
	
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'venobox.min', get_template_directory_uri() . '/lib/venobox/venobox.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'jquery.knob', get_template_directory_uri() . '/lib/knob/jquery.knob.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'wow.min', get_template_directory_uri() . '/lib/wow/wow.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/lib/parallax/parallax.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'easing.min', get_template_directory_uri() . '/lib/easing/easing.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'jquery.nivo.slider', get_template_directory_uri() . '/lib/nivo-slider/js/jquery.nivo.slider.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'jquery.appear', get_template_directory_uri() . '/lib/appear/jquery.appear.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'isotope.pkgd.min', get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'contactform', get_template_directory_uri() . '/contactform/contactform.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '3.3.6', true );
} 

add_action( 'wp_enqueue_scripts', 'eBusiness_scripts' );
//End Add scripts and stylesheets

  	 
function eBusiness_google_maps() {
				wp_register_script('Maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY');
				wp_enqueue_script( 'Maps');
				
		}
add_action('wp_print_styles', 'eBusiness_google_maps');

// Add Google Fonts
function eBusiness_google_fonts() {
				wp_register_style('OpenSans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700');
				wp_enqueue_style( 'OpenSans');
				
		}
add_action('wp_print_styles', 'eBusiness_google_fonts');
// Add Google Fonts
/**
 * Register widget area.
 *
 * @since eBusisness
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function eBusisness_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar Widget Area', 'eBusisness' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
		register_sidebar( array(
		'name'          => __( 'Footer 1 Widget Area', 'eBusisness' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer 1.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		
		register_sidebar( array(
		'name'          => __( 'Footer 2 Widget Area', 'eBusisness' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer 2.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		
		register_sidebar( array(
		'name'          => __( 'Footer 3 Widget Area', 'eBusisness' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer 3.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'eBusisness_widgets_init' );



/**/	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );	
	

	

	
	//Email Subscribe Section
	
//Service Section customizer
add_action( 'customize_register', 'servicesection_customize_register' );
function servicesection_customize_register($wp_customize) {  
//Home Page Panel Head Title Subsection
	$wp_customize->add_panel( 'panel_homepage_section', array(
 'priority'       => 20,
  'capability'     => 'edit_theme_options',
  'theme_supports' => '',
  'title'          => __('Home Page Sections', 'eBusiness'),
  'description'    => __('Several settings to edit Sections', 'eBusiness'),
) );
$wp_customize->add_section( 'service_section', array(
    'title'          => 'Services Section',
    'priority'       => 21,
    'panel'  => 'panel_homepage_section',
) );

$wp_customize->add_setting( 'service_section_display_chechbox' , array(
'capability'  => 'edit_theme_options',
'default'     => '1',
'transport'   => 'refresh',
'sanitize_callback' => '',
) );



$wp_customize->add_setting( 'titleservice', array(
    'default'        => 'Our Services',
) );

$wp_customize->add_setting( 'expert_coder', array(
    'default'        => 'Expert Coder',
) );

$wp_customize->add_setting( 'expert_coder_icon', array(
    'default'        => 'fa fa-code',
) );

$wp_customize->add_setting( 'expert_coder_text', array(
    'default'        => 'will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by',
) );

$wp_customize->add_setting( 'Creative_Designer', array(
    'default'        => 'Creative Designer',
) );

$wp_customize->add_setting( 'Creative_Designer_icon', array(
    'default'        => 'fa fa-camera-retro',
) );

$wp_customize->add_setting( 'Creative_Designer_text', array(
    'default'        => 'will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by. ',
) );

$wp_customize->add_setting( 'Wordpress_Developer', array(
    'default'        => 'Wordpress Developer',
) );

$wp_customize->add_setting( 'Wordpress_Developer_icon', array(
    'default'        => 'fa fa-wordpress',
) );

$wp_customize->add_setting( 'Wordpress_Developer_text', array(
    'default'        => 'will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by. ',
) );

$wp_customize->add_setting( 'Social_Marketer_icon', array(
    'default'        => 'fa fa-camera-retro',
) );

$wp_customize->add_setting( 'Social_Marketer', array(
    'default'        => 'Social Marketer',
) );

$wp_customize->add_setting( 'Social_Marketer_text', array(
    'default'        => 'will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by. ',
) );

$wp_customize->add_setting( 'Social_Marketer_icon', array(
    'default'        => 'fa fa-bar-chart',
) );

$wp_customize->add_setting( 'Seo_Expart', array(
    'default'        => 'Seo Expart',
) );

$wp_customize->add_setting( 'Seo_Expart_icon', array(
    'default'        => 'fa fa-ticket',
) );

$wp_customize->add_setting( 'Seo_Expart_text', array(
    'default'        => 'will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by. ',
) );

$wp_customize->add_setting( 'Support', array(
    'default'        => '24/7 Support',
) );
$wp_customize->add_setting( 'Support_icon', array(
    'default'        => 'fa fa-ticket',
) );

$wp_customize->add_setting( 'Support_text', array(
    'default'        => 'will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by. ',
) );


	 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'service_section_display_chechbox',
		    array(
		       'label'    => 'Service Section Display',
		       'section'  => 'service_section',
		       'settings' => 'service_section_display_chechbox',
		       'type'     => 'checkbox',
				'default' => '1'
		    )
	    )
	);
	
	 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'titleservice',
		    array(
		       'label'    => 'Title',
		       'section'  => 'service_section',
		       'settings' => 'titleservice',
		       'type'     => 'text'
		    )
	    )
	);
	
		 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'expert_coder',
		    array(
		       'label'    => 'expert_coder Title',
		       'section'  => 'service_section',
		       'settings' => 'expert_coder',
		       'type'     => 'text'
		    )
	    )
	);
	
		 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'expert_coder_icon',
		    array(
		       'label'    => 'Icon',
		       'section'  => 'service_section',
		       'settings' => 'expert_coder_icon',
		       'type'     => 'text'
		    )
	    )
	);
				 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'expert_coder_text',
		    array(
		       'label'    => 'Text Area',
		       'section'  => 'service_section',
		       'settings' => 'expert_coder_text',
		       'type'     => 'text'
		    )
	    )
	);
	
			 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'expert_coder_text',
		    array(
		       'label'    => 'Text Area',
		       'section'  => 'service_section',
		       'settings' => 'expert_coder_text',
		       'type'     => 'textarea'
		    )
	    )
	);

		 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'expert_coder_icon',
		    array(
		       'label'    => 'Icon',
		       'section'  => 'service_section',
		       'settings' => 'expert_coder_icon',
		       'type'     => 'text'
		    )
	    )
	);
	
		 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Creative_Designer',
		    array(
		       'label'    => 'Creative_Designer title',
		       'section'  => 'service_section',
		       'settings' => 'Creative_Designer',
		       'type'     => 'text'
		    )
	    )
	);
				 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Creative_Designer_icon',
		    array(
		       'label'    => 'Icon',
		       'section'  => 'service_section',
		       'settings' => 'Creative_Designer_icon',
		       'type'     => 'text'
		    )
	    )
	);
	
			 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Creative_Designer_text',
		    array(
		       'label'    => 'Text Area',
		       'section'  => 'service_section',
		       'settings' => 'Creative_Designer_text',
		       'type'     => 'textarea'
		    )
	    )
	);
	
			 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Wordpress_Developer',
		    array(
		       'label'    => 'Wordpress_Developer title',
		       'section'  => 'service_section',
		       'settings' => 'Wordpress_Developer',
		       'type'     => 'text'
		    )
	    )
	);
				 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Wordpress_Developer_icon',
		    array(
		       'label'    => 'Icon',
		       'section'  => 'service_section',
		       'settings' => 'Wordpress_Developer_icon',
		       'type'     => 'text'
		    )
	    )
	);
	
			 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Wordpress_Developer_text',
		    array(
		       'label'    => 'Text Area',
		       'section'  => 'service_section',
		       'settings' => 'Wordpress_Developer_text',
		       'type'     => 'textarea'
		    )
	    )
	);
	
				 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Social_Marketer',
		    array(
		       'label'    => 'Social_Marketer title',
		       'section'  => 'service_section',
		       'settings' => 'Social_Marketer',
		       'type'     => 'text'
		    )
	    )
	);
				 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Social_Marketer_icon',
		    array(
		       'label'    => 'Icon',
		       'section'  => 'service_section',
		       'settings' => 'Social_Marketer_icon',
		       'type'     => 'text'
		    )
	    )
	);
	
			 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Social_Marketer_text',
		    array(
		       'label'    => 'Text Area',
		       'section'  => 'service_section',
		       'settings' => 'Social_Marketer_text',
		       'type'     => 'textarea'
		    )
	    )
	);
	
				 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Seo_Expart',
		    array(
		       'label'    => 'Seo_Expart title',
		       'section'  => 'service_section',
		       'settings' => 'Seo_Expart',
		       'type'     => 'text'
		    )
	    )
	);
				 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Seo_Expart_icon',
		    array(
		       'label'    => 'Icon',
		       'section'  => 'service_section',
		       'settings' => 'Seo_Expart_icon',
		       'type'     => 'text'
		    )
	    )
	);
	
			 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Seo_Expart_text',
		    array(
		       'label'    => 'Text Area',
		       'section'  => 'service_section',
		       'settings' => 'Seo_Expart_text',
		       'type'     => 'textarea'
		    )
	    )
	);
	
					 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Support',
		    array(
		       'label'    => 'Support title',
		       'section'  => 'service_section',
		       'settings' => 'Support',
		       'type'     => 'text'
		    )
	    )
	);
				 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Support_icon',
		    array(
		       'label'    => 'Icon',
		       'section'  => 'service_section',
		       'settings' => 'Support_icon',
		       'type'     => 'text'
		    )
	    )
	);
	
			 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Support_text',
		    array(
		       'label'    => 'Text Area',
		       'section'  => 'service_section',
		       'settings' => 'Support_text',
		       'type'     => 'textarea'
		    )
	    )
	);
	
	


	


}



//About Section customizer
add_action( 'customize_register', 'aboutsection_customize_register' );
function aboutsection_customize_register($wp_customize) {  

$wp_customize->add_section( 'about_section', array(
    'title'          => 'About Section',
    'priority'       => 20,
     'panel'  => 'panel_homepage_section',
) );

$wp_customize->add_setting( 'about_section_display_chechbox' , array(
'capability'  => 'edit_theme_options',
'default'     => '1',
'transport'   => 'refresh',
'sanitize_callback' => '',
) );

$wp_customize->add_setting( 'titleabout', array(
    'default'        => 'About eBusiness',
) );

$wp_customize->add_setting( 'secondtitle', array(
    'default'        => 'project Maintenance',
) );

$wp_customize->add_setting( 'secondtext', array(
    'default'        => '
project Maintenance

Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at nequeRedug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure

    Interior design Package
    Building House
    Reparing of Residentail Roof
    Renovaion of Commercial Office
    Make Quality Products

',
) );

$wp_customize->add_setting( 'big_image', array(
    'default'        => get_template_directory_uri() . '/img/about/1.jpg',
) );


	 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'about_section_display_chechbox',
		    array(
		       'label'    => 'About Section Display',
		       'section'  => 'about_section',
		       'settings' => 'about_section_display_chechbox',
		       'type'     => 'checkbox',
				'default' => '1'
		    )
	    )
	);
	 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'titleabout',
		    array(
		       'label'    => 'Title',
		       'section'  => 'about_section',
		       'settings' => 'titleabout',
		       'type'     => 'text'
		    )
	    )
	);
	
		 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'secondtitle',
		    array(
		       'label'    => 'Second Title',
		       'section'  => 'about_section',
		       'settings' => 'secondtitle',
		       'type'     => 'text'
		    )
	    )
	);
	 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'secondtext',
		    array(
		       'label'    => 'Text',
		       'section'  => 'about_section',
		       'settings' => 'secondtext',
		       'type'     => 'textarea'
		    )
	    )
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'big_image', array(
    'label'   => 'Image',
    'section' => 'about_section',
    'settings'   => 'big_image',
) ) );

}

//Ability Section customizer
add_action( 'customize_register', 'abilitysection_customize_register' );
function abilitysection_customize_register($wp_customize) {  

$wp_customize->add_section( 'ability_section', array(
    'title'          => 'Ability Section',
    'priority'       => 22,
     'panel'  => 'panel_homepage_section',
) );

$wp_customize->add_setting( 'ability_section_display_chechbox' , array(
'capability'  => 'edit_theme_options',
'default'     => '1',
'transport'   => 'refresh',
'sanitize_callback' => '',
) );

$wp_customize->add_setting( 'Web_Designtitle', array(
    'default'        => 'Web Design',
) );

$wp_customize->add_setting( 'Web_Designtitle_percent', array(
    'default'        => '95',
) );

$wp_customize->add_setting( 'Graphics_Designtitle', array(
    'default'        => 'Graphics Design',
) );

$wp_customize->add_setting( 'Graphics_Designtitle_percent', array(
    'default'        => '85',
) );

$wp_customize->add_setting( 'Php_Developertitle', array(
    'default'        => 'Php Developer',
) );

$wp_customize->add_setting( 'Php_Developertitle_percent', array(
    'default'        => '75',
) );

$wp_customize->add_setting( 'Java_Scripttitle', array(
    'default'        => 'Java Script',
) );

$wp_customize->add_setting( 'Java_Scripttitle_percent', array(
    'default'        => '65',
) );



	 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'ability_section_display_chechbox',
		    array(
		       'label'    => 'Ability Section Display',
		       'section'  => 'ability_section',
		       'settings' => 'ability_section_display_chechbox',
		       'type'     => 'checkbox',
				'default' => '1'
		    )
	    )
	);

	
		 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Web_Designtitle',
		    array(
		       'label'    => 'Web Design title',
		       'section'  => 'ability_section',
		       'settings' => 'Web_Designtitle',
		       'type'     => 'text'
		    )
	    )
	);
	 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Web_Designtitle_percent',
		    array(
		       'label'    => 'Web Design Percentage',
		       'section'  => 'ability_section',
		       'settings' => 'Web_Designtitle_percent',
		       'type'     => 'text'
		    )
	    )
	);
		 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Graphics_Designtitle',
		    array(
		       'label'    => 'Graphics Design title',
		       'section'  => 'ability_section',
		       'settings' => 'Graphics_Designtitle',
		       'type'     => 'text'
		    )
	    )
	);
		 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Graphics_Designtitle_percent',
		    array(
		       'label'    => 'Graphics_Designtitle Percentage',
		       'section'  => 'ability_section',
		       'settings' => 'Graphics_Designtitle_percent',
		       'type'     => 'text'
		    )
	    )
	);
		 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Php_Developertitle',
		    array(
		       'label'    => 'Php_Developer title',
		       'section'  => 'ability_section',
		       'settings' => 'Php_Developertitle',
		       'type'     => 'text'
		    )
	    )
	);
		 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Php_Developertitle_percent',
		    array(
		       'label'    => 'Php_Developertitle percentage',
		       'section'  => 'ability_section',
		       'settings' => 'Php_Developertitle_percent',
		       'type'     => 'text'
		    )
	    )
	);
		 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Java_Scripttitle',
		    array(
		       'label'    => 'Java_Scripttitle',
		       'section'  => 'ability_section',
		       'settings' => 'Java_Scripttitle',
		       'type'     => 'text'
		    )
	    )
	);
	
			 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'Java_Scripttitle_percent',
		    array(
		       'label'    => 'Java_Scripttitle Percentage',
		       'section'  => 'ability_section',
		       'settings' => 'Java_Scripttitle_percent',
		       'type'     => 'text'
		    )
	    )
	);
	

}

//Faq Question Section customizer
add_action( 'customize_register', 'faqsection_customize_register' );
function faqsection_customize_register($wp_customize) {  

$wp_customize->add_section( 'faq_section', array(
    'title'          => 'Faq Question Section',
    'priority'       => 24,
     'panel'  => 'panel_homepage_section',
) );

$wp_customize->add_setting( 'faq_section_display_chechbox' , array(
'capability'  => 'edit_theme_options',
'default'     => '1',
'transport'   => 'refresh',
'sanitize_callback' => '',
) );

$wp_customize->add_setting( 'faq_title', array(
    'default'        => 'Faq Question
',
) );

$wp_customize->add_setting( 'faq_one', array(
    'default'        => 'Consectetur adipisicing elit.
',
) );

$wp_customize->add_setting( 'faq_one_text', array(
    'default'        => '

Redug Lefes dolor sit amet, consectetur adipisicing elit. Aspernatur, tempore, commodi quas mollitia dolore magnam quidem repellat, culpa voluptates laboriosam maiores alias accusamus recusandae vero',
) );

$wp_customize->add_setting( 'faq_two', array(
    'default'        => 'Dolore magnam quidem repellat.
',
) );

$wp_customize->add_setting( 'faq_two_text', array(
    'default'        => '
Redug Lefes dolor sit amet, consectetur adipisicing elit. Aspernatur, tempore, commodi quas mollitia dolore magnam quidem repellat, culpa voluptates laboriosam maiores alias accusamus recusandae vero aperiam sint nulla beatae eos.
',
) );

$wp_customize->add_setting( 'faq_three', array(
    'default'        => 'Redug Lefes dolor sit.',
) );

$wp_customize->add_setting( 'faq_three_text', array(
    'default'        => '

Redug Lefes dolor sit amet, consectetur adipisicing elit. Aspernatur, tempore, commodi quas mollitia dolore magnam quidem repellat, culpa voluptates laboriosam maiores alias accusamus recusandae vero aperiam sint nulla beatae eos.
',
) );

$wp_customize->add_setting( 'faq_four', array(
    'default'        => 'Maiores alias accusamus',
) );

$wp_customize->add_setting( 'faq_four_text', array(
    'default'        => '

Redug Lefes dolor sit amet, consectetur adipisicing elit. Aspernatur, tempore, commodi quas mollitia dolore magnam quidem repellat, culpa voluptates laboriosam maiores alias accusamus recusandae vero aperiam sint nulla beatae eos.
',
) );

$wp_customize->add_setting( 'faqproject_one', array(
    'default'        => 'Project',
) );

$wp_customize->add_setting( 'faqproject_title_one', array(
    'default'        => 'Project',
) );

$wp_customize->add_setting( 'faqproject_one_text', array(
    'default'        => ' Redug Lares dolor sit amet, consectetur adipisicing elit. Animi vero excepturi magnam ducimus adipisci voluptas, praesentium maxime necessitatibus in dolor dolores unde ab, libero quo. Aut, laborum sequi.

voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas, praesentium architecto ducimus, doloribus fuga itaque omnis placeat. 
',
) );

$wp_customize->add_setting( 'faqPlanning_one', array(
    'default'        => 'Planning',
) );

$wp_customize->add_setting( 'faqPlanning_title_one', array(
    'default'        => 'Planning',
) );

$wp_customize->add_setting( 'faqPlanning_one_text', array(
    'default'        => '  voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas, praesentium architecto ducimus, doloribus fuga itaque omnis.

Redug Lares dolor sit amet, consectetur adipisicing elit. Animi vero excepturi magnam ducimus adipisci voluptas, praesentium maxime necessitatibus in dolor dolores unde ab, libero quo. Aut. 
',
) );

$wp_customize->add_setting( 'faqSuccess_one', array(
    'default'        => 'Success',
) );

$wp_customize->add_setting( 'faqSuccess_title_one', array(
    'default'        => 'Success',
) );

$wp_customize->add_setting( 'faqSuccess_one_text', array(
    'default'        => '  voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas, praesentium architecto ducimus, doloribus fuga itaque omnis placeat.

voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas, praesentium architecto ducimus, doloribus fuga itaque omnis. 
',
) );





	 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'faq_section_display_chechbox',
		    array(
		       'label'    => 'Faq Section Display',
		       'section'  => 'faq_section',
		       'settings' => 'faq_section_display_chechbox',
		       'type'     => 'checkbox',
				'default' => '1'
		    )
	    )
	);
		 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'faq_title',
		    array(
		       'label'    => 'Faq title',
		       'section'  => 'faq_section',
		       'settings' => 'faq_title',
		       'type'     => 'text'
		    )
	    )
	);
	
		 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'faq_one',
		    array(
		       'label'    => 'Faq 1 title',
		       'section'  => 'faq_section',
		       'settings' => 'faq_one',
		       'type'     => 'text'
		    )
	    )
	);
	
	
	 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'faq_one_text',
		    array(
		       'label'    => 'Faq 1 Text',
		       'section'  => 'faq_section',
		       'settings' => 'faq_one_text',
		       'type'     => 'textarea'
		    )
	    )
	);
		 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'faq_two',
		    array(
		       'label'    => 'Faq 2	 title',
		       'section'  => 'faq_section',
		       'settings' => 'faq_two',
		       'type'     => 'text'
		    )
	    )
	);
		 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'faq_two_text',
		    array(
		       'label'    => 'Faq 2 text',
		       'section'  => 'faq_section',
		       'settings' => 'faq_two_text',
		       'type'     => 'textarea'
		    )
	    )
	);
		 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'faq_three',
		    array(
		       'label'    => 'Faq 3 title',
		       'section'  => 'faq_section',
		       'settings' => 'faq_three',
		       'type'     => 'text'
		    )
	    )
	);
		 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'faq_three_text',
		    array(
		       'label'    => 'Faq 3 Text',
		       'section'  => 'faq_section',
		       'settings' => 'faq_three_text',
		       'type'     => 'textarea'
		    )
	    )
	);
		 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'faq_four',
		    array(
		       'label'    => 'Faq 4 title',
		       'section'  => 'faq_section',
		       'settings' => 'faq_four',
		       'type'     => 'text'
		    )
	    )
	);
	
			 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'faq_four_text',
		    array(
		       'label'    => 'Faq 4 Text',
		       'section'  => 'faq_section',
		       'settings' => 'faq_four_text',
		       'type'     => 'textarea'
		    )
	    )
	);
	
			 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'faqproject_one',
		    array(
		       'label'    => 'Project title',
		       'section'  => 'faq_section',
		       'settings' => 'faqproject_one',
		       'type'     => 'text'
		    )
	    )
	);
	
				 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'faqproject_title_one',
		    array(
		       'label'    => 'Project Text title',
		       'section'  => 'faq_section',
		       'settings' => 'faqproject_title_one',
		       'type'     => 'text'
		    )
	    )
	);
	
			 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'faqproject_one_text',
		    array(
		       'label'    => 'Project Text',
		       'section'  => 'faq_section',
		       'settings' => 'faqproject_one_text',
		       'type'     => 'textarea'
		    )
	    )
	);
	
				 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'faqPlanning_one',
		    array(
		       'label'    => 'Planning title',
		       'section'  => 'faq_section',
		       'settings' => 'faqPlanning_one',
		       'type'     => 'text'
		    )
	    )
	);
	
				 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'faqPlanning_one_title_one',
		    array(
		       'label'    => 'Planning Text title',
		       'section'  => 'faq_section',
		       'settings' => 'faqproject_title_one',
		       'type'     => 'text'
		    )
	    )
	);
	
			 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'faqPlanning_one_text',
		    array(
		       'label'    => 'Planning Text',
		       'section'  => 'faq_section',
		       'settings' => 'faqPlanning_one_text',
		       'type'     => 'textarea'
		    )
	    )
	);
	
					 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'faqSuccess_one',
		    array(
		       'label'    => 'Success title',
		       'section'  => 'faq_section',
		       'settings' => 'faqSuccess_one',
		       'type'     => 'text'
		    )
	    )
	);
	
				 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'faqSuccess_title_one',
		    array(
		       'label'    => 'Success Text title',
		       'section'  => 'faq_section',
		       'settings' => 'faqSuccess_title_one',
		       'type'     => 'text'
		    )
	    )
	);
	
			 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'faqSuccess_one_text',
		    array(
		       'label'    => 'Success Text',
		       'section'  => 'faq_section',
		       'settings' => 'faqSuccess_one_text',
		       'type'     => 'textarea'
		    )
	    )
	);
	

}

//sliders customizer
add_action( 'customize_register', 'themename_customize_register' );
function themename_customize_register($wp_customize) {  

$wp_customize->add_section( 'slides', array(
    'title'          => 'Slides',
    'priority'       => 19,
) );

$wp_customize->add_setting( 'first_slide', array(
    'default'        => '',
) );

$wp_customize->add_setting( 'first_text', array(
    'default'        => 'The Best Business Information',
) );

$wp_customize->add_setting( 'second_first_text', array(
    'default'        => 'We are In The Business Of Get Quality Business Service',
) );

$wp_customize->add_setting( 'first_button_text', array(
    'default'        => 'See Services',
) );

$wp_customize->add_setting( 'first_buttonlink_text', array(
    'default'        => '#',
) );

$wp_customize->add_setting( 'second_button_text', array(
    'default'        => 'Learn More',
) );

$wp_customize->add_setting( 'second_buttonlink_text', array(
    'default'        => '#',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'first_slide', array(
    'label'   => 'First Slide',
    'section' => 'slides',
    'settings'   => 'first_slide',
) ) );

	 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'first_text',
		    array(
		       'label'    => 'First Slide Text',
		       'section'  => 'slides',
		       'settings' => 'first_text',
		       'type'     => 'text'
		    )
	    )
	);
	 	 //Add control second Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'second_first_text',
		    array(
		       'label'    => 'Second Slide Text',
		       'section'  => 'slides',
		       'settings' => 'second_first_text',
		       'type'     => 'text'
		    )
	    )
	);
	
	 //Add control first button Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'first_button_text',
		    array(
		       'label'    => 'First button Text',
		       'section'  => 'slides',
		       'settings' => 'first_button_text',
		       'type'     => 'text'
		    )
	    )
	);
	
		 //Add control first button Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'first_buttonlink_text',
		    array(
		       'label'    => 'First button link Text',
		       'section'  => 'slides',
		       'settings' => 'first_buttonlink_text',
		       'type'     => 'text'
		    )
	    )
	);
	
	 	 //Add control first button  Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'second_button_text',
		    array(
		       'label'    => 'Second button Text',
		       'section'  => 'slides',
		       'settings' => 'second_button_text',
		       'type'     => 'text'
		    )
	    )
	);

		 //Add control first button Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'second_buttonlink_text',
		    array(
		       'label'    => 'Second button link Text',
		       'section'  => 'slides',
		       'settings' => 'second_buttonlink_text',
		       'type'     => 'text'
		    )
	    )
	);
	
			 //Add control first button Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'first_buttonlink_text',
		    array(
		       'label'    => 'First button link Text',
		       'section'  => 'slides',
		       'settings' => 'first_buttonlink_text',
		       'type'     => 'text'
		    )
	    )
	);
	
	 	 //Add control first button  Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'second_button_text',
		    array(
		       'label'    => 'Second button Text',
		       'section'  => 'slides',
		       'settings' => 'second_button_text',
		       'type'     => 'text'
		    )
	    )
	);

		 //Add control first button Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'second_buttonlink_text',
		    array(
		       'label'    => 'Second button link Text',
		       'section'  => 'slides',
		       'settings' => 'second_buttonlink_text',
		       'type'     => 'text'
		    )
	    )
	);



$wp_customize->add_setting( 'second_slide', array(
    'default'        => '',
) );

$wp_customize->add_setting( 'first_second_slide_text', array(
    'default'        => 'The Best Business Information',
) );

$wp_customize->add_setting( 'second_second_slide_text', array(
    'default'        => 'We are In The Business Of Get Quality Business Service',
) );

$wp_customize->add_setting( 'first_second_button_text', array(
    'default'        => 'see services',
) );

$wp_customize->add_setting( 'first_secondbuttonlink_text', array(
    'default'        => '#',
) );

$wp_customize->add_setting( 'second_second_button_text', array(
    'default'        => 'learn more',
) );

$wp_customize->add_setting( 'second_secondbuttonlink_text', array(
    'default'        => '#',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'second_slide', array(
    'label'   => 'Second Slide',
    'section' => 'slides',
    'settings'   => 'second_slide',
) ) );

	 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'first_second_slide_text',
		    array(
		       'label'    => 'First Slide Text',
		       'section'  => 'slides',
		       'settings' => 'first_second_slide_text',
		       'type'     => 'text'
		    )
	    )
	);
	 	 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'second_second_slide_text',
		    array(
		       'label'    => 'Second Slide Text',
		       'section'  => 'slides',
		       'settings' => 'second_second_slide_text',
		       'type'     => 'text'
		    )
	    )
	);
	
		 //Add control first button Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'first_second_button_text',
		    array(
		       'label'    => 'First button Text',
		       'section'  => 'slides',
		       'settings' => 'first_second_button_text',
		       'type'     => 'text'
		    )
	    )
	);
	
			 //Add control first button Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'first_secondbuttonlink_text',
		    array(
		       'label'    => 'First button Link Text',
		       'section'  => 'slides',
		       'settings' => 'first_secondbuttonlink_text',
		       'type'     => 'text'
		    )
	    )
	);
	
	 	 //Add control first button  Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'second_second_button_text',
		    array(
		       'label'    => 'Second button Text',
		       'section'  => 'slides',
		       'settings' => 'second_second_button_text',
		       'type'     => 'text'
		    )
	    )
	);

	 	 //Add control first button  Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'second_secondbuttonlink_text',
		    array(
		       'label'    => 'Second button Link Text',
		       'section'  => 'slides',
		       'settings' => 'second_secondbuttonlink_text',
		       'type'     => 'text'
		    )
	    )
	);
	
$wp_customize->add_setting( 'third_slide', array(
    'default'        => '',
) );

$wp_customize->add_setting( 'first_third_slide_text', array(
    'default'        => 'The Best Business Information',
) );

$wp_customize->add_setting( 'second_third_slide_text', array(
    'default'        => 'Helping Business Security & Peace of Mind for Your Family',
) );

$wp_customize->add_setting( 'first_third_button_text', array(
    'default'        => 'see services',
) );

$wp_customize->add_setting( 'first_third_buttonlink_text', array(
    'default'        => 'see services',
) );

$wp_customize->add_setting( 'second_third_button_text', array(
    'default'        => 'learn more',
) );

$wp_customize->add_setting( 'second_third_buttonlink_text', array(
    'default'        => 'learn more',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'third_slide', array(
    'label'   => 'Third Slide',
    'section' => 'slides',
    'settings'   => 'third_slide',
) ) );


	 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'first_third_slide_text',
		    array(
		       'label'    => 'First Slide Text',
		       'section'  => 'slides',
		       'settings' => 'first_third_slide_text',
		       'type'     => 'text'
		    )
	    )
	);
	 	 //Add control first Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'second_third_slide_text',
		    array(
		       'label'    => 'Second Slide Text',
		       'section'  => 'slides',
		       'settings' => 'second_third_slide_text',
		       'type'     => 'text'
		    )
	    )
	);
	
			 //Add control first button Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'first_third_button_text',
		    array(
		       'label'    => 'First button Text',
		       'section'  => 'slides',
		       'settings' => 'first_third_button_text',
		       'type'     => 'text'
		    )
	    )
	);
	
				 //Add control first button Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'first_third_buttonlink_text',
		    array(
		       'label'    => 'First button link Text',
		       'section'  => 'slides',
		       'settings' => 'first_third_buttonlink_text',
		       'type'     => 'text'
		    )
	    )
	);
	 	 //Add control first button  Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'second_third_button_text',
		    array(
		       'label'    => 'Second button Text',
		       'section'  => 'slides',
		       'settings' => 'second_third_button_text',
		       'type'     => 'text'
		    )
	    )
	);
	
				 //Add control first button Text
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'second_third_buttonlink_text',
		    array(
		       'label'    => 'First button link Text',
		       'section'  => 'slides',
		       'settings' => 'second_third_buttonlink_text',
		       'type'     => 'text'
		    )
	    )
	);
}// insert this into header.php <?php echo get_theme_mod('first_text') end of slides header customizer


//How To add logo in Site Identity
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
	
	//insert this code into header.php	<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
//$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
//if ( has_custom_logo() ) {
  //      echo '<img src="'. esc_url( $logo[0] ) .'">';
//} //else {
        //echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
//}
	
	
	// End Of Logo set Site identity



function themename_custom_header_setup() {
    $defaults = array(
        // Default Header Image to display
        'default-image'         => get_template_directory_uri() . '/img/slider/slider1.jpg',
        // Display the header text along with the image
        'header-text'           => false,
        // Header text color default
        'default-text-color'        => '000',
        // Header image width (in pixels)
        'width'             => 1000,
        // Header image height (in pixels)
        'height'            => 198,
        // Header image random rotation default
        'random-default'        => false,
        // Enable upload of image file in admin 
        'uploads'       => true,
        // function to be called in theme head section
        'wp-head-callback'      => 'wphead_cb',
        //  function to be called in preview page head section
        'admin-head-callback'       => 'adminhead_cb',
        // function to produce preview markup in the admin screen
        'admin-preview-callback'    => 'adminpreview_cb',
        );
}

//Header Image Cutomizer
add_action( 'after_setup_theme', 'themename_custom_header_setup' );

$header_info = array(
    'width'         => 980,
    'height'        => 60,
    'default-image' => get_template_directory_uri() . '/img/slider/slider1.jpg',
);
add_theme_support( 'custom-header', $header_info );
 
$header_images = array(
    'sunset' => array(
            'url'           => get_template_directory_uri() . '/img/slider/slider1.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/img/slider/slider1.jpg',
            'description'   => 'Sunset',
    ),
    'flower' => array(
            'url'           => get_template_directory_uri() . '/img/slider/slider2.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/img/slider/slider2.jpg',
            'description'   => 'Flower',
    ),  
);

register_default_headers( $header_images );



global $wp_version;
if ( version_compare( $wp_version, '3.4', '>=' ) ) :
    add_theme_support( 'custom-header' );
else :
    add_custom_image_header( $wp_head_callback, $admin_head_callback );
endif;

add_filter('get_the_excerpt','appointment_post_slider_excerpt');
	    function appointment_post_slider_excerpt($output){
		$output = strip_tags(preg_replace(" (\[.*?\])",'',$output));
		$output = strip_shortcodes($output);		
		$original_len = strlen($output);
		$output = substr($output, 0, 155);		
		$len=strlen($output);	 
		if($original_len>155) {
		$output = $output;
		return  '<div class="slide-text-bg2">' .'<span>'.$output.'</span>'.'</div>'.
	                       '<div class="slide-btn-area-sm"><a href="' . get_permalink() . '" class="slide-btn-sm">'
						   .__("Read More","appointment").'</a></div>';
		}
		else
		{ return '<div class="slide-text-bg2">' .'<span>'.$output.'</span>'.'</div>'; }   
        }
        //End Header Image Cutomizer

?>