	<?php require "koneksi.php" ?>
	<?php require "views/temp/header.php" ?>

	<link rel="stylesheet" type="text/css" href="assets/css/pages/blog.style.css">	
	
	<!-- blog -->
	<div id="blog">
		<div>BLOG</div>
		<main>			
			<input type="text" name="" placeholder="Search blog">
			<div class="search-btn"><i class="fas fa-search"></i></div>
			<span style="font-size: 12px;float: right; font-weight: bold;">12 FOUND</span>
			<h2>*Newest</h2>
			<section class="blog">
				<div id="blog-container">
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
					<div class="card">
						<img src="assets/img/blogs/blog1.jpg">	
						<div class="text-blog">
							<h2>The Best Fashion Instagram of the Week: Lizzo, Rosalina, and Bella Hadid</h2>		
							<p>Get out of those sweatpants and change out of that t-shirt! We should all be taking the cue.</p>
							<div class="seemoreblog" onclick="document.location.href='detail-blog.php'">See more</div>
						</div>											
					</div>
				</div>
			</section>
			<h2>*Most viewed</h2>			
			<section class="blog">
				<div id="blog-container">
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
				</div>
			</section>
			<a href="#" id="viewMore">View more</a>
		</main>
	</div>
	<!-- end blog -->

	<?php require "views/temp/footer.php" ?>	
