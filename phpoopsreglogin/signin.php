<?php
session_start();
include_once('function.php');
$usercredentials=new DB_con();
if(isset($_POST['signin']))
{
$uname=$_POST['username'];
$pasword=md5($_POST['password']);
$ret=$usercredentials->signin($uname,$pasword);
$num=mysqli_fetch_array($ret);
if($num>0)
{
  $_SESSION['uid']=$num['id'];
  $_SESSION['fname']=$num['FullName'];
echo "<script>window.location.href='welcome.php'</script>";
}
else
{
echo "<script>alert('Invalid details. Please try again');</script>";
echo "<script>window.location.href='signin.php'</script>";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Log-In Here</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assests/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="assests/jquery-1.11.1.min.js"></script>
    <script src="assests/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<form class="form-horizontal" action='' method="POST">
    <div id="legend">
      <h3 class="">Login </h3>
    </div>

<div class="form-group">
      <!-- Fullname -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="form-control" required="true">
      </div>
    </div>


    <div class="form-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="form-control" required="true">
      </div>
    </div>
 

 
    <div class="form-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success" type="submit" name="signin">Signin</button>
      </div>
    </div>

 <div class="form-group">
      <!-- Button -->
      <div class="controls">
      Not Registered yet? <a href="index.php">Register Here</a>
      </div>
    </div>


</form>
</div>
<script type="text/javascript">

</script>
</body>
</html>
