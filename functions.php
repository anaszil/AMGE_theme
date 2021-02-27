<?php
function load_stylesheets(){
	/*
	wp_register_style('stylesheet', get_template_directory_uri(). '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('stylesheet');

	// Conditionally load the FlexSlider CSS on the homepage
	if(is_page('home')) {
		wp_enqueue_style('flexslider');
	}
	*/


	// Load all of the styles that need to appear on all pages
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'aos', get_template_directory_uri() . '/css/aos.css' );
	wp_enqueue_style( 'font_awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );

	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css' );
	
}

function collectiveray_load_js_script() {

    wp_enqueue_script( 'js-aos', get_template_directory_uri() . '/js/aos.js');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.1.js');
    wp_enqueue_script( 'js-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');

}
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = get_template_directory_uri().'/images/image_default.png';
  }
  return $first_img;
}

add_action('wp_enqueue_scripts', 'collectiveray_load_js_script');
add_action('wp_enqueue_scripts', 'load_stylesheets');



?>
