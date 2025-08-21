<?php

// File Security Check
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

function tekz_primary_color() {

    wp_enqueue_style( 'tekz-primary-color', TEKZ_THEME_CSS_DIR . 'tekz-custom.css', [] );

    $theme_color_1 = cs_get_option( 'theme_color_1', '#683BF2' );

    if (
        $theme_color_1
    ) {
        $custom_css = '';
        $custom_css .= '
            :root {
                --tz-prime-c: ' . esc_attr( $theme_color_1 ) . ';
            }
        ';

        wp_add_inline_style( 'tekz-primary-color', $custom_css );
    }

}
add_action( 'wp_enqueue_scripts', 'tekz_primary_color' );