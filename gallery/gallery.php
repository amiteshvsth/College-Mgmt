<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>filterable gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>	
</head>
<body>
	<nav class="navbar">
		<div class="content">
		  <div class="logo">
			<a href="#">St. Paul's sr. sec. School, Aburoad</a>
		  </div>
		  <ul class="menu-list">
			<div class="icon cancel-btn">
			  <i class="fas fa-times"></i>
			</div>
			<li><a href="../index.html">Home</a></li>
			<li><a href="../index.html">Services</a></li>
			<li><a href="../index.html">Courses</a></li>
			<li><a href="../about us/about.html">About us</a></li>
			<li><a href="../contact-page-html-css-master/index.html">Contact us</a></li>
		  </ul>
		  <div class="icon menu-btn">
			<i class="fas fa-bars"></i>
		  </div>
		</div>
	  </nav>
<section class="gallery">
	<div class="title">
		<h1>Gallery</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="gallery-filter">
				<span class="filter-item active" data-filter="all">All</span>
				<span class="filter-item" data-filter="sports">Sports</span>
				<span class="filter-item" data-filter="Culture Activity">Culture Activity</span>
				<span class="filter-item" data-filter="Other">other</span>
			</div>
		</div>
		<div class="row">
			<!-- gallery item start -->
			<div class="gallery-item All">
				<div class="gallery-item-inner">
					<img src="img/b.jpg" alt="All">
				</div>
			</div>
			<!-- gallery item end -->
			<!-- gallery item start -->
			<div class="gallery-item sports">
				<div class="gallery-item-inner">
					<img src="img/b.jpg" alt="sports">
				</div>
			</div>
			<!-- gallery item end -->
			<!-- gallery item start -->
			<div class="gallery-item Cultural Activity">
				<div class="gallery-item-inner">
					<img src="img/camera-1.jpg" alt="Culture Activity">
				</div>
			</div>
			<!-- gallery item end -->
			<!-- gallery item start -->
			<div class="gallery-item sports">
				<div class="gallery-item-inner">
					<img src="img/headphone-2.jpg" alt="sports">
				</div>
			</div>
			<!-- gallery item end -->
			<!-- gallery item start -->
			<div class="gallery-item Culture Activity">
				<div class="gallery-item-inner">
					<img src="img/camera-2.jpg" alt="Culture Activity">
				</div>
			</div>
			<!-- gallery item end -->
			<!-- gallery item start -->
			<div class="gallery-item Sports">
				<div class="gallery-item-inner">
					<img src="img/headphone-3.jpg" alt="sports">
				</div>
			</div>
			<!-- gallery item end -->
		</div>
	</div>
</section>
<script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
      navbar.classList.add("show");
      menuBtn.classList.add("hide");
      body.classList.add("disabled");
    }
    cancelBtn.onclick = ()=>{
      body.classList.remove("disabled");
      navbar.classList.remove("show");
      menuBtn.classList.remove("hide");
    }
    window.onscroll = ()=>{
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
  </script>

<script src="js/script.js"></script>
<footer>
    <p>Copyright &copy; <script>document.write(new Date().getfullyear());</script>, 2021 by Sakshi Pal</p>
  </footer>
</body>
</html>
