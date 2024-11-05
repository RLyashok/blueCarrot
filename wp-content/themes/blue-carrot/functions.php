<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

add_action( 'wp_enqueue_scripts', function() {
	$themeUrl = get_template_directory_uri();
	wp_enqueue_style( 'aeonik', 'https://db.onlinewebfonts.com/c/0927e08fbdf95205b63c5b8774adeef6?family=Aeonik+TRIALs' );
	wp_enqueue_style( 'korbin-medium-italic', 'https://db.onlinewebfonts.com/c/2b3781ec7090803695920734bdf707d4?family=Korbin+W01+Medium+Italic' );
	wp_enqueue_style( 'korbin-medium', 'https://db.onlinewebfonts.com/c/953440d6182da090377d805e5156873c?family=Korbin+W01+Medium' );
	wp_enqueue_style( 'korbin-light', 'https://db.onlinewebfonts.com/c/a2552e4a5fd9b3006a9407b9fb235a2d?family=Korbin+W01+Light' );
	wp_enqueue_style( 'another-css', $themeUrl . '/assets/css/style.css' );
	wp_enqueue_script( 'accord', 'https://unpkg.com/accordion-js@3.3.4/dist/accordion.min.js', array(), '1.0', true  );
	wp_enqueue_script( 'main', $themeUrl . '/assets/js/main.js', array('accordion'), '1.0', true );
} );
