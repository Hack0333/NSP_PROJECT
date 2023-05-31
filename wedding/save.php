<?php

   $connection = mysqli_connect('localhost','root','','event');
   if($connection) {
    echo "connected";
   }

   if(isset($_POST)){
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $plan = $_POST['plan'];
      
     

      $request = " insert into book(`firstname`, `lastname`, `email`, `mobile`, `plan`) values('$firstname','$lastname','$email','$mobile','$plan') ";
      
      $result=mysqli_query($connection, $request);
      if(!$result){
        echo mysqli_connect_error();
      }

         header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }
   ?>