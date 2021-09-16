<?php
add_action('wp_enqueue_scripts', 'divi_child_theme_enqueue_styles');

function divi_child_theme_enqueue_styles()
{
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
}

# Registration Process: Join Organization (populate dropdown with options)

function orgs_list_dropdown()
{
	$args = [
		'post_type' => 'organization',
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'orderby' => 'title',
		'order' => 'ASC'
	];

	$organizations = new WP_Query($args);
	$orgs = [];
	if ($organizations->have_posts()) {

		settype($orgs, 'array');
		while ($organizations->have_posts()) {
			$organizations->the_post();
			$slug = get_post_field('post_name', get_the_ID());
			$title = get_the_title();
			$orgs += [$slug => $title];
		}   
	}
	return $orgs;
}
add_shortcode('orgs', 'orgs_list_dropdown');

# Registration: Create Organization (insert new post of type 'organization' into database)

add_action( 'um_registration_complete', 'my_registration_complete', 10, 2 );
function my_registration_complete( $user_id, $args ) {
	// 	var_dump($args);
	// 	var_dump($args['form_id']);
	if($args['form_id'] == 78 && $args['submitted']['choose_or_create'][0] == 'Create'){
		// 		var_dump($args['submitted']['create_organization']);
		$new_org = array(
			'post_title'    => $args['submitted']['create_organization'],
			'post_status'   => 'publish', 
			'post_type' => 'organization'
		);
		$post_org = wp_insert_post($new_org);
		var_dump($post_org);
	}
	die();
}