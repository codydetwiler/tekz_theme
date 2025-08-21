<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-layouts
 *
 * @package tekz
 */

$preloader_enable = cs_get_option( 'preloader_enable', true );
$enable_scroll_up = cs_get_option( 'enable_scroll_up', true );
$preloader_image = cs_get_option( 'preloader_image', get_template_directory_uri() . '/assets/logo/logo-1.svg' );
?>

<!doctype html>
<html <?php if(function_exists('language_attributes')) {language_attributes();} ?> <?php if(function_exists('tekz_enable_rtl')) { print tekz_enable_rtl();} ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' );?>">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ): ?>
    <?php endif;?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head();?>
</head>

<body <?php body_class();?>>
<?php wp_body_open();?>

<div class="page-wrapper wa-fix">

    <!-- preloader start -->
    <?php if( $preloader_enable == true ) : ?>
    <div id="tx_preloader">
  		<div class="preloader-logo">
            <?php if(!empty( $preloader_image['url'] )) : ?>
            <img src="<?php echo esc_url($preloader_image['url']); ?>"
                alt="<?php if(function_exists('tekz_img_alt_text')) { echo tekz_img_alt_text( $preloader_image['url'] ); } ?>">
            <?php endif; ?>
  		</div>
  	</div>
    <?php endif; ?>
    <!-- preloader end -->

    <!-- back-to-top-button-start -->
    <?php if( $enable_scroll_up == true ) : ?>
    <div class="up">
  		<button type="button" class="scrollup text-center"><i class="fa-solid fa-arrow-up"></i></button>
  	</div>
    <?php endif; ?>
    <!-- back-to-top-button-end -->

    <!-- header start -->

    <?php
        //   hide if 404 page
        if (!is_404()){
            do_action( 'tekz_header_style' );
        }

    ?>
    <!-- header end -->

    <!-- wrapper-box start -->
    <?php do_action( 'tekz_before_main_content' ); ?>