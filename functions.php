<?php
//slider speed control
function Slider_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'slider_section' , array(
		'title'     => __( 'Carousel', 'Divi-child' ),
		'capability' => 'edit_theme_options',
		'description' => 'Digite ou use as setas para selecionar o tempo de exibição:'
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
			'label' => __( 'Tempo de exibição em segundos.', 'Divi-child' ),
			'section' => 'slider_section',
			'type' => 'number',
			// This last one must match setting ID from above
			'settings' => 'slider_speed'
		)
	);
}
add_action( 'customize_register', 'Slider_customize_register' );
// $slider_timing= get_theme_mod('primm_slider_speed');
// echo("Slider Timing: ".$slider_timing);  // test only
// var_dump($slider_timing);
?>