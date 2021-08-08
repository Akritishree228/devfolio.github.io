<?php

if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to='akritirathore228@gmail.com';
  $subject='Form submission';
  $message="Name: ".$name."\n". "Wrote the following: "."\n\n".$message;
  $header="From: ".$email;

  if(mail($to, $subject, $message, $header)){
  	echo "<h1>Sent Successfully! Thank you"." ".$name.", contact you shortly!</h1>";
  }else{
  	echo "Something went wrong!";
  }

}
?>