<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-layouts
 *
 * @package tekz
 */
            //   hide if 404 page
            if (!is_404()){
                do_action( 'tekz_footer_style' );
            }

            wp_footer();
        ?>
        </div>
    </body>
</html>
