<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta content="description" name="Webbshop"/>
	<title>Webbshop</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/style.css'; ?>"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri() . 'js/responsiveslides.js';?>"></script>
	<link href="<?php echo get_template_directory_uri() . '/css/responsiveslides.css';?>" type="text/css" rel="stylesheet"/>
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
				<h1>Title of the Website</h1>
			</a>
			<nav>
				<ul>
					<li>
						<a href="<?php echo get_template_directory_uri() . '/productspage.php';?>">Photo</a>
					</li>
					<li>
						<a href="<?php echo get_template_directory_uri() . '/productspage.php';?>">Graphic</a>
					</li>
					<li>
						<a href="<?php echo get_template_directory_uri() . '/productspage.php';?>">Typography</a>
					</li>
					<li>
						<a href="<?php echo get_template_directory_uri() . '/productspage.php';?>">Fashion</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>