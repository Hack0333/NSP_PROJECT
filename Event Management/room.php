<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>photography</title>
</head>
<body>
    <h1><b>Rooms available</b></h1>
    
   
   <section class="activities-container">
    
    <div id="Video">
       <div class="box">
        <img src="images/room1.webp" alt="" class="src" >   
        <h2 class="h-secondary center"></h2>
        <p class="text center"> </p>
       </div>
       <div class="box">
        <img src="images/room2.jpg" alt="" class="src">   
        <h2 class="h-secondary center"></h2>
        <p class="text center"></p>
       </div>
       <div class="box">
        <img src="images/room3.jpg" alt="" class="src">   
        <h2 class="h-secondary center"></h2>
        <p class="text center"></p>
       </div>
    </div>
    <div class="bottom-left"><ul>
        <li>Fully Furnished</li>
        <li>AC & Non-Ac rooms available</li>
        <li>Attach bathroom</li>
        <li>Hygienic Rooms</li>
        <li>Healthy food</li>
        <li>Security and Safety</li>
        <li>Attach balcony</li>
    </ul>
    </div>
</section>
     
   

</body>
</html>
<style>
    body{
        background: url(images/background-img.png)
    }
   

     h1{
        margin-left: 600px;
        font-size: 60px;
        margin-top: 5px;
        margin-bottom: 5px;
    }
    ul,li{
         font-size: 30px;
         margin-left: 300px;
         color: rgb(22, 22, 22);
       
       
    } 
     .container {
        position: relative;
        text-align: center;
    }
    .bottom-left {
        position:absolute;
        bottom:10px;
        left:-600px;
        font-size: 10px;
        margin-left: 20px;
    
    } 
    #Video{
        margin: 34px;
        display: flex;
    }
     #Video .box{
        
        width: 350px;
        padding: 20px;
         margin: 2px 6px; 
         margin-left: 35px;
        margin-right: 38px;

        margin-bottom: 20px;
        border-radius: 28px; 
        background:rgb(198, 198, 235);

    } 
    #Video .box img{
        height: 250px;
        margin: 0px;
        display: block;
        width: 350px;
        margin-top: 20px;
        border: 2px solid black;
        /* border-radius: 10px; */

    }
</style>