	<?php
	/*
     Template Name: Bootstrap Genesis
    */
		get_header();
		do_action( 'genesis_before_content_sidebar_wrap' );
		genesis_markup( array(
		'html5'   => '<div %s>',
		'xhtml'   => '<div id="content-sidebar-wrap">',
		'context' => 'content-sidebar-wrap',
		) );
		do_action( 'genesis_before_content' );
		genesis_markup( array(
			'html5'   => '<main %s>',
			'xhtml'   => '<div id="content" class="hfeed">',
			'context' => 'content',
		) );
			do_action( 'genesis_before_loop' );
			do_action( 'genesis_loop' );
			do_action( 'genesis_after_loop' );
		genesis_markup( array(
			'html5' => '</main>', 
			'xhtml' => '</div>', 
		) );
		do_action( 'genesis_after_content' );
		 // move genesis_after_content_sidebar_wrap before for better bootstrap integration
		do_action( 'genesis_after_content_sidebar_wrap' );
    echo '</div>';
		get_footer(); 
	?>
