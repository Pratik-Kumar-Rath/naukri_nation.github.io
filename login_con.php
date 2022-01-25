<?php
include 'config.php';

session_start();

if(isset($_POST['Login'])){

$email=$_POST['email'];
$password=$_POST['password'];


$query="SELECT * FROM `users` WHERE `Email`='$email' AND `password`='$password' ";

$result=mysqli_query($conn,$query);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if($row>0){
	header('location:index.php');
}else{
	$error='email id or password is incorrect';
	echo $error;

}

}









?>