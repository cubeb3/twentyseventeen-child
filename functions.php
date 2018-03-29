<?php
function my_theme_enqueue_styles() {

    $parent_style = 'twentyseventeen'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
		//brings the parent theme style
    wp_enqueue_style('twentyseventeen', get_template_directory_uri() . '/style.css' );

		//bring the child theme styles
		wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
