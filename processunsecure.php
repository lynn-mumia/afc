<?php
  require_once("database/dbconnection.php");

  $email = $password = $firstname = $lastname = $phone =
  $email_err = $email_error = $password_error =
  $password_err = $firstname_err = $firstname_error = $lastname_err =
  $lastname_error = $phone_err = $phone_error =  $userStat = $country= $country_err = $country_error=
  $farm= $farm_err= $farm_error= $size= $size_err= $size_error= $city= $city_err= $city_error= $irrigation= 
  $irrigation_err=  $irrigation_error= $venture= $venture_err= $venture_error= $type=
  $login_notice =  $register_notice = "";

  /*if(isset($_POST['login']))
    //validLogin();*/

  if(isset($_POST['register']))        
                  $type = "user";
                  $status = 1;

                  $GLOBALS['password'] = password_hash($GLOBALS['password'], PASSWORD_DEFAULT);
                  $sql = "INSERT INTO users(firstName, lastName, password, phonenumber, email, country, farmLocation, city, farmSize, irrigationMethod, mainVenture,type, status) VALUES ('$firstname',
                                  '$lastname','$password','$phone','$email'], '$country','$farm','$city', '$size'],'$irrigation'],'$venture','$type',$status)";
                $sql2= mysqli_query($connection, $sql);
    
                  if($sql2==true){
                    header("location:login.php");
                  }
 /* if(isset($_GET['checkU']))
    checkUsername($_GET['checkU']);

  if(isset($_POST['passchange'])){
    forgotpass();
  }*/


 /* function clean($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  function validLogin(){
    $valid = true;

    $GLOBALS['phone'] = isset($_POST['phone'])? clean($_POST['phone']):"";
    if(empty($GLOBALS['phone'])){
      $GLOBALS['phone_err'] = " *required";
      $valid = false;
    }

    $GLOBALS['password'] = isset($_POST['passwd'])? $_POST['passwd']:"";
    if(empty($GLOBALS['password'])){
      $GLOBALS['password_err'] = " *required";
      $valid = false;
    }

    if($valid){
      loginUser();
    }
  }

  function loginUser(){
    require_once("database/dbconnection.php");
    $type = "";

    $connection = new DBConnection;
    $sql = "SELECT * FROM users WHERE phonenumber = \"".$GLOBALS['phone']."\" AND status = 1";
    if ($connection->query($sql)) {
      if($connection->num_rows() > 0){
        $row = $connection->fetch();

        if(password_verify($GLOBALS['password'], $row['password'])){
          session_start();
          $_SESSION['firstname'] = $row['firstName'];
          $_SESSION['lastname'] = $row['lastName'];
          $_SESSION['type'] = $row['type'];
          $_SESSION['user_id'] = $row['user_id'];
          $_SESSION['phone'] = $row['phone'];
          $type = $row['type'];
          if($type == "admin")
            header('Location: index-2.html');
          else
            header('Location: index-2.html');
        }
        else
          $GLOBALS['login_notice']="Wrong Password";
      }
      else
        $GLOBALS['login_notice']="User Does Not Exist";

      $connection->close();
    } else {
      $GLOBALS['login_notice']= "Error: " . $sql . "<br>" . $connection->error();
    }
  }
*/

  
 /* function validRegistry(){
    $valid=true;

    $GLOBALS['firstname'] = isset($_POST['fname'])? clean($_POST['fname']):"";
    if(empty($GLOBALS['firstname'])){
      $GLOBALS['firstname_err'] = " *required";
      $valid = false;
    }
    else{
      $fPattern = preg_match('/^[a-zA-Z]+$/', $GLOBALS['firstname']);
      if(!$fPattern){
        $GLOBALS['firstname_error'] = "First Name Can Only Contain Letters";
        $valid = false;
      }
    }

    $GLOBALS['lastname'] = isset($_POST['lname'])? clean($_POST['lname']):"";
    if(empty($GLOBALS['lastname'])){
      $GLOBALS['lastname_err'] = " *required";
      $valid = false;
    }
    else{
      $lPattern = preg_match('/^[a-zA-Z]+$/', $GLOBALS['lastname']);
      if(!$lPattern){
        $GLOBALS['lastname_error'] = "Last Name Can Only Contain Letters";
        $valid = false;
      }
    }

    $GLOBALS['country'] = isset($_POST['country'])? clean($_POST['country']):"";
    if($GLOBALS['country']=="select"){
      $GLOBALS['country_err'] = " *required";
      $valid = false;
    }

    $GLOBALS['size'] = isset($_POST['size'])? clean($_POST['size']):"";
    if(empty($GLOBALS['size'])){
      $GLOBALS['size_err'] = " *required";
      $valid = false;
    }
    else{
      $lPattern = preg_match('/^[a-zA-Z0-9_ ]*$/', $GLOBALS['size']);
      if(!$lPattern){
        $GLOBALS['size_error'] = "Size Can Only Contain Letters and Numbers";
        $valid = false;
      }
    }

    $GLOBALS['city'] = isset($_POST['city'])? clean($_POST['city']):"";
    if($GLOBALS['city']=="select"){
      $GLOBALS['city_err'] = " *required";
      $valid = false;
    }
    

    $GLOBALS['farm'] = isset($_POST['farm'])? clean($_POST['farm']):"";
    if($GLOBALS['farm']=="select"){
      $GLOBALS['farm_err'] = " *required";
      $valid = false;
    }
    
    
    $GLOBALS['venture'] = isset($_POST['venture'])? clean($_POST['venture']):"";
    if($GLOBALS['venture']=="select"){
      $GLOBALS['venture_err'] = " *required";
      $valid = false;
    }
    

   $GLOBALS['irrigation'] = isset($_POST['irrigation'])? clean($_POST['irrigation']):"";
    if($GLOBALS['irrigation']=="select"){
      $GLOBALS['irrigation_err'] = " *required";
      $valid = false;
    }
    

    $GLOBALS['phone'] = isset($_POST['phone'])? clean($_POST['phone']):"";
    if(empty($GLOBALS['phone'])){
      $GLOBALS['phone_err'] = " *required";
      $valid = false;
    }
    else{
      $GLOBALS['userStat'] = isset($_POST['userStat'])? clean($_POST['userStat']):"";
      if($GLOBALS['userStat'] !="y")
        $valid = false;
      $uPattern = preg_match('/^\+(?:[0-9]●?){6,14}[0-9]$/', $GLOBALS['phone']);
      if(!$uPattern){
        $GLOBALS['phone-error'] = "Phone Number Can Only Contain Numbers";
        $valid = false;
      }
    }
    $GLOBALS['password'] = isset($_POST['passwd'])? $_POST['passwd']:"";
    if(empty($GLOBALS['password'])){
      $GLOBALS['password_err'] = " *required";
      $valid = false;
    }
    else{
      $passPattern = preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_])[a-zA-Z0-9!@#$%^&*_]{6,20}$/', $GLOBALS['password']);
      if(!$passPattern){
        $GLOBALS['password_error'] = "Password Must Include An UpperCase Letter, A LowerCase".
         "Letter,<br> A Number, A Special Character And At Least 6 Characters";
         $valid = false;
       }
     }

    $GLOBALS['email'] = isset($_POST['email'])? clean($_POST['email']):"";
    if(empty($GLOBALS['email'])){
      $GLOBALS['email_err'] = " *required";
      $valid = false;

    }else{
      $emailPattern = preg_match('/\S+@+\S+\.+\S/', $GLOBALS['email']);
      if(!$emailPattern)
        $GLOBALS['email_error'] = "Email is Invalid";
    }

    if($valid){
      registerUser();
    }
}

  function registerUser(){

    require_once("database/dbconnection.php");
    $connection = new DBConnection;

    $type = "user";
    $status = 1;

    $GLOBALS['password'] = password_hash($GLOBALS['password'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(firstName, lastName, password, phonenumber, email, country, farmLocation, city, farmSize, irrigationMethod, mainVenture,type, status) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $paramTypes = "ssssssssssssi";

    $result = $connection->prep($sql,$paramTypes,$GLOBALS['firstname'],
                    $GLOBALS['lastname'],$GLOBALS['password'], $GLOBALS['phone'],
                    $GLOBALS['email'], $GLOBALS['country'], $GLOBALS['farm'], $GLOBALS['city'], 
                    $GLOBALS['size'], $GLOBALS['irrigation'], $GLOBALS['venture'],$type,$status);

    var_dump($result);

    if ($result) {
      if($connection->affected_rows($result) > 0){
        header("location: index.php");
      }
      else
        $GLOBALS['register_notice'] = "Could not Register User at this Time";
    } else {
      $GLOBALS['register_notice'] = "Error: " .$sql."<br>".$connection->error();
    }
    $connection->close($result);
  }
*/

  /*function checkUsername($user_name){
    $connection = new DBConnection;

    $sql = "SELECT * FROM users WHERE username = '$user_name'";
    $connection->query($sql);
    if($connection->num_rows() > 0)
      echo "1";
    else
      echo "0";
    $connection->close();
  }
*/
	
  /*function forgotpass(){
    //attaining the respective variables
    $uname = $_REQUEST['username'];
    $npass = $_REQUEST['newpasswd'];
    $conpass = $_REQUEST['confirmpass'];
    //confirm the two passwords match and hash the new password
    if($npass === $conpass){
       $hashpass = password_hash($npass,PASSWORD_DEFAULT);
        //the sql statement to update the database
     $statement = "UPDATE users SET password = '$hashpass' WHERE username = '$uname'";
    //connecting to the database
    $connector = new dbconnection;

    //execute the query
    $rlt = $connector-> query($statement);
    if($rlt > 0){
      echo "<script>
      alert('Your password has been successfully updated');
      window.location.href= 'login.php';
      </script>";
      //header("Location: ../login/index.php");
    }
    else{
      echo "Password could not be updated";
    }
    }
    else{
      echo "Your password does not match";
    }
  }*/

  ?>
