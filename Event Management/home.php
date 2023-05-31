<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
      <a href="gallery.php">Gallery</a>
      <a href="other.php">Other Services </a>

   </nav>

</head>
<body>
   
<div class="container">

<!-- <?php @include 'header.php'; ?> -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">
         <link rel="stylesheet" href="css/style.css">

         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <h3>plan your Event!</h3>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, obcaecati quos. Minima eius qui id quas atque corporis, quia nulla.</p>
               <a href="about.php" class="btn">discover more</a>
            </div>
         </div>

         

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="services">

   <h1 class="heading">Our Services</h1>
   <!-- <div class="services-container"></div>

   <div class="swiper service-slider">

      <div class="swiper-wrapper"> -->
         
   <div class="services-container">


         <a href="images/service-1.jpg" class="box">
            <div class="image">
               <img src="images/service-1.jpg" alt="">
            </div>
            <h2>photography</h2>
               
               <a href="videography.php" class="btn">Explore more</a>
         </a> 
         
          <a href="images/service-2.jpg" class="box">
            <div class="image">
               <img src="images/service-2.jpg" alt="">
            </div>
            <h2>Event Registory</h2>
          
            <a href="contact.php" class="btn">Contact</a>
         </a>
   
         <a href="images/service-3.jpg" class="box">
            <div class="image">
               <img src="images/service-3.jpg" alt="">
            </div>
            <h2>Guest List</h2>
             
               <a href="about.php" class="btn">Explore</a>
         </a> 
   
          <a href="images/service-4.jpg" class="box">
            <div class="image">
               <img src="images/service-4.jpg" alt="">
            </div>
            <h2><b>Fine Dining</b></h2>
            
            <a href="catering.php" class="btn">Explore</a>
         </a>
   
         <a href="images/service-5.jpg" class="box">
            <div class="image">
               <img src="images/service-5.jpg" alt="">
            </div>
            <h2>Event Program</h2>
           
            <a href="catering.php" class="btn">Explore</a>
         </a>
   
         <a href="images/service-6.jpg" class="box">
            <div class="image">
               <img src="images/service-6.jpg" alt="">
            </div>
            <h2>Event sets</h2>
           
            <a href="about.php" class="btn">Explore</a>
         </a> 
         
     


   </div>
</div>

</section>

            

<!-- <?php @include 'footer.php'; ?> -->

</div> 
 <section class="footer">

   <div class="box-container">

      <div class="box">
         <link rel="stylesheet" href="css/style.css">
         
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="portfolio.php"> <i class="fas fa-angle-right"></i> Portfolio</a>
         <a href="pricing.php"> <i class="fas fa-angle-right"></i> Pricing</a>
         <a href="contact.php"> <i class="fas fa-angle-right"></i> Contact</a>
         <a href="gallery.php"> <i class="fas fa-angle-right"></i> Gallery</a>
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
         <a href="#"> <i class="fas fa-map"></i> Rajathan,sitapura - 302022 </a>
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
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

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
   margin-left: 650px;
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
     /* h3{
      font-size: 20px;
      color: black;
      margin-left: 500px;
   } 
    .services-container p{
      font-size: 15px;
      color: black;
      margin-left: 380px;
   } 
   .services .image{
      margin-left: 410px;
   }
    .services .btn{
      margin-left: 500px;
   }   */
   
    h2{
      font-size: 30px;
      color: black;
      margin-left: 480px;
    } 
    .services .image{
      margin-left: 410px;
   }
    .services .btn{
      margin-left: 500px;
      margin-bottom: 8px;
   }
   


</style>
