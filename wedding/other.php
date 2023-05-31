<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>other</title>

    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
    
</head>
<style>
    .card-img-top{
        height: 300px !important;
        
    }
    .col{
        
        height: 500px;
        width: 400px;
        /* margin: 60px; */
        margin-left:80px !important;
        margin-right: 80px !important;
        margin-top: 50px;
        margin-bottom:20px;
        border: 1px solid rgb(245, 199, 199);
        border-radius: 10px !important;
       
    }
    .card{
        background-color: rgba(247, 100, 196, 0.459);
        color: white;
        
        font-family: Arial, Helvetica, sans-serif;
      
    }
    .card-title{
     color: black !;
    }
    body{
        background-image: url(images/background-img.png);
       
    }
    .btn{
        color: white;
    }
    
    .navbar{
    display: flex;
    align-items: center;
    position: relative;
    color: rgb(12, 12, 12);
    display: block;
    padding: 3px 22px;
    border-radius: 20px;
    margin-left: 800px;
    margin-top: 10px;
    font-size: 1.7rem;

}
.navbar  a{
    padding: 3px 22px;
    border-radius: 20px;
    text-decoration: none;
}
.navbar  a:hover{
       color: rgb(160, 44, 44);
       background-color: white;
      }

</style>

<body>
<nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="portfolio.php">Portfolio</a>
      <a href="pricing.php">Pricing</a>
      <a href="contact.php">Contact</a>
   </nav>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="https://kajabi-storefronts-production.kajabi-cdn.com/kajabi-storefronts-production/blogs/9346/images/0ckBlMsWShSlCo3RNeqt_catering.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title">Catering Services</h2>
              <p class="card-text">It's always better if the food choices are based on flavors, types, and presentation. So, choose the caterers who understand the pure taste and can serve your ...</p>
              <a href="catering.php"><button type="submit"  class="btn btn-outline-success" value="Explore more">Explore</button></a>
            </div>
            
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://cdn0.weddingwire.in/vendor/6063/3_2/960/jpg/23_15_166063.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title">Decoration</h2>
              <p class="card-text">Event décor is a powerful tool and you don't want your Event to be the one with the weird flowers. While you may not want to have a Event that is ...</p>
              <a href="decoration.php"><button type="submit" class="btn btn-outline-success" value="Explore">Explore</button></a>
            </div>
            
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://www.wfmt.com/cdn-cgi/image/quality=80,format=auto,onerror=redirect,metadata=none/wp-content/uploads/2019/07/crop_iStock-665866478.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title">Classical Dance & Music</h2>
              <p class="card-text"> One of the major types of entertainment at weddings is music and we all know why. Music can change a ceremony, set the mood, evoke feelings, and ..</p>
              <a href="music.php"><button type="submit" class="btn btn-outline-success" value="Explore">Explore</button></a>
            </div>
           
          </div>
        </div>
        
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
    
</body>
</html>