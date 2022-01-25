
<?php
include 'config.php';

if(isset($_POST['submit'])){

	$email=$_POST['email'];
	$msg=$_POST['msg'];
	



	$sql= "INSERT INTO `contact`(`email`, `msg`) VALUES ('$email','$msg')";

	if(mysqli_query($conn,$sql)){
		echo '<script>alert("Submitted")</script>';

	}else
	{
		echo"ERROR: Could not able to execute $sql. ".mysqli_error($conn);
	}
	

}
?>