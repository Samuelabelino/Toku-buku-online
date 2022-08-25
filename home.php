<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<section class="header">
   <a href="home.php" class="logo">Toko Buku.</a>
   <ul>
   <nav class="navbar">
      <li><a href="home.php">home</a></li>
      <li><a href="about.php">about</a></li>
      <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">product</a>
            <div class="dropdown-content">
                <a href="novel.php">Novel</a>
                <a href="#">Encyclopedia</a>
                <a href="#">Comic</a>
            </div>
        </li>

      <li><a href="logout.php">logout</a></li>
   </nav>
</ul>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>


<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/slide2.jpg) no-repeat">
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



<section class="home-about">

   <div class="image">
      <img src="images/about.jpg" alt="">
   </div>

   <div class="content">
      <h3>about</h3>
      <p>Web ini  bertujuan untuk menampilkan dan menjual produk-produk buku secara umum </p>
      <a href="about.php" class="btn">Lebih banyak</a>
   </div>

</section>


<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="produk.php"> <i class="fas fa-angle-right"></i> product</a>
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




<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>