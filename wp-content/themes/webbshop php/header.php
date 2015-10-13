<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta content="description" name="Webbshop"/>
	<title><?php echo is_front_page() ? bloginfo('name') : wp_title() ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div id="headercontent">
			<div id="searchandshop">
				<input type="text" name="search"/>
				<br>
				<img src="<?php echo get_template_directory_uri() . '/img/cart.png';?>"/>
			</div>
			<a href="<?php echo get_template_directory_uri() . 'index.html';?>">
				<h1><a href="<?php echo home_url(); ?>">Title of the Website</a></h1>
			</a>
			<?php wp_nav_menu( array(
				'theme_location' => 'main_menu',
				'container' => 'nav'
			) ); ?>
		</div>
	</header>
	<section id="main">