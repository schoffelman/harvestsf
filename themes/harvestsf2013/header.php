<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
    	bloginfo('name'); 
    	if (get_the_title() && !is_home()){	
    		echo(' | ');
    		wp_title( '', true, 'right' ); 
    	}
    ?></title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/webfonts.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/normalize.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-2.3.2.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-responsive-2.3.2.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"><\/script>')</script>
	
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/assets/js/ZeroClipboard.js"></script>
	<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/assets/js/googlemapscolorizr.js"></script>

    <?php wp_head(); ?>
    
    <script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "e66cc4c6-5267-408b-a467-e17f619e0353", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>

</head>
<body <?php body_class(); ?>>
<div id="wrapper">
    <div id="banner-wrapper">
        <div class="wrapper">
            <div class="banner <?php echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent ); ?>"></div>
        </div>
    </div>
    <div class="container">
        <header>
            <hgroup id="util_nav">
                <div class="sunday">Sunday Worship @ 10:30AM</div>
                <div class="divide">//</div>
                <div class="wednesday">Wednesday Youth @ 7PM</div>
                <div class="divide">//</div>
                <div class="social"><div class="follow">Follow Us: </div><a href="http://facebook.com/harvestsf" title="Facebook" class="fb" target="_blank"><div class="text">Facebook</div></a><a href="http://twitter.com/harvestsf" title="Twitter" class="tw" target="_blank"><div class="text">Twitter</div></a></div>
            </hgroup>
            <nav id="main_nav">
                <h2><a href="/" title="<?php _e( "Harvest Church", 'harvestsf' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/harvest-church-logo.png" alt="<?php _e( "Harvest Church", 'harvestsf' ); ?>"></span></a></h2>
                <?php wp_nav_menu( array( 'theme_location' => 'Main Navigation', 'menu_class' => 'nav-menu' ) ); ?>
            </nav>