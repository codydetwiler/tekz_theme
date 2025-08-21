<?php

/**
 * tekz_scripts description
 * @return [type] [description]
 */
function tekz_scripts() {

    wp_enqueue_style( 'tekz-fonts', tekz_fonts_url(), [], null );
    wp_enqueue_style( 'animate-min', TEKZ_THEME_CSS_DIR . 'animate-min.css', [], VERSION );
    wp_enqueue_style( 'bootstrap-min', TEKZ_THEME_CSS_DIR . 'bootstrap.min.css', [] );
    wp_enqueue_style( 'swiper-min', TEKZ_THEME_CSS_DIR . 'swiper.min.css', [], VERSION );
    wp_enqueue_style( 'fontawesome-min', TEKZ_THEME_CSS_DIR . 'fontawesome-min.css', [] );
    wp_enqueue_style( 'nice-select', TEKZ_THEME_CSS_DIR . 'nice-select.css', [], VERSION );
    wp_enqueue_style( 'magnific-popup', TEKZ_THEME_CSS_DIR . 'magnific-popup.css', [], VERSION );
    // THEME REQUIRED CSS
    wp_enqueue_style( 'tekz-core', TEKZ_THEME_CSS_DIR . 'tekz-core.css', [], VERSION );
    wp_enqueue_style( 'tekz-companion', TEKZ_THEME_CSS_DIR . 'tekz-companion.css', [] );
    wp_enqueue_style( 'tekz-extra', TEKZ_THEME_CSS_DIR . 'tekz-extra.css', [] );
    wp_enqueue_style( 'tekz-custom', TEKZ_THEME_CSS_DIR . 'tekz-custom.css', [] );
    wp_enqueue_style( 'tekz-woocommerce', TEKZ_THEME_CSS_DIR . 'tekz-woocommerce.css', [] );
    wp_enqueue_style( 'tekz-style', get_stylesheet_uri() );

    if ( class_exists('WooCommerce') ) {
		wp_enqueue_style( 'woocommerce-style', get_template_directory_uri() . '/woocommerce/woocommerce.css' );
	}

    $my_current_lang = apply_filters( 'wpml_current_language', NULL );

    $enable_rtl = cs_get_option( 'enable_rtl', false );
    if ( $my_current_lang != 'en' && $enable_rtl || is_rtl() ) {
        wp_enqueue_style( 'tekz-rtl', TEKZ_THEME_CSS_DIR . 'tekz-rtl.css', [] );
    }

    // all js files
    wp_enqueue_script( 'bootstrap-min', TEKZ_THEME_JS_DIR . 'bootstrap-min.js', ['jquery'], false, true );
    wp_enqueue_script( 'swiper-min', TEKZ_THEME_JS_DIR . 'swiper.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'wow-min', TEKZ_THEME_JS_DIR . 'wow-min.js', ['jquery'], false, true );
    wp_enqueue_script( 'appear', TEKZ_THEME_JS_DIR . 'appear.js', ['jquery'], false, true );
    wp_enqueue_script( 'gsap-min', TEKZ_THEME_JS_DIR . 'gsap.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'knob', TEKZ_THEME_JS_DIR . 'knob.js', ['jquery'], false, true );
    wp_enqueue_script( 'counterup-min', TEKZ_THEME_JS_DIR . 'counterup.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'isotope-pkgd-min', TEKZ_THEME_JS_DIR . 'isotope.pkgd.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'imagesloaded', ['jquery'], false, true );
    wp_enqueue_script( 'waypoints-min', TEKZ_THEME_JS_DIR . 'waypoints.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'jquery-ui-core', ['jquery'], false, true );
    wp_enqueue_script( 'magnific-popup-min', TEKZ_THEME_JS_DIR . 'magnific-popup.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'jquery-marquee-min', TEKZ_THEME_JS_DIR . 'jquery.marquee.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'lenis-min', TEKZ_THEME_JS_DIR . 'lenis.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'split-type-min', TEKZ_THEME_JS_DIR . 'split-type.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'customEase-min', TEKZ_THEME_JS_DIR . 'customEase.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'scrollTrigger-min', TEKZ_THEME_JS_DIR . 'scrollTrigger.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'SplitText-min', TEKZ_THEME_JS_DIR . 'SplitText.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'touchspin', TEKZ_THEME_JS_DIR . 'touchspin.js', ['jquery'], false, true );
    wp_enqueue_script( 'tekz-custom', TEKZ_THEME_JS_DIR . 'tekz-custom.js', ['jquery'], false, true );

    if ( $my_current_lang != 'en' && $enable_rtl || is_rtl() ) {
        wp_enqueue_script( 'tekz-core-rtl', TEKZ_THEME_JS_DIR . 'tekz-core-rtl.js', ['jquery'], VERSION, true );
    } else {
        wp_enqueue_script( 'tekz-core', TEKZ_THEME_JS_DIR . 'tekz-core.js', ['jquery'], VERSION, true );
    }

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

}
add_action( 'wp_enqueue_scripts', 'tekz_scripts' );
