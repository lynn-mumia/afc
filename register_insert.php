<?php
require 'dbconnect.php';
// VARIABLES


  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $password = password_hash($_POST['passwd'], PASSWORD_DEFAULT);
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $country= $_POST['country'];
  $farm= $_POST['farm'];
  $city=$_POST['city'];
  $size= $_POST['size'];
  $irrigation= $_POST['irrigation'];
  $venture= $_POST['venture'];
  $type= 'user';
  $status= "1";
// VARIABLES

    // insert records
    $sql_insert=mysqli_query($con,"INSERT INTO users(firstName, lastName, password, phonenumber, email, country, farmLocation, city, farmSize, irrigationMethod, mainVenture,type, status)
    	VALUES('$firstname', '$lastname','$password','$phone','$email', '$country','$farm','$city', '$size','$irrigation','$venture','$type','$status')");

    if ($sql_insert==true) {
    header("location:login.php");
    }

// insert records

?>