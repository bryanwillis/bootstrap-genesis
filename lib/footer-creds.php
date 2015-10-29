<?php

add_filter('genesis_footer_creds_text', 'bsg_footer_creds_filter');

function bsg_footer_creds_filter( $creds ) {
    $rel = is_front_page() ? '' : 'rel="nofollow"';
    $creds = "<a {$rel} href=\"http://ironcodestudio.com/bootstrap-genesis-theme/\">Bootstrap Genesis Theme</a> by <a {$rel} href=\"http://ironcodestudio.com/\">Iron Code Studio</a>";
    return $creds;
}

add_filter( 'genesis_footer_output', 'bsg_footer_creds_filter', 10, 3 );
function bsg_footer_creds_filter( $creds ) {
	$creds = '<p class="text-center">[footer_copyright] &middot; <a href="'. esc_url( home_url( '/' ) ) .'">'. get_bloginfo( 'name' ) .'</a></p>';
	return $creds;
}
