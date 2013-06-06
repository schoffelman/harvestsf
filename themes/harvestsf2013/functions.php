<?php

// This theme uses wp_nav_menu() in one location.
register_nav_menu( 'Main Navigation', __( 'Main Navigation', 'harvestsf' ) );



/**
 * Registers our main widget area and the front page widget areas.
 *
 */
function harvestsf_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Overview Sidebar', 'harvestsf' ),
        'id' => 'overview-sidebar',
        'description' => __( 'Appears on the homepage banner section', 'harvestsf' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    
    register_sidebar( array(
        'name' => __( 'Event Sidebar', 'harvestsf' ),
        'id' => 'event-sidebar',
        'description' => __( 'Appears on the homepage right sidebar', 'harvestsf' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'First Front Page Widget Area', 'harvestsf' ),
        'id' => 'sidebar-1',
        'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'harvestsf' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Second Front Page Widget Area', 'harvestsf' ),
        'id' => 'sidebar-2',
        'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'harvestsf' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}


add_action( 'widgets_init', 'harvestsf_widgets_init' );