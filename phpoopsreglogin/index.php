<?php


include_once('function.php');
$userdata=new DB_con();
if(isset($_POST['submit']))
{
$fname=$_POST['fullname'];
$uname=$_POST['username'];
$uemail=$_POST['email'];
$pasword=md5($_POST['password']);

$sql=$userdata->registration($fname,$uname,$uemail,$pasword);
if($sql)
{
echo "<script>alert('Registration successfull.');</script>";
echo "<script>window.location.href='signin.php'</script>";
}
else
{
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='signin.php'</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registration Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assests/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="assests/jquery-1.11.1.min.js"></script>
    <script src="assests/bootstrap.min.js"></script>
 <script>
function checkusername(va) {
  $.ajax({
  type: "POST",
  url: "check_availability.php",
  data:'username='+va,
  success: function(data){
  $("#usernameavailblty").html(data);
  }
  });

}
</script>
</head>
<body>

<div class="container mb-4 mb-3">

<form class="form-horizontal" action='' method="POST">
  
    <div id="legend" align="center">
      <legend class="">User Registration Form</legend>
    </div>

<div class="form-group mt-3 mb-3">
      <!-- Fullname -->
      <label class="control-label"  for="username">Fullname</label>
      <div class="controls">
        <input type="text" id="username" name="fullname" placeholder="enter full name" class="form-control"required="true">
      </div>
    </div>


    <div class="form-group mt-3 mb-3">
      <!-- Username -->
      <label class="form-group"  for="username">Username</label>
      <div class="">
<input type="text" id="username" name="username" placeholder="enter username" onblur="checkusername(this.value)" class="form-control" required="true">
          <span id="usernameavailblty"></span>
      </div>
    </div>
 
    <div class="form-group mt-3 mb-3">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="">
        <input type="email" id="email" name="email" placeholder="enter your email" class="form-control" required="true">
      </div>
    </div>
 
    <div class="form-group mt-3 mb-3">
      <!-- Password-->
      <label class="" for="password">Password</label>
      <div class="">
        <input type="password" id="password" name="password" placeholder="enter your password" class="form-control" required="true">
      </div>
    </div>
 

 
    <div class="form-group mt-3 mb-3">
      <!-- Button -->
      <div class="mt-3 mb-3">
        <button class="btn btn-success" type="submit" id="submit" name="submit">Register</button>
      </div>
    </div>

 <div class="">
      <div class="">
       Already registered <a href="signin.php">Signin</a>
      </div>
    </div>
</div>
</form>
<script type="text/javascript">
</script>
</body>
</html>
