<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>portfolio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="portfolio.php">Portfolio</a>
      <a href="pricing.php">Pricing</a>
      <a href="contact.php">Contact</a>
   </nav>

</head>
<body>
   
<div class="container">

<!-- <?php @include 'header.php'; ?> -->

<section class="portfolio">

   <h1 class="heading">our portfolio</h1>

   <div class="portfolio-container">

      <a href="images/port-img-1.jpg" class="box">
         <div class="image">
            <img src="images/port-img-1.jpg" alt="">
         </div>
         <h3>Event ceremony</h3>
      </a>

      <a href="images/port-img-2.jpg" class="box">
         <div class="image">
            <img src="images/port-img-2.jpg" alt="">
         </div>
         <h3>Event ceremony</h3>
      </a>

      <a href="images/port-img-3.jpg" class="box">
         <div class="image">
            <img src="images/port-img-3.jpg" alt="">
         </div>
         <h3>Event ceremony</h3>
      </a>

      <a href="images/port-img-4.jpg" class="box">
         <div class="image">
            <img src="images/port-img-4.jpg" alt="">
         </div>
         <h3>Event ceremony</h3>
      </a>

      <a href="images/port-img-5.jpg" class="box">
         <div class="image">
            <img src="images/port-img-5.jpg" alt="">
         </div>
         <h3>event ceremony</h3>
      </a>

      <a href="images/port-img-6.jpg" class="box">
         <div class="image">
            <img src="images/port-img-6.jpg" alt="">
         </div>
         <h3>event ceremony</h3>
      </a>

   </div>

</section>

<!-- <?php @include 'footer.php'; ?> -->

</div>
<section class="footer">

   <div class="box-container">

      <div class="box">
         <link rel="stylesheet" href="css/style.css">
         
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="portfolio.php"> <i class="fas fa-angle-right"></i> portfolio</a>
         <a href="pricing.php"> <i class="fas fa-angle-right"></i> pricing</a>
         <a href="contact.php"> <i class="fas fa-angle-right"></i> contact</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> plan event</a>
         <a href="#"> <i class="fas fa-angle-right"></i> our services</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> Chirag@gmail.com </a>
         <a href="#"> <i class="fas fa-envelope"></i> Deepak@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Rajathan,sitapura - 302022  </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="#"> <i class="fab fa-github"></i> github </a>
      </div>

   </div>

   
</section>
















<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

   lightGallery(document.querySelector('.portfolio .portfolio-container'));

</script>

</body>
</html>
<style>
   .navbar{
    display: flex;
    align-items: center;
    position: relative;
    color: rgb(12, 12, 12);
      display: block;
      padding: 3px 22px;
      border-radius: 20px;
      margin-left: 900px;
      margin-top: 10px;
      
      
        font-size: 1.7rem;

}
.navbar  a{
     
     
      padding: 3px 22px;
      border-radius: 20px;
    
    }
.navbar  a:hover{
       color: rgb(160, 44, 44);
       background-color: white;
      }


</style>