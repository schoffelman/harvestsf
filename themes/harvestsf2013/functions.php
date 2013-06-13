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
        'name' => __( 'Int Events Sidebar', 'harvestsf' ),
        'id' => 'int-events-sidebar',
        'description' => __( 'Appears on the interior event pages. Also used as the default sidebar.', 'harvestsf' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Int About Sidebar', 'harvestsf' ),
        'id' => 'int-about-sidebar',
        'description' => __( 'Appears on the interior about pages', 'harvestsf' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Int Worship Sidebar', 'harvestsf' ),
        'id' => 'int-worship-sidebar',
        'description' => __( 'Appears on the interior worship pages', 'harvestsf' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Int Serve Sidebar', 'harvestsf' ),
        'id' => 'int-serve-sidebar',
        'description' => __( 'Appears on the interior serve pages', 'harvestsf' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}


add_action( 'widgets_init', 'harvestsf_widgets_init' );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( '300', '198' );
add_image_size( 'slider', '620', '600' );
add_image_size( 'full-view', '620', '400' );

