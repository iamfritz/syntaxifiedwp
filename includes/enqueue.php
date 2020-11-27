<?php

add_action( 'wp_enqueue_scripts', function () {

	// registers scripts and stylesheets
	$styles = [
		'font'         => 'https://fonts.googleapis.com/css?family=Open+Sans:400,600|Titillium+Web:700&display=swap',
		'bootstrap'    => get_template_directory_uri() . '/assets/css/bootstrap.min.css',
		'animate'      => get_template_directory_uri() . '/assets/css/animate.css',
		'owl.carousel' => get_template_directory_uri() . '/assets/css/owl.carousel.css',
		'owl.theme'    => get_template_directory_uri() . '/assets/css/owl.theme.css',
		'ionicons'     => get_template_directory_uri() . '/assets/css/ionicons.min.css',
		'style.theme'  => get_template_directory_uri() . '/assets/css/style.css'
	];
	$scripts = [
		'jquery'    => get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js',
		'bootstrap' => get_template_directory_uri() . '/assets/js/bootstrap.min.js',
		'popper'    => get_template_directory_uri() . '/assets/js/popper.min.js',
		'jquery'    => get_template_directory_uri() . '/assets/js/jquery.validate.min.js',
		'plugins'   => get_template_directory_uri() . '/assets/js/plugins.js',
		'custom'    => get_template_directory_uri() . '/assets/js/custom.js'
	  ];


	foreach($styles as $name => $url) {
		wp_enqueue_style( $name, $url );
	}

	foreach($scripts as $name => $url) {
		wp_enqueue_script( $name, $url, array(), '1.0', true );
	}


	#wp_enqueue_style( 'app', AssetResolver::resolve( 'css/app.css' ), [], true );
	#wp_enqueue_script( 'app', AssetResolver::resolve( 'js/app.js' ), [], true, true );

} );