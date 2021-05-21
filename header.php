<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>
		

	</head>
	<body <?php body_class(); ?>>
	
		<!-- wrapper -->
		<div class="wrapper">
      <?php $icons=get_field('iconsbar','option')?>
			<!-- header -->
			<header id='header' class="header clear top" role="banner">
          <div class='icon-bar'>
						<?php foreach($icons as $icon){?>
							<a href='<?php echo $icon['link']['url']?>'><img src='<?php echo $icon['icon']?>'/></a>
						<?php }?>
					</div>
					<div  class='icon'>
                                           <img src='<?php echo the_field('logo_small','option')?>'/>
					</div>
				  <div class='header-menu-bar' >
						<a href='<?php echo get_field('kontakt','option')?>'>KONTAKT</a>
						<a href='<?php echo get_field('buchen','option')?>'>BUCHEN</a>
						<a href='#'>DE</a>
						<div id='header-burger'></div>
					</div>
					
			</header>
			<div id="menu">
			   <div id='header-burger-close'></div>
         <?php wp_nav_menu( array( 'whr-menu' => 'whr-menu') ); ?>
      </div>
			<!-- /header -->
