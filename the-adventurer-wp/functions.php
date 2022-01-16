<?php 
// Including stylesheet and script files
function load_scripts(){
	// wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
	// wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css', array(), '4.0.0', 'all' );	
	
	// custom JS navigation created by WM
	wp_enqueue_script( 'nav-js', get_template_directory_uri() . '/js/nav.js', array(),'1.0', 'all');
	
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
	// Add Font Awesome Styling
    wp_enqueue_style('font-awesome','https://pro.fontawesome.com/releases/v5.10.0/css/all.css', array(), 'v5.10.0');
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );


function menus_setup(){
			register_nav_menus( array(
			'main_menu' => 'Main Menu',
			'footer_menu_one' => 'Footer Menu',
			)   
		);
}
add_action( 'after_setup_theme', 'menus_setup', 0 );

function wm_sidebar(){
	// register
		register_sidebar( 
			array(
			'name'          => esc_html__( 'Widget Area 1', 'wmtheme' ),
			// Must be unique ID
			'id'            => 'widget-area-1',
			'description'   => esc_html__( 'Add widgets here to appear here.', 'wmtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
			)
		);
		register_sidebar( 
			array(
			'name'          => esc_html__( 'Top Widget', 'wmtheme' ),
			// Must be unique ID
			'id'            => 'widget-1',
			'description'   => esc_html__( 'Add widgets here to appear here.', 'wmtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
			)
		);
		// register
		register_sidebar( 
			array(
				'name'          => esc_html__( 'Sidebar', 'wmtheme' ),
				// Must be unique ID
				'id'            => 'sidebar-1',
				'description'   => esc_html__( 'Add widgets here to appear here.', 'wmtheme' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
				)
			);
			// register
				register_sidebar( 
					array(
					'name'          => esc_html__( 'About Widget Area', 'wmtheme' ),
					// Must be unique ID
					'id'            => 'about-1',
					'description'   => esc_html__( 'Add widgets here to appear here.', 'wmtheme' ),
					'before_widget' => '<section id="%1$s" class="widget %2$s">',
					'after_widget'  => '</section>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
					)
				);

	register_sidebar( array(
		// Must be unique ID
			'name'          => esc_html__( 'Card 1', 'wmtheme' ),
			'id'            => 'card-1',
			'description'   => esc_html__( 'Add widgets here to appear here.', 'wmtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar( array(
		// Must be unique ID
			'name'          => esc_html__( 'Card 2', 'wmtheme' ),
			'id'            => 'card-2',
			'description'   => esc_html__( 'Add widgets here to appear here.', 'wmtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar( array(
		// Must be unique ID
			'name'          => esc_html__( 'Card 3', 'wmtheme' ),
			'id'            => 'card-3',
			'description'   => esc_html__( 'Add widgets here to appear here.', 'wmtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
		
}
add_action('widgets_init', 'wm_sidebar');

function wm_categories(){
	register_sidebar( array(
		'name'          => esc_html__( 'Widgets Box 1', 'wmtheme' ),
		// Must be unique ID
		'id'            => 'widget-box-1',
		'description'   => esc_html__( 'Add widgets here to appear here.', 'wmtheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		)
	);
	register_sidebar( array(
		'name'          => esc_html__( 'Widgets Box 2', 'wmtheme' ),
		// Must be unique ID
		'id'            => 'widget-box-2',
		'description'   => esc_html__( 'Add widgets here to appear here.', 'wmtheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		)
	);
	register_sidebar( array(
		'name'          => esc_html__( 'Widgets Box 3', 'wmtheme' ),
		// Must be unique ID
		'id'            => 'widget-box-3',
		'description'   => esc_html__( 'Add widgets here to appear here.', 'wmtheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		)
	);
	register_sidebar( array(
		'name'          => esc_html__( 'Form', 'wmtheme' ),
		// Must be unique ID
		'id'            => 'form-1',
		'description'   => esc_html__( 'Add your form shortcode here to appear here on site.', 'wmtheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		)
	);
	register_sidebar( array(
		'name'          => esc_html__( 'Social Feed', 'wmtheme' ),
		// Must be unique ID
		'id'            => 'social-feed-1',
		'description'   => esc_html__( 'Add your form shortcode here to appear here on site.', 'wmtheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'wm_categories');

function custom_theme_setup() {
	
	//  * Add support for core custom logo.
	//  *
	//  * @link https://codex.wordpress.org/Theme_Logo
	//  */
	$logo_width  = 800;
	$logo_height = 400;
	$custom_logo = 	array(
			'height'               => $logo_height,
			'width'                => $logo_width,
			'flex-width'           => true,
			'flex-height'          => true,
			'unlink-homepage-logo' => true,
	);
	// *Add support for core custom header
	// *link https://codex.wordpress.org/Custom_Headers
    $custom_header = array(
        'default-image'      => '',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
	);
	add_theme_support( 'custom-background' );
	// add_theme_support('custom-logo', $custom_logo);
	add_theme_support( 'custom-header', $custom_header );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );


// NEW FEATURE - Controls (UI) - what user has access to, Settings - save user's choice, and Sections - group of options
// Customize Appearance Options
function customize_colors($wp_customize){
	// Setting to store user choice for link colors
	$wp_customize->add_setting('wm_top_bar_menu_text_color', 
		array(
			// default/initial color
			'default' => 'fff',
			'transport' => 'refresh', 
		)
	);
	// Setting to store user choice for link colors
	$wp_customize->add_setting('wm_top_bar_color', 
		array(
			// default/initial color
			'default' => 'c9c9c9',
			'transport' => 'refresh', 
		)
	);
	// Setting to store user choice for link colors
	$wp_customize->add_setting('wm_toggle_menu_color', 
		array(
			// default/initial color
			'default' => '333',
			'transport' => 'refresh', 
		)
	);
	// Setting to store user choice for link colors
	$wp_customize->add_setting('wm_top_bar_drop_background_color', 
		array(
			// default/initial color
			'default' => 'c3c3c3',
			'transport' => 'refresh', 
		)
	);
	// Setting to store user choice for link colors
	$wp_customize->add_setting('wm_top_bar_hover_color', 
		array(
			// default/initial color
			'default' => 'f9f9f9',
			'transport' => 'refresh', 
		)
	);
	// Setting to store user choice for link colors
	$wp_customize->add_setting('wm_title_color', 
		array(
			// default/initial color
			'default' => '000',
			'transport' => 'refresh', 
		)
	);
	// Setting to store user choice for sub-title color
	$wp_customize->add_setting('wm_sub_title_color', 
		array(
			// default/initial color
			'default' => '000',
			'transport' => 'refresh', 
		)
	);
	// -----------------
	// section the setting is apart of
	$wp_customize->add_section('wm_standard_colors',
	array(
		// title - what user sees
		'title' => __('Standard Colors', 'wmtheme'),
		// priority - where section will sit 
		'priority' => 30, 
		)
	);
	$wp_customize->add_section('wm_toggle_menu',
		array(
			// title - what user sees
			'title' => __('Navbar Features', 'wmtheme'),
			// priority - where section will sit 
			'priority' => 31, 
		)
	);
	// -----------------
	// Created Controls
	// Edit Toggle-Menu color
	// Edit top-bar colors
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize, 'wm_top_bar_text_color_control', 
		array(
			// UI - user sees
			'label' => __('Navigation Bar 
			Text Color', 'wmtheme'),
			// assign control to section name
			'section' => 'wm_toggle_menu', 
			// setting for control name
			'settings' => 'wm_top_bar_menu_text_color'
			)
			)
		);
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize, 'wm_top_bar_color_control', 
		array(
			// UI - user sees
			'label' => __('Navigation Bar, Accents and Lower Banner
			Color', 'wmtheme'),
			// assign control to section name
			'section' => 'wm_toggle_menu', 
			// setting for control name
			'settings' => 'wm_top_bar_color'
			)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control($wp_customize, 'wm_toggle_menu_color_control', 
			array(
				// UI - user sees
				'label' => __('Toggle 
				Menu Color', 'wmtheme'),
				// assign control to section name
				'section' => 'wm_toggle_menu', 
				// setting for control name
				'settings' => 'wm_toggle_menu_color'
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control($wp_customize, 'wm_top_bar_drop_menu_color_control', 
			array(
				// UI - user sees
				'label' => __('Dropdown Background Color 
				Menu Color', 'wmtheme'),
				// assign control to section name
				'section' => 'wm_toggle_menu', 
				// setting for control name
				'settings' => 'wm_top_bar_drop_background_color'
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control($wp_customize, 'wm_top_bar_hover_color_control', 
			array(
				// UI - user sees
				'label' => __('Dropdown Link Hover Effect Color 
				Menu Color', 'wmtheme'),
				// assign control to section name
				'section' => 'wm_toggle_menu', 
				// setting for control name
				'settings' => 'wm_top_bar_hover_color'
				)
			)
		);
	// Edit Links Colors
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize, 'wm_title_color_control', 
		array(
			// UI - user sees
			'label' => __('Title Color', 'wmtheme'),
			// assign control to section name
			'section' => 'wm_standard_colors', 
			// setting for control name
			'settings' => 'wm_title_color'
			)
		)
	);
	// Edit sub title colors
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize, 'wm_sub_title_color_control', 
		array(
			// UI - user sees
			'label' => __('Sub-title Color', 'wmtheme'),
			// assign control to section name
			'section' => 'wm_standard_colors', 
			// setting for control name
			'settings' => 'wm_sub_title_color'
			)
		)
	);
	// -------------------
	// Edit Toggle Color
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize, 'wm_toggle_menu_color_control', 
		array(
			// UI - user sees
			'label' => __('Toggle Menu Color', 'wmtheme'),
			// assign control to section name
			'section' => 'wm_toggle_menu', 
			// setting for control name
			'settings' => 'wm_toggle_menu_color'
			)
		)
	);

}
// WP will know where to run function
add_action('customize_register', 'customize_colors'); 

// Output Customize CSS - This functions job is to output css with new color codes
function wm_customize_css(){ 
	;?>
<!-- HTML  -->
<style type="text/css">
	/* Target the specified title tag */
	/* CSS RULE for title color */
	.logo .header-title {
		/* Name of the setting */
		color: <?php echo get_theme_mod('wm_title_color');?>;
	}
	/* CSS Rule For sub-title color */
	.logo .sub-title{
		/* Name of the settings */
		color: <?php echo get_theme_mod('wm_sub_title_color');?>;
	}
	
	header .container,
	footer .social-feed-title,
	.comments-section #submit,
	.pages a  {
		/* Name of the settings  Top Nav Bar and Accents*/
		background: <?php echo get_theme_mod('wm_top_bar_color');?>;
	}

	.toggle-menu .bar {
		/* Toggle Menu Color Setting Name */
		background: <?php echo get_theme_mod('wm_toggle_menu_color');?>
	}
	.container .navbar .top-nav-menu-right li a {
  /* Give user options to change */
		color: <?php echo get_theme_mod('wm_top_bar_menu_text_color');?>;
	}
		@media (max-width: 970px) {
		.container .navbar .top-nav-menu-right ul {
			background: <?php echo get_theme_mod('wm_top_bar_drop_background_color');?>;
		}
	}
	@media (max-width: 970px) {
	.container .navbar .top-nav-menu-right ul li a:hover {
		background: <?php echo get_theme_mod('wm_top_bar_hover_color');?>;
	}
}

</style>

<?php }

add_action( 'wp_head','wm_customize_css' );

 
    /**
 	 * Filter the except length to 10 words.
	 * @param int $length Excerpt length.
     * @return int (Maybe) modified excerpt length.
	 *  
     * @since 0.71
     *
     * @see get_the_excerpt()
     *
     * @param string $post_excerpt The post excerpt.
     */

	//  Customize exercept word count length and format
	function custom_excerpt_length(){
		return 10;
	}
	add_filter('excerpt_length', 'custom_excerpt_length');

	function custom_excerpt_format(){
		return ' ...';
	}
	add_filter('excerpt_more', 'custom_excerpt_format');


	// Includes suport for featured images
	add_theme_support('post-thumbnails');

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Theme Support Hooks
	add_theme_support( 'title-tag' );

	// --------------------
	// Correctly Implement Later 
	add_theme_support( 'menus' );
	add_theme_support('automatic-feed-links');
	add_theme_support('widgets');
	add_theme_support('widgets-block-editor');
	
			add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);


		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Support For Post Formats
		add_theme_support('post-formats', array(
			'video', 'image'
		)
	);

function wmtheme_social_feed_title_customizer($wp_customize){

	$wp_customize->add_section('sec_social_feed_title', 
	array(
		'title' => 'Social Feed Title', 
		'description' => 'Give your social feed a cool title!'
	)
);

// For Controls Yes or No Selection
$wp_customize->add_setting('set_social_feed_title-display', 
array(
	'default' => 'No',
	'transport' => 'refresh'
	)
);
$wp_customize->add_control( 'social_feed_title_display_control', 
	array(
		'label' => 'Display this section?', 
		'section' => 'sec_social_feed_title',
		'settings' => 'set_social_feed_title-display',
		'type' => 'select',
		'choices' => array(
			'No' =>  'No',
			'Yes' => 'Yes'
		),
		)
	);
	// For Controls Yes or No Selection

	// social Control & Settings
	$wp_customize->add_setting('set_social_feed_title_text', 
		array(
			'default' => __('Check Out My Latest Travel Spots!','wmtheme'), 
			'transport' => 'refresh'
	)
);
	$wp_customize->add_control('social-feed-title-text-control', 
		array(
			'label' => 'Social Feed Header Text',
			'description' => 'Please, type your heading here.',
			'section' => 'sec_social_feed_title', 
			'settings' => 'set_social_feed_title_text',
			'type' => 'text'
	)
	
);
}
// use the name customize_register
add_action('customize_register', 'wmtheme_social_feed_title_customizer');

function wmtheme_copyright_customizer($wp_customize){
	// Copyright Section
	$wp_customize->add_section('sec_copyright', 
	array(
		'title' => 'Copyright', 
		'description' => 'Please, type here your copyright'
	)
);
	// Copyright Settings
	$wp_customize->add_setting('set_copyright', 
	array(
		'type' => 'theme_mod', 
		'default' => __('Copyright X - All Rights Reserved','wmtheme'),
		'sanitize_callback' => 'sanitize_text_field',
		 'transport'         => 'refresh',
		
	)
);
	// Copyright Control
	$wp_customize->add_control('ctrl_copyright', 
	array(
		'label' => 'Copyright Infomation', 
		'description' => 'Please, type your copyright here.',
		'section' => 'sec_copyright', 
		'settings' => 'set_copyright',
		'type' => 'text'

	)
);
}

// use the name customize_register
add_action('customize_register', 'wmtheme_copyright_customizer');
