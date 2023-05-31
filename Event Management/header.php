<section class="header">

   <a href="home.html" class="logo">Event.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="portfolio.php">portfolio</a>
      <a href="pricing.php">pricing</a>
      <a href="contact.php">contact</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>
<style>
   
/* media queries  */

@media (max-width:1200px){

.container{
   margin:5rem 10rem;
}

}

@media (max-width:991px){

html{
   font-size: 55%;
}

.container{
   margin:5rem;
}

}

@media (max-width:768px){

.heading{
   font-size: 3.5rem;
}

#menu-btn{
   display: inline-block;
   transition: .2s linear;
}

#menu-btn.fa-times{
   transform: rotate(180deg);
}

   .header .navbar{
      position: absolute;
      top:99%; left:0; right:0;
      background: var(--white);
      border-top: var(--border);
      padding:2rem;
      clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
      transition: .2s linear;
   }

   .header .navbar.active{
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
   }

   .header .navbar a{
      display: block;
      margin:2rem;
      text-align: center;
   }
   
@media (max-width:450px){

html{
   font-size: 50%;
}

.container{
   margin:2rem;
}

.services .slide .content p{
   font-size: 1.3rem;
}

.contact form .btn{
   display: block;
   width: 100%;
}

}
}


</style>