<?php 

function slider_cpt() {
    $args = array(
        'label'  => 'Slider',
        'public' => true,
        'supports' => array( 'title', 'editor', 'thumbnail'),
        'taxonomies' => array('slider', 'category' ),
    );

    register_post_type( 'slider', $args );
}

function staff_cpt() {
    $args = array(
        'label'  => 'Staff Profiles',
        'public' => true,
        'supports' => array( 'title', 'editor', 'thumbnail'),
        'taxonomies' => array('staff', 'category' ),
    );

    register_post_type( 'staff', $args );
}

function testimonials_cpt() {
    $args = array(
        'label'  => 'Testimonials',
        'public' => true,
        'supports' => array( 'title', 'editor'),
    );

    register_post_type( 'testimonials', $args );
}



add_action( 'init', 'testimonials_cpt' );
add_action( 'init', 'staff_cpt' );
add_action( 'init', 'slider_cpt' );

?>