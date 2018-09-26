<?php
/* enqueue styles and scripts */
function jpen_enqueue_assets() {
  
  /* theme's primary style.css file */
  wp_enqueue_style( 'main-css' , get_stylesheet_uri() );
  /* template's primary css file */
  wp_enqueue_style( 'startup-boostrap-css' , get_template_directory_uri() . '/css/freelancer.css' );
  /* boostrap resources from theme files */
  wp_enqueue_style( 'bootstrap-css' , get_template_directory_uri() . '/css/freelancer.min.css' );
  wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/js/freelancer.min.js' , array( 'jquery' ) , false , true );
  /*conditional resources for IE 9 */
  wp_enqueue_script( 'simple-blog-html5', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js' , array(), '3.7.0' );
  wp_script_add_data( 'simple-blog-html5', 'conditional', 'lt IE 9' );
  wp_enqueue_script( 'simple-blog-respondjs', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js' , array(), '1.4.2' );
  wp_script_add_data( 'simple-blog-respondjs', 'conditional', 'lt IE 9' );
}

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Widget Space',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}

add_action( 'wp_enqueue_scripts' , 'jpen_enqueue_assets' );
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>