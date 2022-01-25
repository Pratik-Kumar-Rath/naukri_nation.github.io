<?php
include 'config.php';

if(isset($_POST['submit'])){
	$cname=$_POST['cname'];
	$pos=$_POST['pos'];
	$jdes=$_POST['jdes'];
	$skill=$_POST['skill'];
	$ctc=$_POST['ctc'];


	$sql="INSERT INTO `job`(`cname`, `jdes`, `skill`, `ctc`, `pos`) VALUES ('$cname','$jdes','$skill','$ctc','$pos')";

	if(mysqli_query($conn,$sql)){
		
	}
	else{
		echo"failed to post";
	}
}





?>