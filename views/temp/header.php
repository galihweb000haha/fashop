<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FA-SHOP</title>
	<link rel="stylesheet" type="text/css" href="assets/font/fontawesome-free/css/all.min.css">	
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">	

	<link rel="stylesheet" type="text/css" href="assets/css/temp/main.css">		
	<link rel="stylesheet" type="text/css" href="assets/css/temp/header.css">
	<link rel="stylesheet" type="text/css" href="assets/css/temp/footer.css">

</head>
<body>
	<header id="header">
		<div class="head-left">
			<h2 onclick=document.location.href='index.php' id="sitename"><i class="fas fa-shopping-cart"></i>&nbsp;Fa-SHop</h2>
			<ul>
				<li><a id="shopMenu">Shop&nbsp;&nbsp;<i class="fas fa-caret-down"></i></a></li>
				<li><a href="about.php">Pages&nbsp;&nbsp;<i class="fas fa-caret-down"></i></a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>	
		</div>
		<div class="head-right" id="head-right">
			<ul id="link-right">
				<li onclick="document.location.href='checkout.php'"><a href="#"><i class="fas fa-shopping-cart"></i><span> Cart</span></a></li>
				<li id="login-toggle"><a href="#"><i class="fas fa-user"></i><span> login</span></a></li>
			</ul>				
			<div class="menu" id="menu"><i class="fas fa-bars"></i></div>
		</div>		
	</header>
	<div id="dropDown-shop">
		<div id="women-shop">
			<ul>
				<li>Women's Collection</li>
				<li>Dresses</li>
				<li>Bloueses & Shirts</li>
				<li>T-Shirts</li>
				<li>Rompers</li>
				<li>Bras & Panties</li>
			</ul>
		</div>
		<div id="men-shop">
			<ul>
				<li>Men's Collection</li>
				<li>T-Shirts</li>
				<li>Polo</li>
				<li>Shirts</li>
				<li>Jackets</li>
				<li>Trench</li>
			</ul>
		</div>
		<div id="kid-shop">
			<ul>
				<li>Kid's Collection</li>
				<li>Dresses</li>
				<li>Shirts</li>
				<li>T-Shirts</li>
				<li>Jackets</li>
				<li>Trench</li>
			</ul>
		</div>
		<div id="img-shop">
			<div>
				<img src="assets/img/categories/bg-4.jpg">				
			</div>
		</div>
	</div>

	<!-- sidebar -->
	<div class="sidebar" id="sidebar">
		<div id="sidebar-head">
			<h2 onclick=document.location.href='index.php' id="sitename"><i class="fas fa-shopping-cart"></i>&nbsp;Fa-SHop</h2>
			<span id="close-sidebar"><i class="fas fa-times"></i></span>			
		</div>
		<div id="sidebar-body">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="#" id="login-toggle">Login</a></li>
			</ul>			
		</div>
	</div>
	<!-- end sidebar -->