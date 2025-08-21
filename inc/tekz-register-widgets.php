<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 */

function tekz_widgets_init() {

    /**
     * blog sidebar
     */
    register_sidebar( [
        'name'          => esc_html__( 'Blog Sidebar', 'tekz' ),
        'id'            => 'blog-sidebar',
        'before_widget' => '<div id="%1$s" class="tx-blog-widget widget tz-sidebar-widget headline %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ] );

    if ( TEKZ_WOOCOMMERCE_ACTIVED ) {
        // shop sidebar
        register_sidebar( [
            'name'          => esc_html__( 'Product Sidebar', 'tekz' ),
            'id'            => 'product-sidebar',
            'before_widget' => '<div id="%1$s" class="tx-blog-widget widget tz-sidebar-widget headline %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ] );
    }

    $footer_widgets = cs_get_option( 'footer_widget_number' );

}
add_action( 'widgets_init', 'tekz_widgets_init' );