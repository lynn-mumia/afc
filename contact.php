<?php
require 'dbconnect.php';
// VARIABLES


  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email= $_POST['email'];
  $message= $_POST['message']

  $type= 'user';
  $status= "1";
// VARIABLES

    // insert records
    $sql_insert=mysqli_query($con,"INSERT INTO contact(name, phone, email, message)
    	VALUES('$name','$phone','$email', '$message')");

    if ($sql_insert==true) {
      echo "Your response has been recorded. We'll get back to you soon!"
    }
?>