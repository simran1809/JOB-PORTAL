<?php include 'config.php'?>
<?php include 'header.php'?>

<div class="content">


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate name</th>
      <th scope="col">Position</th>
      <th scope="col">Year pass out</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select name,apply,year from candidates";
    $result=mysqli_query($conn,$sql);
    $i=0;
    if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){
        echo'
    <tr>
    <th scope="row">'.++$i.'</th>
    <th>'.$rows['name'].'</th>
    <th>'.$rows['apply'].'</th>
    <th>'.$rows['year'].'</th>
    </tr>';}}
    else{
      echo"";
    }
    ?>
  </tbody>
</table>