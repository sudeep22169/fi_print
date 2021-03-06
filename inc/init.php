<?php
/**
 * Load SO Bundle Widgets.
 */
if ( class_exists( 'SiteOrigin_Widget' ) ) {

	$so_widgets = array(
		'slider'      => 'slider/slider.php',
		'services'    =>'services/services.php',
		'skill'       =>'skill/skill.php',
		'title'       => 'title/title.php',
		'counter'     => 'counter/counter.php',
		'testimonial' => 'testimonial/testimonial.php',
		'client'      =>'client/client.php',
		'post'        =>'post/post.php',
		'address'     =>'address/address.php'
	);

	$temp_dir = get_template_directory();
	foreach ($so_widgets as $key => $value) {

		require $temp_dir . '/inc/so-widgets/'. $value;

	}

}
