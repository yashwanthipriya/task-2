<?php
include("config.php");
  if(isset($_POST['submit']))
    {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phoneCode = $_POST['phoneCode'];
    $phone = $_POST['phone'];
    
    $result=mysqli_query($mysqli,"INSERT INTO register3 values(' ','$name', '$password', '$gender', '$email', '$phoneCode','$phone')");
  
    if($result)
    {
    header("Location:index.php");
    } 
    else{
        echo "failed";
    }
   
    }



?>