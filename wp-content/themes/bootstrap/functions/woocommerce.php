<?php 

/*add theme support*/
function woocommerce_content() {

	if ( is_singular( 'product' ) ) {

	  while ( have_posts() ) : the_post();

	    wc_get_template_part( 'content', 'single-product' );

	  endwhile;

	} else { ?>

	  <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

	    <h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

	  <?php endif; ?>

	  <?php do_action( 'woocommerce_archive_description' ); ?>

	  <?php if ( have_posts() ) : ?>

	    <?php do_action('woocommerce_before_shop_loop'); ?>

	    <?php woocommerce_product_loop_start(); ?>

	      <?php woocommerce_product_subcategories(); ?>

	      <?php while ( have_posts() ) : the_post(); ?>

	        <?php wc_get_template_part( 'content', 'product' ); ?>

	      <?php endwhile; // end of the loop. ?>

	    <?php woocommerce_product_loop_end(); ?>

	    <?php do_action('woocommerce_after_shop_loop'); ?>

	  <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

	    <?php wc_get_template( 'loop/no-products-found.php' ); ?>

	  <?php endif;

	}
}


/**
 * Add the field to the checkout Terms and Conditions
 */

/*function terms_and_conditions( $checkout ) {
    echo '<a href="/terms-and-conditions/" target="blank"><div id="terms_and_conditions"><h2>Terms and Conditions</h2></a>';
    woocommerce_form_field( 'ts&cs', array(
        'type'          => 'checkbox',
        'class'         => array('my-field-class form-row-wide'),
        'label'         => __('I have read the Terms and Conditions.'),
        'placeholder'   => __('Enter something'),
        ), $checkout->get_value( 'ts&cs' ));
    echo '</div>';
}*/

/*function ts_and_cs() {
    // Check if set, if its not set add an error.
    if ( ! $_POST['ts&cs'] )
        wc_add_notice( __( 'Please read and accept our T&Cs.' ), 'error' );
}*/



function quantity_input_args( $args, $product ) {
  if ( is_singular( 'product' ) ) {
    $args['input_value']  = 1;  // Starting value (we only want to affect product pages, not cart)
  }
  $args['min_value']  = 1;    // Minimum value
  return $args;
}

function dubzz_woocommerce_available_variation( $args ) {
  $args['min_qty'] = 1;     // Minimum value (variations)
  return $args;
}

/*function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['description'] );          // Remove the description tab
    unset( $tabs['reviews'] );          // Remove the reviews tab
    unset( $tabs['additional_information'] );   // Remove the additional information tab
    return $tabs;
}*/

/*function hide_coupon_field( $enabled ) {
    if ( is_cart() || is_checkout() ) {
        $enabled = false;
    }
    return $enabled;
}*/

add_filter( 'woocommerce_quantity_input_args', 'quantity_input_args', 10, 2 );
add_filter( 'woocommerce_available_variation', 'dubzz_woocommerce_available_variation' );
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
add_filter( 'woocommerce_coupons_enabled', 'hide_coupon_field' );

add_action( 'woocommerce_before_order_notes', 'terms_and_conditions' );
add_action( 'woocommerce_checkout_process', 'ts_and_cs');