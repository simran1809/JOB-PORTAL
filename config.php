<?php
$server='localhost';
$username='root';
$password='';
$database='job';

$conn=mysqli_connect($server,$username,$password,$database);
if($conn->connect_error){
    die("connection falied:".$conn->connect_error);
}
echo"";


if(isset($_POST['done'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $password=$_POST['password'];
    $sql="INSERT INTO `users`( `name`, `email`, `password`,`phone_no`) VALUES ('".$name."','".$email."','".$password."',$number)";
    if(mysqli_query($conn,$sql)){
        echo "records inserted successfully.";
    }
    else{
       echo"ERROR:could not able to execute $sql.".mysqli_error($conn);
    }
}


    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="SELECT*FROM users WHERE `email`='$email' AND `password`='$password'";
        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        if(mysqli_num_rows($result)==1)
        {
            header("location:index.php");
        }else{
            $error="emailid or password is incorrect";
        }
    }


    if(isset($_POST['submit1'])){
    $companyname=$_POST['companyname'];
    $position=$_POST['pos'];
    $jobdesc=$_POST['jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['ctc'];
    $sql="INSERT INTO `post job`( `company name`, `position`, `jobdesc`,`skills`,`CTC`) VALUES ('".$companyname."','".$position."','".$jobdesc."','".$skills."','".$CTC."')";
    if(mysqli_query($conn,$sql)){
     echo "records inserted successfully.";
    }
    else{
       echo"ERROR:could not able to execute $sql.".mysqli_error($conn);
    }
    }


    if(isset($_POST['confirm'])){
        $name=$_POST['name'];
        $qual=$_POST['qual'];
        $apply=$_POST['apply'];
        $year=$_POST['year'];
        $sql="INSERT INTO `candidates`( `name`, `apply`,`qual`,`year`) VALUES ('".$name."','".$apply."','".$qual."','".$year."')";
        if(mysqli_query($conn,$sql)){
            echo "records inserted successfully.";
        }
        else{
           echo"ERROR:could not able to execute $sql.".mysqli_error($conn);
        }
    }
      