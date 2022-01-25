<?php include 'header.php';
include 'index_sub.php';
?>

<div class="content">
	<p>
  <button class="btn btn-primary" type="button" 
  data-bs-toggle="collapse" href="#collapseExample"  aria-expanded="false" aria-controls="collapseExample">
    post job
  </button>
 
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <form method="POST">
  <div class="mb-3">
    <label for="company name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname" required>
  </div>
 
  <div class="mb-3">
    <label for="position" class="form-label">Position</label>
    <input type="text" class="form-control" id="position" name="pos" required>
  </div>
<div class="mb-3">
    <label for="JobDiscription" class="form-label">Job Discription</label>
    <textarea cols="20" rows="10" class="form-control" id="JobDiscription" name="jdes" required></textarea>
  </div>
  <div class="mb-3">
    <label for="skill" class="form-label">Skills</label>
    <input type="text" class="form-control" id="skill" name="skill" required>
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="ctc" required>
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  </div>
</div>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Company Name</th>
      <th scope="col">Positions</th>
      <th scope="col">Job Discription</th>
      <th scope="col">Skills</th>
      <th scope="col">CTC</th>
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
    		     </tr>";
    	}
    }
    ?>
    
  </tbody>
</table>
</div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>