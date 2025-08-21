<?php

// DEFINE CONSTANTS
define( 'TEKZ_THEME_DIR', get_template_directory() );
define( 'TEKZ_THEME_URI', get_template_directory_uri() );
define( 'TEKZ_THEME_CSS_DIR', TEKZ_THEME_URI . '/assets/css/' );
define( 'TEKZ_THEME_JS_DIR', TEKZ_THEME_URI . '/assets/js/' );
define( 'TEKZ_THEME_INC', TEKZ_THEME_DIR . '/inc/' );
define( 'TEKZ_CORE_PLUG_DIR', plugins_url( 'tekz-core/assets/' ) );
define( 'TEKZ_CORE', in_array( 'tekz-core/tekz-core.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) );

// INCLUDE CS FRAMEWORK FILE
require TEKZ_THEME_INC . 'csf-functions.php';

if ( !defined( 'TEKZ_WOOCOMMERCE_ACTIVED' ) ) {
    define( 'TEKZ_WOOCOMMERCE_ACTIVED', in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) );
}

if ( home_url() == "https://themexriver.com/wp/tekz" OR home_url() == 'http://localhost:10010' ) {
    define( 'VERSION', time() );
} else {
    define( 'VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( TEKZ_WOOCOMMERCE_ACTIVED ) {
    /**
     * Remove Action Hook
     */
    function tekz_woo_theme_init(){
        $tekz_exlude_hooks = require TEKZ_THEME_INC . 'woocommerce/woo-actions.php';
        foreach( $tekz_exlude_hooks as $k => $v )
        {
            foreach( $v as $value )
            remove_action( $k, $value[0], $value[1] );
        }

    }
    add_action( 'init', 'tekz_woo_theme_init');
}

// INCLUDE TEKZ AFTER SETUP
require TEKZ_THEME_INC . 'tekz-after-setup.php';

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tekz_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'tekz_content_width', 640 );
}
add_action( 'after_setup_theme', 'tekz_content_width', 0 );

// INCLUDE TEKZ REGISTER WIDGETS
require TEKZ_THEME_INC . 'tekz-register-widgets.php';

// INCLUDE TEKZ ENQUEUE SCRIPTS
require TEKZ_THEME_INC . 'tekz-enqueue-scripts.php';

// INCLUDE CUSTOM HEADER
require TEKZ_THEME_INC . 'custom-header.php';

// INCLUDE CUSTOM FUNCTIONS FILE
require TEKZ_THEME_INC . 'tekz-functions.php';

// INCLUDE CUSTOM CSS
require TEKZ_THEME_INC . 'tekz-custom-css.php';

// INCLUDE DEFAULT COMMENT
require TEKZ_THEME_INC . 'tekz-comment.php';

// INCLUDE LOGO FILE
require TEKZ_THEME_INC . 'layouts/tekz-logos.php';

// INCLUDE MENU FILE
require TEKZ_THEME_INC . 'layouts/tekz-menus.php';

// INCLUDE DEFAULT BREADCRUMB
require TEKZ_THEME_INC . 'layouts/tekz-breadcrumb.php';

// INCLUDE ALL ACTION FILE
require TEKZ_THEME_INC . 'layouts/tekz-actions.php';

// INCLUDE DEFAULT HEADER
require TEKZ_THEME_INC . 'layouts/tekz-default-header.php';

// INCLUDE FOOTER FILE
require TEKZ_THEME_INC . 'layouts/tekz-default-footer.php';

// INCLUDE SEARCH WIDGET FILE
require TEKZ_THEME_INC . 'tekz-search-widget.php';

// LOAD JETPACK COMPATIBILITY FILE
if ( defined( 'JETPACK__VERSION' ) ) {
    require TEKZ_THEME_INC . 'jetpack.php';
}

// ALL CLASS FILE
include_once TEKZ_THEME_INC . 'classes/class-tekz-helper.php';
require_once TEKZ_THEME_INC . 'classes/class-breadcrumb.php';
require_once TEKZ_THEME_INC . 'classes/class-navwalker.php';
require_once TEKZ_THEME_INC . 'classes/class-tgm-plugin-activation.php';
require_once TEKZ_THEME_INC . 'required-plugin.php';

// Remove version numbers from scripts and styles
function remove_version_from_assets( $src ) {
    if ( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_version_from_assets', 9999 );
add_filter( 'script_loader_src', 'remove_version_from_assets', 9999 );
