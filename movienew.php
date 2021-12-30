<?php
include ("conn.php");
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$city = $_POST["city"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "$email is not valid email address";
}else{
$insertuser ="INSERT INTO `movietable`(`name`, `email`, `password`, `city`) VALUES ('$name','$email','$password','$city')";
if($conn->query($insertuser)){
    echo "row inserted";
}
else{
  echo "not inserted";
}
}
?>