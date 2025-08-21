<?php
// header logos
function tekz_header_logo() {
    ?>
    <?php
        $tekz_site_logo = cs_get_option( 'tekz_logo', get_template_directory_uri() . '/assets/img/logo/logo-1.svg');
        if(isset($tekz_site_logo['url'])) {
            $logo_url = $tekz_site_logo['url'];
        } else {
            $logo_url = get_template_directory_uri() . '/assets/img/logo/logo-1.svg';
        }
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                ?>
                <a class="tx-logo bs-header-logo-1" href="<?php print esc_url( home_url( '/' ) );?>">
                    <img src="<?php echo esc_url($logo_url); ?>" alt="<?php if(function_exists('tekz_img_alt_text')) { echo tekz_img_alt_text($logo_url); } ?>" />
                </a>
                <?php
            }
        ?>
    <?php
}


// side info logo
function tekz_side_info_logo() {
    $tx_sideInfo_logo = cs_get_option( 'tx_sideInfo_logo', get_template_directory_uri() . '/assets/img/logo/logo-2.svg');
    if(isset($tx_sideInfo_logo['url'])) {
        $logo_url = $tx_sideInfo_logo['url'];
    } else {
        $logo_url = get_template_directory_uri() . '/assets/img/logo/logo-2.svg';
    }

    ?>
    <a class="wa-offcanvas-top-logo tx-logo" aria-label="logo" href="<?php print esc_url( home_url( '/' ) );?>">
        <img src="<?php print esc_url( $logo_url );?>" alt="<?php if(function_exists('logo_url')) { echo tekz_img_alt_text($logo_url); } ?>" />
    </a>


<?php }