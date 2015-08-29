<?php do_action( 'fe_before_sidebar' ); ?>
<?php 
wp_reset_query();
//sidebar
if ( is_active_sidebar( 'fe-allpage-sidebar' ) && !( is_page('blog') || is_single() || is_home() || is_front_page() || is_singular('thread'))){
	dynamic_sidebar( 'fe-allpage-sidebar' );
} 
else if (is_active_sidebar( 'fe-homepage-sidebar' ) && is_front_page() ){
	dynamic_sidebar( 'fe-homepage-sidebar' );
}
else if (is_active_sidebar( 'fe-single-thread-sidebar' ) && is_singular('thread') ){
	dynamic_sidebar( 'fe-single-thread-sidebar' );
}
else if (is_active_sidebar( 'fe-single-post-sidebar' ) && is_singular('post') ){
	dynamic_sidebar( 'fe-single-post-sidebar' );
} else { 
	dynamic_sidebar( 'fe-blog-sidebar' );
}

?>
<!-- end widget -->
<?php do_action( 'fe_after_sidebar' ); ?>
