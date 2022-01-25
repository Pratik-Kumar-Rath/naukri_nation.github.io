<?php
include 'config.php';

if(isset($_POST['send'])){

	$name=$_POST['name'];
	$email=$_POST['email'];
	$pos=$_POST['pos'];
	$qua=$_POST['qua'];
	$year=$_POST['year'];



	$sql= "INSERT INTO `candidates`(`name`, `email`, `pos`, `qua`, `year`) VALUES ('$name','$email','$pos','$qua','$year')";

	if(mysqli_query($conn,$sql)){
		echo '<script>alert("Application submited")</script>';

	}else
	{
		echo"ERROR: Could not able to execute $sql. ".mysqli_error($conn);
	}
	

}
?>