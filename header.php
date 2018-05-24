<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package levator
 */

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		
		
		<?php
			$favicon_uploader = get_field('favicon_uploader','option' );
			if($favicon_uploader): ?>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon_uploader['url']; ?>" />
		<?php endif; ?>
		
		
		<style type="text/css"> 
		
			
		</style>
	
		<?php wp_head(); ?>
    </head>
    <body  <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
      <header>  
		<nav class="navbar navbar-expand-lg navbar-light header-top-fixed">
		  <div class="container middle-area"> 
		  
			<?php
			$logo_upload = get_field('logo_upload','option' );
			if($logo_upload): ?>
			<a class="navbar-brand normal-logo" href="<?php echo home_url(); ?>"><img src="<?php echo $logo_upload['url']; ?>" alt="<?php echo $logo_upload['title']; ?>" /></a>
			<?php endif; ?>
			
			<?php $light_logo = get_field('light_logo','option' );
			if($light_logo): ?>
			<a class="navbar-brand shrink-logo" href="<?php echo home_url(); ?>"><img src="<?php echo $light_logo['url']; ?>" alt="<?php echo $light_logo['title']; ?>" /></a>
			<?php endif; ?>
			
			
			
			<div class="toogle-button"> 
				<a class="navbar-toggler" href="#navbarSupportedContent" id="toggle" data-toggle="collapse" ><span></span></a>
			</div>
			
			
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		  
		  <?php wp_nav_menu([
			'theme_location'	=> 'main-menu',
			'menu_class'		=> 'navbar-nav',
			'fallback_cb'		=> 'default_menu',
		  ]); ?>
		  
		  </div>
		  </div>
		</nav>
	   </header>