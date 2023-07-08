<?php include 'header.php'?>
<?php include 'config.php'?>
<div class="content">
  <p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Post job
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="config.php" method="POST">
  <div class="mb-3">
    <label for="company name" class="form-label">company name</label>
    <input type="text" class="form-control" id="" name="companyname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="pos">
  </div>
  <div class="mb-3">
    <label for="jobDesc" class="form-label">job description</label>
    <input type="text" class="form-control" id="jobDesc" name="jdesc">
  </div>
  <div class="mb-3">
    <label for="skills" class="form-label">skills</label>
    <input type="text" class="form-control" id="Skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="ctc">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
</form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">company name</th>
      <th scope="col">position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
<tbody>
  <?php
  $sql="select `company name`,`position`,`CTC` from `post job`";
  $result=mysqli_query($conn,$sql);
  $i=0;
  if($result->num_rows>0)
  {                                                                   
    while($rows=$result->fetch_assoc())
    {
      echo"
<tbody>
  <tr>
  <td>".++$i."</td>
         <td>".$rows['company name']."</td>
         <td>".$rows['position']."</td>
         <td>".$rows['CTC']."</td>
         </tr>";
    }}
 else{
  echo"";
 }?>
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>