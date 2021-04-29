<?php
include 'connection.php';

$email=$_POST['email'];
$password=$_POST['pswd'];

$sql2="insert into users (us,Cname,Cmessage) values ('$email','$password')";
$result=mysqli_query($connectlink,$sql2);
header("Location:http://localhost/loginform/index.php");
?>
