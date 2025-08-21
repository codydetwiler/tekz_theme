<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package tekz
 */

get_header();

$tekz_error_image = cs_get_option( 'tx_error_image', get_template_directory_uri() . '/assets/img/shape/404.webp' );
$tx_error_title_1 = cs_get_option( 'tx_error_title_1', esc_html__( 'Oops!', 'tekz' ) );
$tx_error_title_2 = cs_get_option( 'tx_error_title_2', esc_html__( '404 Error!', 'tekz' ) );
$tx_error_description = cs_get_option( 'tx_error_description', esc_html__( 'We can\'t find the page that you\'re looking for. Can\'t find what you need? Take a moment and search below!', 'tekz' ) );
if(isset($tekz_site_logo['url'])) {
	$image_url = $tekz_error_image['url'];
} else {
	$image_url = get_template_directory_uri() . '/assets/img/shape/404.webp';
}
$tekz_error_link_text = cs_get_option('tx_error_link_text', __('Back To Home Page', 'tekz'));

?>
<section class="tz-error-sec pt-115 pb-80" data-background="<?php echo esc_url($image_url) ? esc_url($image_url) : ''; ?>">
	<div class="container">
		<div class="tz-error-content text-center headline pera-content">

			<?php if(!empty( $tx_error_title_1 )) : ?>
			<h2><?php print esc_html($tx_error_title_1); ?></h2>
			<?php endif; ?>

			<?php if(!empty( $tx_error_title_2 )) : ?>
			<h3><?php print esc_html($tx_error_title_2); ?></h3>
			<?php endif; ?>

			<?php if(!empty( $tx_error_description )) : ?>
			<p><?php print esc_html($tx_error_description); ?></p>
			<?php endif; ?>

			<?php if(!empty( $tekz_error_link_text )) : ?>
			<div class="tz-btn-1 mt-40">
				<a href="<?php echo esc_url(home_url()); ?>"><span><?php print esc_html($tekz_error_link_text);?></span></a>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php
get_footer();
