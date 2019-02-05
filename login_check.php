<?php
require 'dbconnect.php';
// VARIABLES


  $phone = $_POST['phone'];
  $password = $_POST['passwd'];
  
  $type= ' ';
  $status= "1";
// VARIABLES

    // insert records
    $sql_insert=mysqli_query($con,"SELECT * FROM users WHERE phonenumber='$phone' AND status = 1");

    if ($sql_insert==true){
      if($sql_insert->num_rows>0)
        $row=mysqli_fetch_assoc($sql_insert);
          if(password_verify($password, $row['password'])){
            
           header("location:index-2.html");
           } else{
             $login_notice ="Wrong Password";
           }
    }else{
      $login_notice="User Does Not Exist";
    }
      
// insert records

?>