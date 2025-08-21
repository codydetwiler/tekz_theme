<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tekz
 */

get_header();

if(!empty( TEKZ_CORE )) {
	$blog_details_wrapper = 'tx-detailsWrapper__prev';
}else {
	$blog_details_wrapper = 'tx-detailsWrapper__unit';
}
$blog_column = is_active_sidebar( 'blog-sidebar' ) ? 'col-xxl-8 col-xl-8 col-lg-8' : 'col-lg-12';
?>

<div class="tx-blog-area bs-blog-details-area wa-p-relative pt-110 pb-120 <?php echo esc_attr($blog_details_wrapper); ?>">
	<div class="container bs-container-1">
		<div class="row">
			<div class="<?php print esc_attr( $blog_column );?>">
				<div class="tx-detailsWrapper blog-details-content bs-blog-details-content <?php echo esc_attr($blog_details_wrapper); ?>">
					<?php
						while ( have_posts() ):
						the_post();
						get_template_part( 'post-formats/content', get_post_format() );

						if(TEKZ_CORE) {
							if(!empty(get_previous_post() || get_next_post()) ) {
								get_template_part( 'post-formats/content', 'related-post' );
							}
						} else if(comments_open() || get_comments_number()) {
							echo '<div class="mt-50"></div>';
						} else {
							echo '<div class="d-none"></div>';
						}

						get_template_part( 'post-formats/content', 'author' );

					?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ): ?>
						<div class="tx-commentsWrapper mt-40">
							<?php comments_template(); ?>
						</div>
						<?php
							endif;
							endwhile; // End of the loop.
					?>
				</div>
			</div>
			<?php if ( is_active_sidebar( 'blog-sidebar' ) ): ?>
			<div class="col-xxl-4 col-xl-4 col-lg-4 mt-30 mt-lg-0">
				<div class="tx-sidebarWrapper tz-ser-sidebar">
					<?php get_sidebar();?>
				</div>
			</div>
			<?php endif;?>
		</div>
	</div>
</div>

<?php
get_footer();
