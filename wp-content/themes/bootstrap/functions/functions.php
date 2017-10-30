<?php

function get_excerpt($limit, $source = null){

    if($source == "content" ? ($excerpt = get_the_content()) : ($excerpt = get_the_excerpt()));
        $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
        $excerpt = strip_shortcodes($excerpt);
        $excerpt = strip_tags($excerpt);
        $excerpt = substr($excerpt, 0, $limit);
        $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
        $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
        $excerpt = $excerpt.'...';

    return $excerpt;
}

function get_hero_image() {

    echo '<div class="hero-image" style="background-image: url(' . 
    get_template_directory_uri() . '/images/hero/hero-' . rand(1,3) .'.jpg);"></div>';

}

function featured_posts ($offset) {

	$the_query = new WP_Query( [

		'post_type' 		=> 'post', 
		'posts_per_page' 	=> 1,
		'category_name'		=> 'Featured',
		'offset'           	=> $offset,


	] );

	if ( $the_query->have_posts() ) {

		while ( $the_query->have_posts() ) {

			$the_query->the_post();
		
			echo '<h3><a href="' . get_the_permalink() .'">' . get_the_title() . '</a></h3>';
			echo '<p><em>' . get_the_time('l, F jS, Y');
			echo ' in '; 
			the_category( ', ' );
			echo '</em></p>';           
			echo get_excerpt(300); 
			echo '<p><a class="btn btn-sm btn-danger" href="' . get_the_permalink() .'" role="button">Read More</a></p>';

		}
	}

    wp_reset_query();

}


function display_meta_box() {

	echo nl2br( get_post_meta( get_the_ID(), 'custom_wysiwyg', true) );

}


?>