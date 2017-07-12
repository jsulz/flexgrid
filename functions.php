<?php

namespace Flextastic;

function register_menus() {

	register_nav_menus( 
		array(
			'primary_nav' => __( 'Primary Navigation' ),
			'footer_nav' => __( 'Footer Navigation' )
		)
	);

}

add_action( 'init', __NAMESPACE__ . '\\register_menus' );

?>