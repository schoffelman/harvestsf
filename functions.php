<?php

// This theme uses wp_nav_menu() in one location.
register_nav_menu( 'Main Navigation', __( 'Main Navigation', 'blended' ) );



/**
 * Registers our main widget area and the front page widget areas.
 *
 */
function blended_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Overview Sidebar', 'blended' ),
        'id' => 'overview-sidebar',
        'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'blended' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'First Front Page Widget Area', 'blended' ),
        'id' => 'sidebar-2',
        'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'blended' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Second Front Page Widget Area', 'blended' ),
        'id' => 'sidebar-3',
        'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'blended' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}


add_action( 'widgets_init', 'blended_widgets_init' );