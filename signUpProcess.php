<?php

require 'connection.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];

  
if(empty($fname)){
  echo ("Please enter your First Name.");
}else if(strlen($fname) > 45){
  echo ("First Name must have less than 45 characters.");
}else if(empty($lname)){
  echo ("Please enter your Last Name.");
}else if(strlen($lname) > 45){
  echo ("Last Name must have less than 45 characters.");
}else if(empty($email)){
  echo ("Please enter your Email Address.");
}else if(strlen($email) > 100){
  echo ("Email must have less than 100 characters.");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
  echo ("Invalid Email Address");
}else if(empty($password)){
  echo ("Please enter your Password.");
}else if(strlen($password)<5 || strlen($password)>20){
  echo ("Password length must be between 5 - 20 characters.");
}else{

  $rs = Database::search("SELECT * FROM `users` WHERE `email`='".$email."'"); 
  $n = $rs->num_rows;

  if($n > 0){
      echo ("User with the same Email already exists.");
  }else{

      $d = new DateTime();
      $tz = new DateTimeZone("Asia/Colombo");
      $d->setTimezone($tz);
      $date = $d->format("Y-m-d H:i:s");

      Database::iud("INSERT INTO 
      `users`(`fname`,`lname`,`email`,`password`,`joined_date`,`status`) 
      VALUES ('".$fname."','".$lname."','".$email."','".$password."',
      '".$date."','1')");

      echo ("success");

  }


}




?>