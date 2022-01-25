<?php include "login_con.php";
   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style >
		body{
			font-family: arial;
		}
	form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
  border-radius: 25px;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;

}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
 
}
.userbox{
 border-radius: 25px;
}
/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}	
	</style>
</head>
<body>
	<div class="login">
		 <form method="POST">

  <div class="imgcontainer">

    <img src="https://cengage.force.com/resource/1607465003000/loginIcon" alt="Avatar" class="avatar">
  </div>



  <div class="container">

    <label for="email"><b>Email id</b></label>

    <input class="userbox" type="text" placeholder="Enter email id" name="email" required>



    <label for="psw"><b>Password</b></label>

    <input class="userbox" type="password" placeholder="Enter Password" name="password" required>



    <button class="userbox" type="submit" name="Login">Login</button>

  <span class="container">New user?sign up <a href="register.php">here</a></span>  
  </div>


</form> 
	</div>

</body>
</html>