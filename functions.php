<?php
function antonidis_files(){
wp_enqueue_script( 'main-university-js', get_theme_file_uri('js/scripts-bundled.js'), null,microtime(), true );
wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
wp_enqueue_style( 'font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
wp_enqueue_style( 'antonidis_main_styles', get_stylesheet_uri(), null, microtime() );
}

add_action( 'wp_enqueue_scripts', 'antonidis_files');
?>