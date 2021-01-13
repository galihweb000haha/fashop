	<?php require "views/temp/header.php" ?>
	<?php 
	if (isset($_GET['error'])){
		echo "<script>alert('Username atau Password Salah!')</script>";
		echo "<script>document.location.href='index.php'</script>";
	}else{
		$result1 = mysqli_query(
			$mysqli, 
			"SELECT barang.*, barang.id AS id_barang, brand.* FROM barang
			JOIN brand ON brand.id = barang.brand
			ORDER BY barang.id DESC"
		);
		$result2 = mysqli_query(
			$mysqli, 
			"SELECT barang.*, barang.id AS id_barang, brand.* FROM barang
			JOIN brand ON brand.id = barang.brand
			ORDER BY barang.id ASC"
		);	

	}
	if(isset($_GET['feedback'])){
		echo "<script>alert('Selamat Berbelanja!')</script>";
	}

	
	if(isset($_GET['id'])){		
		setcookie('id'.(count($_COOKIE)-1), $_GET['id'], time()+3600);

		echo "<script>alert('Barang telah ditambahkan!')</script>";
		echo "<script>document.location.href='index.php'</script>";		

	}
	
	?>
	<link rel="stylesheet" type="text/css" href="assets/css/pages/index.style.css">	

	<!-- banner -->
	<div id="banner">
		<div>
			<div class="wrapper">
				<div>
					<center><h1 style="margin-bottom: 10px;">SHOP TILL YOU DIE</h1></center>
					<p>Currently FA-SHOP is the best online shopping site in the world after Shopee and Tokopedia.
						 Let's support us by continuing enjoy our service and sending comments and suggestions.</p>
					<div>
						<div id="mainButton1"><a href="blog.php" style="color: #ddd; text-decoration: none;">VIEW BLOG</a></div>
						<div id="mainButton2"><a href="#list-product" style="color: #ddd; text-decoration: none;">VIEW COLLECTIONS</a></div>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end banner -->

	<!-- categories -->
	<div id="categories-img">		
		<div id="categoriesImg1">
			<div>
				<p>CLOTHING</p>				
				<span class="left-corner-categories">Items <span id="count-items-1"></span></span>
				<span class="right-corner-categories" style="cursor: pointer;" onclick="document.location.href='detail-categories.php'">Views</span>
			</div>
		</div>
		<div id="categoriesImg2">
			<div>
				<p>SHOES</p>
				<span class="left-corner-categories">Items <span id="count-items-2"></span></span>
				<span class="right-corner-categories" style="cursor: pointer;" onclick="document.location.href='detail-categories.php'">Views</span>
			</div>
		</div>
		<div id="categoriesImg3">
			<div>
				<p>ACCESSORIES</p>
				<span class="left-corner-categories">Items <span id="count-items-3"></span></span>
				<span class="right-corner-categories" style="cursor: pointer;" onclick="document.location.href='detail-categories.php'">Views</span>
			</div>
		</div>
	</div>
	<!-- end categories -->
	<!-- promo -->
	<div class="ads">
		<div>
			<h5>FA-SHOP.COM</h5>
			<h1>FIND THE BEST PRICE HERE !</h1>
			<div>Let's Shop</div>
		</div>
	</div>
	<!-- end promo -->

	<!-- content -->
	<div class="container" id="list-product">
		<!-- product -->
		<main>
			<center><h1 style="margin-bottom: 50px;">Popular Products</h1></center>
			<input type="text" name="" placeholder="Search product">
			<div class="search-btn"><i class="fas fa-search"></i></div>
			<span style="font-size: 12px;float: right; font-weight: bold;">12 PRODUCTS FOUND</span>
			<section>			
			<?php while ($res = mysqli_fetch_array($result1)) : ?>
				<div class="product">
					<img src="upload/products/<?=$res['gambar']?>">
					<div class="desc">
						<span class="brand-name"><?=$res['brand']?></span>						
						<h4><u><a href="detail-product.php"><?=$res['nama']?></a></u></h4>
						<span class="price"><i><?=$res['harga']?></i></span>
						<a href="index.php?id=<?=$res['id_barang']?>"><div class="button-buy">ADD TO CART</div></a>
					</div>				
				</div>
			<?php endwhile; ?>						
			</section>
			<section>
			<?php while ($res = mysqli_fetch_array($result2)) : ?>
					<div class="product">
					<img src="upload/products/<?=$res['gambar']?>">
					<div class="desc">
						<span class="brand-name"><?=$res['brand']?></span>						
						<h4><u><a href="detail-product.php"><?=$res['nama']?></a></u></h4>
						<span class="price"><i><?=$res['harga']?></i></span>
						<div class="button-buy">ADD TO CART</div>
					</div>				
				</div>
			<?php endwhile; ?>		
			</section>
			<section class="hidden" id="sectionHide">
				<div class="product">
					<img src="assets/img/products/product-1.png">
					<div class="desc">
						<span class="brand-name">ZARA</span>						
						<h4><u><a href="detail-product.php">Seven Peaks Mens Jacket & Handsome Men</a></u></h4>
						<span class="price"><i>Rp.170.000,00</i></span>
						<div class="button-buy">ADD TO CART</div>
					</div>				
				</div>
				<div class="product">
					<img src="assets/img/products/product-2.png">
					<div class="desc">
						<span class="brand-name">RIVER ISLAND</span>						
						<h4><u><a href="detail-product.php">Thatcher Oxford Shirt With The Smilling Father</a></u></h4>
						<span class="price"><i>Rp.249.900,00</i></span>
						<div class="button-buy">ADD TO CART</div>
					</div>					
				</div>
				<div class="product">
					<img src="assets/img/products/product-3.png">
					<div class="desc">
						<span class="brand-name">MANGO</span>						
						<h4><u><a href="detail-product.php">Double Breasted Coat In Navy Wool & Cashmere Blend by</a></u></h4>
						<span class="price"><i>Rp.165.000,00</i></span>
						<div class="button-buy">ADD TO CART</div>
					</div>	
				</div>
				<div class="product">
					<img src="assets/img/products/product-4.jpg">
					<div class="desc">
						<span class="brand-name">MANGO</span>						
						<h4><u><a href="detail-product.php">Women's Notched Lapel Double Breasted Long Trench</a></u></h4>
						<span class="price"><i>Rp.369.900,00</i></span>
						<div class="button-buy">ADD TO CART</div>
					</div>	
				</div>		
			</section>
			<a href="#" id="viewMore">View more</a>

		</main>
		<!-- end product -->

		<!-- blog -->
		<aside>
			<h1>*Recent blogs</h1>			
			<input type="text" name="" placeholder="Search blog">
			<div class="search-btn"><i class="fas fa-search"></i></div>
			<div id="recent-blogs">
				<div class="card">
					<img src="assets/img/blogs/blog3.jpg">			
					<div class="text-blog">
						<h2>Karla Welch on Her New Sunset Inspired Capsule Collection</h2>						
						<p>Karla Welch always has another great project in the works. he stylist behind Justin Bieber.</p>
						<div class="seemoreblog" onclick="document.location.href='detail-blog.php'">See more</div>
					</div>
				</div>
				<div class="card">
					<img src="assets/img/blogs/blog1.jpg">	
					<div class="text-blog">
						<h2>The Best Fashion Instagram of the Week: Lizzo, Rosalina, and Bella Hadid</h2>		
						<p>Get out of those sweatpants and change out of that t-shirt! We should all be taking the cue.</p>
						<div class="seemoreblog" onclick="document.location.href='detail-blog.php'">See more</div>
					</div>											
				</div>
				<div class="card">
					<img src="assets/img/blogs/blog2.jpg">
					<div class="text-blog">
						<h2>Survival Struggle : Sonal Gaarodia, Founder, SPM Garments</h2>						
						<p>We offer artisan training for new karigars. We identify people with leadership skills</p>
						<div class="seemoreblog" onclick="document.location.href='detail-blog.php'">See more</div>
					</div>																
				</div>
			</div>	
			<a href="blog.php">Go to blog >></a>			
		</aside>	
		<!-- end blog -->
	</div>
	<!-- end content -->

	<?php require "views/temp/footer.php" ?>

