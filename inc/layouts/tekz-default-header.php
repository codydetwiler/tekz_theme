<?php

/**
 * Default Header Style
 */
function tekz_default_header() {
    if ( has_nav_menu( 'main-menu' ) ) {
        $no_menu_class = '';
    } else {
        $no_menu_class = 'no-menu ';
    }

    ?>
	<header class="tz-header-section header_style_one txa_sticky_header tx-header tx-DefaultHeader <?php echo esc_attr($no_menu_class); ?>">
		<div class="tz-main-navigation-wrap">
			<div class="container">
				<div class="tz-main-navigation-area d-flex justify-content-between align-items-center">
					<div class="brand-logo">
						<?php function_exists( 'tekz_header_logo' ) ? tekz_header_logo() : '';?>
					</div>

					<?php if ( has_nav_menu( 'main-menu' ) ) : ?>
					<div class="main-navigation-cta d-flex align-items-center ">
						<nav class="main-navigation clearfix ul-li">
							<?php function_exists( 'tekz_header_menu' ) ? tekz_header_menu( 'main-menu' ) : null;?>
						</nav>
					</div>
					<div class="header-action d-flex align-items-center">
						<button class="tz-mobile-btn-trigger mobile-menu-btn mobile_menu_button open_mobile_menu">
							<span></span>
							<span></span>
							<span></span>
						</button>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header>

	<div class="mobile_menu lenis lenis-smooth position-relative">
		<div class="mobile_menu_wrap">
			<div class="mobile_menu_overlay open_mobile_menu"></div>
			<div class="mobile_menu_content">
				<div class="mobile_menu_close open_mobile_menu">
					<i class="fas fa-times"></i>
				</div>
				<div class="m-brand-logo">
					<?php function_exists( 'tekz_side_info_logo' ) ? tekz_side_info_logo() : '';?>
				</div>

				<nav class="mobile-main-navigation  clearfix ul-li">
					<?php function_exists( 'tekz_header_menu' ) ? tekz_header_menu( 'main-menu' ) : null;?>
				</nav>
			</div>
		</div>
	</div>

	<?php
}
