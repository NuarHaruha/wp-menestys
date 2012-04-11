<?php
/**
 * Template header
 * 
 * @package WordPress
 * @subpackage mt-bizslide
 * @copyright nuarharuha <nhnoah+mt-bizslide@gmail.com>
 * ================================================================
 * SVN revision information:
 * @version $Revision$:
 * @author  $Author$:
 * @date    $Date$:
 * ================================================================
 * @category template
 * @since 0.1
 */
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

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

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />  
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />    
  <meta name="description" content="<?php echo get_bloginfo( 'description', 'display' );?>">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
  <link rel="icon" type="image/png" href="<?php echo mt_get_public_uri('favicon.png','img'); ?>">
  <link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" href="<?php mt_public_uri('12_col.css','css'); ?>" />
  <link rel="stylesheet" href="<?php mt_public_uri('general.css','css'); ?>" />

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="<?php echo mt_get_public_uri('modernizr-2.5.3.min.js','js/libs'); ?>"></script>
<?php wp_head(); ?>  
</head>
<body <?php body_class(); ?>>
<div class="cwrap">
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>
  <div class="container_12">  
    <hgroup>
        <h1><a href="#" title="<?php __e(get_bloginfo('name','display')); ?>"><?php __e(get_bloginfo('name')); ?></a></h1>
        <h2><?php echo get_bloginfo( 'description', 'display' );?></h2>
    </hgroup>  
    <nav class="clearfix">
        <ul class="clearfix">
            <li class="first"><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/Projects">Projects</a></li>
            <li class="last"><a href="/contact-us">Contact Us</a></li>
        </ul>
    </nav>
   </div> 
   <div class="clear"></div>
  </header>
  <div class="clear"></div>