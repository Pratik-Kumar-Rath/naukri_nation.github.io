<?php
include 'candidate_config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		
		 /* The side navigation menu */
.sidebar {
  margin: 0;
  margin-top: 57px; 
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
	margin-top: 57px; 
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
} 
	</style>

</head>
<body>
	<div class="nav">
		<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;">
  <div class="container-fluid">
    <a class="navbar-brand" href="career.php">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
  </div>
</nav>
	</div>
	 <!-- The sidebar -->
<div class="sidebar">
  <a  href="index.php">Jobs</a>
  <a class="active" href="jobs.php">Candidate applied</a>
  <a href="contact.php">Contact</a>
  <a href="about_us.php">About</a>
</div>

<div class="content">
	 <table class="table">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Email</th>
      <th scope="col">Position</th>
      <th scope="col">Qualification</th>
      <th scope="col">year passout</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * FROM `candidates`";
    $i=0;
    $result=mysqli_query($conn,$sql);
    if($result->num_rows>0){
    	while($rows=$result->fetch_assoc()){
    		
    		echo"<tr>
    		    <td>".++$i."</td>
    		     <td>".$rows['name']."</td>
    		     <td>".$rows['email']."</td>
    		     <td>".$rows['pos']."</td>
    		     <td>".$rows['qua']."</td>
    		     <td>".$rows['year']."</td>
    		     </tr>";
    	}
    }
    ?>
  </tbody>
</table>
</div>