<?php
include 'index_sub.php';

include 'candidate_config.php';?>
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
.box
{

	margin: 100px;
	width: 100px;
	top: 500px;
}
.jobs{
	 padding-top: 100px;

	padding: 50px;
	
}
.btn2{
	color: blue;
}
</style>
</head>
<body>
	<a class="btn btn-primary" type="button" 
 href="login.php" >
    Post job
  </a>
	<div class="nav">
		<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Naukiri Nation</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
  </div>
</nav>
	</div>
<div class="jobs">
 <table class="table">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Company Name</th>
      <th scope="col">Positions</th>
      <th scope="col">Job Discription</th>
      <th scope="col">Skills</th>
      <th scope="col">CTC</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * FROM `job`";
    $i=0;
    $result=mysqli_query($conn,$sql);
    if($result->num_rows>0){
    	while($rows=$result->fetch_assoc()){
    		
    		echo"<tr>
    		    <td>".++$i."</td>
    		     <td>".$rows['cname']."</td>
    		     <td>".$rows['pos']."</td>
    		     <td>".$rows['jdes']."</td>
    		     <td>".$rows['skill']."</td>
    		     <td>".$rows['ctc']."</td>
    		     <td><button  class=btn btn-primary type=button 
  data-bs-toggle=modal href=#exampleModal  aria-expanded=false aria-controls=collapseExample>
    Apply
  </button></td>
    	
    		     </tr>";
    	}
    }
    ?>
    
  </tbody>
</table>
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Applying for </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div><form method="POST">
      <div class="modal-body">
        
          <div class="mb-3">
            <label for="name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
           <div class="mb-3">
            <label for="email" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="email" name="email" required>
          </div>
           <div class="mb-3">
            <label for="pos" class="col-form-label">Position:</label>
            <input type="text" class="form-control" id="pos" name="pos" required>
          </div>
          <div class="mb-3">
            <label for="qua" class="col-form-label">Qualification:</label>
            <input type="text" class="form-control" id="qua" name="qua" required>
          </div>
           <div class="mb-3">
            <label for="year" class="col-form-label">Year of Passout:</label>
            <input type="text" class="form-control" id="year" name="year" required>
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="send">Apply</button>
      </div> </form>
    </div>
  </div>
</div>	
</div>	

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

