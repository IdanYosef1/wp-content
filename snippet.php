<?php

add_action( 'woocommerce_add_to_cart', 'custom_message_add_to_cart', 10, 6);
function custom_message_add_to_cart($cart_id, $product_id, $request_quantity) {
    if(WC()->cart->cart_contents_count == $request_quantity){
       $message = __("Congratulations! You have added the first item to the cart.", "woocommerce");
	   wc_add_notice( $message, 'notice' );
    }
}
