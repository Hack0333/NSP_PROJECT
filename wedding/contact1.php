<?php

   $connection = mysqli_connect('localhost','root','','event');
   if($connection) {
    echo "connected";
   }

   if(isset($_POST)){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $number = $_POST['number'];
      $plan = $_POST['plan'];
      $address = $_POST['address'];
      $message = $_POST['message'];
     

      $request = " insert into contact(`name`, `email`, `number`,`plan`,`address`,`message`) values('$name','$email','$number','$plan','$address','$message') ";
      
      $result=mysqli_query($connection, $request);
      if(!$result){
        echo mysqli_connect_error();
      }

         header('location:contact.php'); 

   }else{
      echo 'something went wrong please try again!';
   }
   ?>