<?php
session_start();
?>
<?php
include ("conn.php");
$email = $_POST["email"];
$password = $_POST["password"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "$email is not valid email address";
}else{
$insertuser ="SELECT * FROM `movietable` WHERE email='$email' and password='$password' ";
$result=$conn->query($insertuser);
if($result->num_rows>0){
  $_SESSION['email']=$email; 
  echo"sucess";
}
else{
  echo " wrong credentials";
}
}
?>
