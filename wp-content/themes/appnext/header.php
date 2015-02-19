<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="icon" type="image/x-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/files/favicon.ico" />
	<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;
	wp_title( '|', true, 'right' );
	// Add the blog name.
	bloginfo( 'name' );
	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	?></title>

	<!--[if lt IE 8]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js" type="text/javascript"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js" type="text/javascript"></script>
	<![endif]-->

    <!--SCRIPTS-->

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/files/core.js"></script>

    <!--FONTS-->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/files/css" rel="stylesheet" type="text/css">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/files/css(1)" rel="stylesheet" type="text/css">
	<script async="true" type="text/javascript" src="http://a.adroll.com/j/roundtrip.js"></script>

</head>
<body onload="start();" cz-shortcut-listen="true">
<?php wp_head(); ?>