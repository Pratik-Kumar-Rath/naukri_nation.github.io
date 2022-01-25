<?php
include 'config.php';
if(isset($_POST['submit'])){

	if ($data['password'] !== $data['cpwd']) {
   die('Password and Confirm password should match!');   
}

	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];



	$sql= "INSERT INTO `users`(`Name`, `Email`, `password`) VALUES ('$name','$email','$password')";
	if(mysqli_query($conn,$sql)){
		header('location:index.php');
	}else{
		echo"ERROR: Could not able to execute $sql. ".mysqli_error($conn);
	}
}

?>