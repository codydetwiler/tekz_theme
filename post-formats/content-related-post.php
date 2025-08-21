<?php
$tekz_enable_blog_navigation = cs_get_option('tx_enable_blog_navigation');
$tekz_prev_post = get_previous_post();
$tekz_next_post = get_next_post();

if( $tekz_enable_blog_navigation == true ) {
    if(!empty(get_previous_post() || get_next_post()) ) {
        ?>

        <div class="tx-nextPrev-post-wrapper">
            <div class="tx-item">
                <?php
                    $tekz_prev_post_img = get_the_post_thumbnail_url( $tekz_prev_post, 'full' );
                    if( !empty($tekz_prev_post_img) ) :
                ?>
                <div class="tx-thumb">
                    <a href="<?php echo esc_url(get_permalink($tekz_prev_post->ID)); ?>">
                        <img src="<?php print esc_url($tekz_prev_post_img); ?>" alt="<?php if(function_exists('tekz_img_alt_text')) { echo tekz_img_alt_text( $tekz_prev_post_img ); } ?>">
                        <i class="fa-solid fa-angle-left blog-details-navigate-icon"></i>
                    </a>
                </div>
                <?php endif; ?>
                <div class="tx-content">
                    <span class="tx-date"><?php print esc_html(get_the_date( get_option( 'date_format' ), $tekz_prev_post )); ?></span>
                    <h3 class="tx-title">
                        <a href="<?php print get_the_permalink($tekz_prev_post); ?>" aria-label="blog">
                            <?php print get_the_title($tekz_prev_post); ?>
                        </a>
                    </h3>
                </div>
            </div>
            <div class="tx-item">
                <div class="tx-content">
                    <span class="tx-date"><?php print esc_html(get_the_date( get_option( 'date_format' ), $tekz_next_post )); ?></span>
                    <h3 class="tx-title">
                        <a href="<?php print get_the_permalink($tekz_next_post); ?>" aria-label="blog">
                            <?php print get_the_title($tekz_next_post); ?>
                        </a>
                    </h3>
                </div>
                <?php
                    $tekz_next_post_img = get_the_post_thumbnail_url( $tekz_next_post, 'full' );
                    if( !empty($tekz_next_post_img) ) :
                ?>
                <div class="tx-thumb">
                    <a href="<?php echo esc_url(get_permalink($tekz_next_post->ID)); ?>">
                        <img src="<?php print esc_url($tekz_next_post_img); ?>" alt="<?php if(function_exists('tekz_img_alt_text')) { echo tekz_img_alt_text( $tekz_next_post_img ); } ?>">
                        <i class="fa-solid fa-angle-left blog-details-navigate-icon"></i>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    <?php
    }
}
?>