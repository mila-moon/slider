<?php
//slider speed new control - Wordpress
function Slider_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'slider_section' , array(
		'title'     => __( 'Slider', 'Divi-child' ),
		'capability' => 'edit_theme_options',
		'description' => 'Enter the display time:'
		)
	);
	$wp_customize->add_setting(
		// ID
		'slider_speed',
		// Arguments array
		array(
			'default' => '5',//seconds
			'type' => 'theme_mod'
		)
	);
	$wp_customize->add_control(
		// ID
		'slider_speed',
		// Arguments array
		array(
			'label' => __( 'Display time in seconds.', 'Divi-child' ),
			'section' => 'slider_section',//ID of the new section
			'type' => 'number',
			// This last one must match setting ID from above
			'settings' => 'slider_speed'
		)
	);
}
add_action( 'customize_register', 'Slider_customize_register' );
// $slider_timing= get_theme_mod('primm_slider_speed'); -> this is how you get the value of input using the ID
// echo("Slider Timing: ".$slider_timing);  // test only if you want print on screen the value 
// var_dump($slider_timing);
?>
