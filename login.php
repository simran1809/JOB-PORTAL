<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    body{
      background-image:url('images/projectimg.jpg');
        background-size: cover;
     }  
        form{
          background-color:#fff;
            margin-top: 6em;
            margin-left: 30em;
            margin-right: 0em;
            padding: 30px;
            box-shadow: 10px 10px 8px 10px #888888;

        }
    </style>
    <title>register</title>
</head>
<body>
    <div class="container">
    <form method="POST">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="Password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary" name="login">Submit</button>
  <p style="text-align: centre;">New user?<br>Create account <a href="register.php">Sign up</a></p>

</form>
  </div>
</body>

</html>