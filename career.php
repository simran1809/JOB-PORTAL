<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>career</title>
    <style>
        .navbar{
    overflow: hidden;
    background color :#333;
    position: fixed;
    top: 0;
    width: 100%;
  }
  h1,
  p{
    color: #fff;
  }
  .jobs{
    border: 1px solid black;
    box-shadow: 5px 5px 4px 5px grey;
    margin: 10px;
    padding: 10px;
  }
        </style>
</head>
<body style="margin: 0; padding: 0;">
  <div class="row mr-0">
    <div class="col-12 container-fluid">
      <div class="jumbotron jumbotron-fluid" style="background-image:url('images/careerimage.jpg');background-size:cover;">
        <div class="container">
          <h1 class="display-4">Job Portal</h1>
          <p class="lead">Best Jobs available matching your skills</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row m-0">
    <?php
    $sql="SELECT `company name`,`position`,`jobdesc`,`CTC`,`skills` from `post job`";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows>0)
    {
      while($rows=$result->fetch_assoc()){
        echo '
        <div class="col-md-4">
          <div class="jobs">
            <h3 style="text-aligin:center;">'.$rows['position'].'</h3>
            <h4 style="text-aligin:center;">'.$rows['company name'].'</h4>
            <p style="color: black; text-align:justify;">'.$rows['jobdesc'].'</p>
            <p style="color:black;"><b>skills required:</b>'.$rows['skills'].'</p>
            <p style="color: black;"><b>CTC:</b>'.$rows['CTC'].'</p>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
            Apply Now
            </button>
          </div>
        </div>';
      }
    }
    else{
      echo "";
    }
    ?>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">new message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="recipient-name" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">applying for</label>
            <input type="text" class="form-control" id="message-text" name="apply">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Qualifications</label>
            <input type="text" class="form-control" id="message-text" name="qual">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Year passout</label>
            <input type="text" class="form-control" id="message-text" name="year">
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="confirm" class="btn btn-primary">apply</button>
  </form>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>