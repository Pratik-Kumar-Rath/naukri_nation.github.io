<?php

    $server = "localhost";
	$username = "root";
	$password = "";
	$database = "jobs";

	$conn = mysqli_connect($server , $username , $password, $database);

	if(!$conn){
   	die("Connection to this database failed due to".mysqli_connect_error());

    echo '<script>alert("ajkhdasgkydjgsaku")</script>';
   }
if(isset($_POST['submit'])) {
	
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$role = $_POST['role'];
$suggest = $_POST['suggest'];
$improve = $_POST['improve'];
$comment = $_POST['comment'];


// $sql = "INSERT INTO `survey` ( `name`, `email`, `age`, `phone`, `role`, `suggest`, `improve`, `comment`, `date`) VALUES( '$name', '$email', '$age', '$phone', '$role', '$suggest', '$improve', '$comment', current_timestamp());"

 $sql = "INSERT INTO `candidates`(`name`, `email`) VALUES ('$name','$email')";


if(mysqli_query($conn,$sql)){
        
    }
    else{
        echo"failed to post";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SURVEY FORM</title>
    <style>
    *{
        box-sizing: border-box;
    }
    #title{
    bottom: 500px;
    text-align: center;
    background-image: linear-gradient(90deg,#075ae3,#f5f7fa,#a832a6);
    
    color: #2c2e30;
    padding:12px 20px;
    border:none;
    border-radius: 4px;
    cursor: pointer;
    width:100%;

    }
    #content{
        justify-content: center;
        width: 100vh;
        height: 100%;
        background: url(survey1.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-color: #f2f2f2f2;
        padding:15px 15px 15px 15px;
        margin: 30px 30px 30px 350px;
       border:3px solid black;
        border-radius: 3px;
    }
    #description{
        text-align: center;
    }
    #age{
        width: 190px;
    }

input[type="submit"]
{
    background-color:#98eb9a;
    color: #1a301a;
    padding:12px 20px;
    border:none;
    border-radius: 4px;
    cursor: pointer;
    width:100%;
}
input[type="submit"]:hover{
    text-decoration: underline white;
}
    }
</style>
</head>
<body id="content">
     <h1 id="title">SURVEY FORM</h1>
     <p id="description"><strong>PLEASE FILL IN THE FORM AND SHARE IT!</strong></p><br>

     <form action="tan_survey.php" method="POST" id="survey-form">


        <p><strong>Name:  </strong><input type="text" name="name" id="name" placeholder="ENTER YOUR NAME" required></p>
        <p><strong>Email:  </strong><input type="email" name="email" id="email" placeholder="ENTER YOUR EMAIL" required></p>
        <p><strong>Age:  </strong><input type="number" name="age" id="age" placeholder="ENTER YOUR AGE" max="99" min="00"></p>
        <p><strong>Phone Number: </strong><input type="text" name="phone" id="number" placeholder="ENTER YOUR NUMBER"></p>
        <p><strong>ENTER THE ROLE FOR WHICH YOU ARE FIT:</strong>
          <select name="role" id="role_type">
              <option value="">---select a role type---</option>
              <option value="studentf">FULL TIME STUDENT</option>
              <option value="jobp">PART-TIME JOB</option>
              <option value="orther">OTHER</option>
          </select>
      </p>
       <p><strong>WOULD YOU SUGGEST THIS WEBSITE TO YOUR FRIENDS?</strong>
       <br>                                          
             <input type="radio" name="suggest" id="yes" value="yes"> YESS!<br>
             <input type="radio" name="suggest" id="no" value="no"> NO!
        </p>
        <br>
            <legend><strong>What would you like to see improved?</strong>(Check all that apply)</legend>
         <p>                                           
            <input type="checkbox" name="improve" id="male" value="Front-end Projects">Front-end Projects<br>
            <input type="checkbox" name="improve" id="female" value="Back-end Projects">Back-end Projects<br>
            <input type="checkbox" name="improve" id="male" value="Data Visualization">Data Visualization<br>
            <input type="checkbox" name="improve" id="female" value="Open Source Community">Open Source Community<br>
            <input type="checkbox" name="improve" id="male" value="itter help rooms">Gitter help rooms<br>
            <input type="checkbox" name="improve" id="female" value="Videos">Videos<br>
            <input type="checkbox" name="improve" id="male" value="City Meetups">City Meetups<br>
            <input type="checkbox" name="improve" id="female" value="Wiki">Wiki<br>
         </p>
        </fieldset>
        <p><strong>
        Any comments or suggestions? </strong><textarea name="comment" id="address" cols="70" rows="4"></textarea></p>

          <button type="submit" class="btn btn-primary" name="submit">Submit</button>

 </form>
   
</body>
</html>