<?php

session_start();
require 'connection.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

if(empty($email)){
    echo ("Please enter your Email Address.");
}else if(strlen($email) > 100){
    echo ("Incorrect Email Address.");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo("Not a valid Email Address.");
}else if(empty($pass)){
    echo ("Please enter your Password.");
}else if(strlen($pass) < 5 || strlen($pass) > 20){
    echo ("Incorrect password.");
}else{

$rs = Database::search("SELECT * FROM users WHERE `email`='".$email."' AND `password`='".$pass."'");    


$n = $rs->num_rows;

if($n == 1 ){
    echo('success');
    $d = $rs->fetch_assoc();
    $_SESSION["u"] = $d;

   
    
}else{
    echo('Horek wenna epa bng');
}


}

?>