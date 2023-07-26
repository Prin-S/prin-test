<?php

// Creates a shortcode
function prin_test_message_shortcode( $options ) {
    // Adds default values
    $options = shortcode_atts( 
        array(
            'color' => 'green',
            'msg'   => 'Hello there.'
        ),
        $options
    );
    
    return '<div class="message ' . esc_attr( $options['color'] ) . '">' . esc_html( $options['msg'] ) . '</div>';
}
add_shortcode( 'message', 'prin_test_message_shortcode' ); // Shortcode is called 'message'