<!DOCTYPE html>
<html lang="en">
<head>
   	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Produk</title>
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/styleproduk.css">
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<section class="header">
   <a href="home.php" class="logo">Toko Buku.</a>
   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="produk.php">product</a>
      <a href="logout.php">logout</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/produk1.jpg) no-repeat">
            <div class="content">
               <h3>Toko Buku.</h3>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/slide3.jpg) no-repeat">
            <div class="content">
               <h3>Toko Buku.</h3>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>


	<!-- recomendasi -->
	<div class="rekomendasi">
		<h3>Novel</h3>
	</div>

	<!-- beli beli -->
	<div class='gambar'>
		<div class='foto'>
			<img src='images/buku1.jpg'>
			<h2>Harry Potter</h2>
			<p>Rp.250.999,00</p><br>
			<a href=''>Buy Now</a>
		</div>

	<div class='foto'>
			<img src='images/buku1.jpg'>
			<h2>Harry Potter</h2>
			<p>Rp.250.999,00</p><br>
			<a href=''>Buy Now</a>
		</div>

	<div class='foto'>
			<img src='images/buku1.jpg'>
			<h2>Harry Potter</h2>
			<p>Rp.250.999,00</p><br>
			<a href=''>Buy Now</a>
		</div>

	<div class='foto'>
			<img src='images/buku1.jpg'>
			<h2>Harry Potter</h2>
			<p>Rp.250.999,00</p><br>
			<a href=''>Buy Now</a>
		</div>

	<div class='foto'>
			<img src='images/buku1.jpg'>
			<h2>Harry Potter</h2>
			<p>Rp.250.999,00</p><br>
			<a href=''>Buy Now</a>
		</div>

	<div class='foto'>
			<img src='images/buku1.jpg'>
			<h2>Harry Potter</h2>
			<p>Rp.250.999,00</p><br>
			<a href=''>Buy Now</a>
		</div>

	<div class='foto'>
			<img src='images/buku1.jpg'>
			<h2>Harry Potter</h2>
			<p>Rp.250.999,00</p><br>
			<a href=''>Buy Now</a>
		</div>

	
	<div class='foto'>
		<img src='images/buku1.jpg'>
		<h2>Harry Potter</h2>
		<p>Rp.260.000,00</p><br>
		<a href=''>Buy Now</a>
		</div> <br><br><br><br><br><br>
	</div>


	<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="produk.php"> <i class="fas fa-angle-right"></i> produk</a>
         <a href="logout.php"> <i class="fas fa-angle-right"></i> logout</a>
      </div>


      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 (Admin 1) </a>
         <a href="#"> <i class="fas fa-phone"></i> +321-654-0987 (Admin 2) </a>
         <a href="#"> <i class="fas fa-envelope"></i> TokoBuku@gmail.com </a>
      </div>

      <div class="box">
         <h3>social media</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> TokoBuku </a>
         <a href="#"> <i class="fab fa-twitter"></i> TokoBuku </a>
         <a href="#"> <i class="fab fa-instagram"></i> TokoBuku. </a>
         <a href="#"> <i class="fab fa-linkedin"></i> TokoBuku. </a>
      </div>

   </div>

</section>


	<script type="text/javascript">
		$(document).ready(function() {
			$(".bg-loader").hide();
		})
	</script>
	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>