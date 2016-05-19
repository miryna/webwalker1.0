<?php
/**
 * The Header 
 * 
 * webwalker 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<title><?php wp_title(' '); ?> <?php if(wp_title(' ', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all">

<?php wp_head(); ?>
</head>

<body>
	<div id="container">

<!--		header		-->
	<header id="header">
	
		<div id="top-menus">
			<nav class="lmenu">
		<?php wp_nav_menu( array( 'theme_location' => 'top_left',   
		  'container' => 'nav',   
		  'container_class' => 'lmenu', )  ); ?>  
			</nav>
			<nav class="lamenu">
		<?php wp_nav_menu( array( 'theme_location' => 'top_left_a',   
      'container' => 'nav',   
      'container_class' => 'lamenu', )  ); ?>  			
			</nav>
			<nav class="gmenu">
		<?php wp_nav_menu( array( 'theme_location' => 'top_right',   
		  'container' => 'nav',   
		  'container_class' => 'gmenu', )  ); ?>  				
			</nav>			
		</div>
		
		<div class="ls">		
			<div id="logo">
				<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Companyname"></a>
			</div>
			<div class="search">
				<form id="searchform" action="<?php bloginfo('home'); ?>" method="get">
					<input id="s" type="text" name="s" value="">
					<button id="searchsubmit" type="submit" value="Search"><span>Search</span></button>
				</form>	
			<div class="s-links">			
				<ul>
					<li><a href="#">Search 1</a></li>
					<li><a href="#">Search 2</a></li>
				</ul>
			</div>
			</div>
		</div>
		
		<div id="main-menus">
			<nav class="mmenu">
		<?php wp_nav_menu( array( 'theme_location' => 'main',   
			  'container' => 'nav',   
			  'container_class' => 'mmenu', )  ); ?>  		
			</nav>
		</div>	
		
	</header>
