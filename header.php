

<?php 
	if(get_field('title')) {
		$title = get_field('title').' – '.bloginfo('name');
	} else {
		$title = get_the_title().' – '.bloginfo('name');´
	}
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php echo $title;?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/favicon.ico" rel="shortcut icon">
		<link href="/wp-content/uploads/2021/05/richtershof-small.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php the_field('description') ?>" />

		<?php wp_head(); ?>
		

	</head>
	<body <?php body_class(); ?>>
	
		<!-- wrapper -->
		<div class="wrapper">
      <?php $icons=get_field('iconsbar','option')?>
			<!-- header -->
			<header id='header' class="header clear top" role="banner">
          <div class='icon-bar'>
						<?php if($icons) {
                            foreach ($icons as $icon) {?>
							<a href='<?php echo $icon['link']['url']?>'><img src='<?php echo $icon['icon']?>'/></a>
						<?php }
                        }?>
					</div>
					<a href="/"  class='icon'>
                          <img src='<?php echo the_field('logo_small','option')?>'/>
					</a>
				  <div class='header-menu-bar' >
						<a href='<?php echo get_field('kontaktlink','option')?>'>KONTAKT</a>
						<a href='<?php echo get_field('buchen','option')?>'>BUCHEN</a>
						<div id="weglot_here"></div>
						<div id='header-burger'></div>
					</div>
					
			</header>
			<div id="menu">
			   <div id='header-burger-close'></div>
         		<?php wp_nav_menu( array( 'menu' => 'whr-menu') ); ?>
      </div>
			<!-- /header -->


<div class='booking-bar'>
   <div class='booking-calendar'>
         <input type="text" id="start-text-calendar" class="calendar" ></input>
         <div class='start-date-container'>
                  <div class='label'>Ankunft</div>
                  <div id='start-date'></div>
         </div>
         <div>
                 <div class='label'>Abreise</div>
                 <div id='end-date'></div>
        </div>
   </div>
   <div class='booking'>
      <div class='gast'>Gäste</div>
      <select name="gast" id="gast">
        <?php for($i=1;$i<10;$i++){?>
        <option <?php if($i == 2) {echo 'selected="selected"';}?> value="<?php echo $i?>"><?php echo $i?></option>
        <?php }?>
     </select>
  </div>
  <div class='button-group'> 
     <div class='whr-button' id='find-room'>ZIMMER FINDEN</div>
     <a href="/kontakt" class='whr-button' id='table-booking'>TISCH RESERVIEREN</a>
  </div>
</div>