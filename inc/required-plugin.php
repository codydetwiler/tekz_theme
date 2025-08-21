<?php

add_action( 'tgmpa_register', 'tekz_register_required_plugins' );

function tekz_register_required_plugins() {

    $plugins = [
        [
            'name'               => esc_html__( 'Tekz Core', 'tekz' ),
            'slug'               => 'tekz-core',
            'source'             => esc_url( 'https://themexriver.com/wp/tekz/tekz-plug/tekz-core.zip' ),
            'external_url'       => esc_url( 'https://themexriver.com/wp/tekz/tekz-plug/tekz-core.zip' ),
            'required'           => true,
            'force_activation'   => false,
            'force_deactivation' => false,
        ],
        [
            'name'     => esc_html__( 'Elementor Page Builder', 'tekz' ),
            'slug'     => 'elementor',
            'required' => true,
        ],
        [
            'name'     => esc_html__( 'Contact Form 7', 'tekz' ),
            'slug'     => 'contact-form-7',
            'required' => true,
        ],
        [
            'name'     => esc_html__( 'WooCommerce', 'tekz' ),
            'slug'     => 'woocommerce',
            'required' => true,
        ],
        [
            'name'     => esc_html__( 'One Click Demo Import', 'tekz' ),
            'slug'     => 'one-click-demo-import',
            'required' => false,
        ],
        [
            'name'     => esc_html__( 'SVG Support', 'tekz' ),
            'slug'     => 'svg-support',
            'required' => false,
        ],

    ];

    $config = [
        'id'           => 'tekz',
        'parent_slug'  => 'tekz',
        'menu'         => 'tgmpa-install-plugins',
        'dismissable'  => true,
        'dismiss_msg'  => '',
        'is_automatic' => false,
        'message'      => '',
        'default_path' => '',
    ];

    tgmpa( $plugins, $config );
}
