<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Responsive data
	$responsive_array = array(
		'1' => __('Yes', 'em'),
		'0' => __('No', 'em'),
	);

        $scroll_option_array= array(
		'1' => __('Yes', 'em'),
		'0' => __('No', 'em'),
	);

        $page_layout_array= array(
		'1' => __('Yes', 'em'),
		'0' => __('No', 'em'),
	);
        
	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'em'),
		'two' => __('Pancake', 'em'),
		'three' => __('Omelette', 'em'),
		'four' => __('Crepe', 'em'),
		'five' => __('Waffle', 'em')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	
	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	
	
	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __('General', 'em'),
		'type' => 'heading');

        $options[] = array(
		'name' => __('Logo', 'em'),
		'desc' => __('This creates a full size uploader that previews the image.', 'em'),
		'id' => 'em_logo',
		'type' => 'upload');

        $options[] = array(
		'name' => __('Favicon', 'em'),
		'desc' => __('This creates a full size uploader that previews the image.', 'em'),
		'id' => 'em_favicon',
		'type' => 'upload');


	$options[] = array(
		'name' => __('Header', 'em'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Hidden Text Input', 'em'),
		'desc' => __('This option is hidden unless activated by a checkbox click.', 'em'),
		'id' => 'example_text_hidden',
		'std' => 'Hello',
		'class' => 'hidden',
		'type' => 'text');

	$options[] = array(
		'name' => __('Header Background Color', 'em'),
		'desc' => __('No color selected by default.', 'em'),
		'id' => 'em_header_color',
		'std' => '',
		'type' => 'color' );
        
//        $options[] = array(
//		'name' => __('Header Sign up Color', 'em'),
//		'desc' => __('No color selected by default.', 'em'),
//		'id' => 'em_signup_button_color',
//		'std' => '',
//		'type' => 'color' );

        $options[] = array(
		'name' => __('Header Opacity', 'em'),
		'desc' => __('A mini text input field.', 'em'),
		'id' => 'em_header_opacity',
		'std' => 'Default',
		'class' => 'mini',
		'type' => 'text');

	$options[] = array( 'name' => __('Typography', 'em'),
		'desc' => __('Example typography.', 'em'),
		'id' => "example_typography",
		'std' => $typography_defaults,
		'type' => 'typography' );

	$options[] = array(
		'name' => __('Custom Typography', 'em'),
		'desc' => __('Custom typography options.', 'em'),
		'id' => "custom_typography",
		'std' => $typography_defaults,
		'type' => 'typography',
		'options' => $typography_options );

	$options[] = array(
		'name' => __('Footer', 'em'),
		'type' => 'heading' );
        
//        $options[] = array(
//		'name' => __('Footer Background Color', 'em'),
//		'desc' => __('No color selected by default.', 'em'),
//		'id' => 'em_footer_color',
//		'std' => '',
//		'type' => 'color' );
        
        $options[] = array(
		'name' => __('Top Footer Text', 'em'),
                'desc' => sprintf( __( 'This editor includes media button.', 'em' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'em_top_footer_text',	
                'class' => 'mini',
		'type' => 'editor' );
        
        $options[] = array(
		'name' => __('Top Footer Heading', 'em'),		
		'id' => 'em_top_footer_heading',
		'std' => '',
		'type' => 'text' );
        
        $options[] = array(
		'name' => __('Top Footer Content', 'em'),		
		'id' => 'em_top_footer_content',
		'std' => '',
		'type' => 'text' );
        
         $options[] = array(
		'name' => __('Top Footer Button Text', 'em'),		
		'id' => 'em_top_footer_btn_text',
		'std' => '',
		'type' => 'text' );
        
        $options[] = array(
		'name' => __('Top Footer Button Link', 'em'),		
		'id' => 'em_top_footer_btn_link',
		'std' => '',
		'type' => 'text' );
        
        $options[] = array(
		'name' => __('Copyright Text', 'em'),
		'desc' => sprintf( __( 'This editor includes media button.', 'em' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'em_footer_copyright',
		'type' => 'editor' );

	$options[] = array(
		'name' => __('404', 'em'),
		'type' => 'heading' );
        
        $options[] = array(
		'name' => __('Heading', 'em'),
		'desc' => __('Heading of 404 page.', 'em'),
		'id' => 'em_pnf_head',
		'std' => 'Default',
		'type' => 'text');

        $options[] = array(
		'name' => __('Description / Text', 'em'),
		'desc' => sprintf( __( 'Description of 404 page.', 'em' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'em_pnf_content',
		'type' => 'editor' );
      
	/*
	Social Tabs
	*/
	$options[] = array(
		'name' => __('Social', 'em'),
		'type' => 'heading' );
	
	// Git
	$options[] = array(
		'name' => __('Git Link', 'em'),
		'desc' => __('Enter Git Profile link.', 'em'),
		'id' => 'em_git_link',
		'class' => '',
		'type' => 'text');
	
	// Twitter
	$options[] = array(
		'name' => __('Twitter Link', 'em'),
		'desc' => __('Enter Twitter Profile link.', 'em'),
		'id' => 'em_twitter_link',
		'class' => '',
		'type' => 'text');
		
	// Facebook
	$options[] = array(
		'name' => __('Facebook Link', 'em'),
		'desc' => __('Enter Facebook Profile link.', 'em'),
		'id' => 'em_facebook_link',
		'class' => '',
		'type' => 'text');		
	
	// Google +
	$options[] = array(
		'name' => __('Google Plus Link', 'em'),
		'desc' => __('Enter Google Plus Profile link.', 'em'),
		'id' => 'em_g_plus_link',
		'class' => '',
		'type' => 'text');	
		
	// Linkedin
	$options[] = array(
		'name' => __('Linkedin Link', 'em'),
		'desc' => __('Enter Linkedin Profile link.', 'em'),
		'id' => 'em_linkedin_link',
		'class' => '',
		'type' => 'text');

        /*
	Blog 
	*/
	$options[] = array(
		'name' => __('Blog', 'em'),
		'type' => 'heading' );

        // Promo Heading
	$options[] = array(
		'name' => __('Blog Promo Heading', 'em'),
		'desc' => __('Enter Promo Heading.', 'em'),
		'id' => 'em_blog_promo_head',
		'class' => '',
		'type' => 'text');

        // Promo Content
	$options[] = array(
		'name' => __('Blog Promo Content', 'em'),
		'desc' => __('Enter Promo Content.', 'em'),
		'id' => 'em_blog_promo_content',
		'class' => '',
		'type' => 'text');

         // Promo Button
	$options[] = array(
		'name' => __('Blog Promo Button Link', 'em'),
		'desc' => __('Enter Promo button link.', 'em'),
		'id' => 'em_blog_promo_link',
		'class' => '',
		'type' => 'text');

	return $options;
}