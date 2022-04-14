<?php
session_start();
if(strlen($_SESSION['uid'])=="")
{
  header('location:logout.php');
} else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>User Registraion using PHP OOPs Concept</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assests/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="assests/jquery-1.11.1.min.js"></script>
    <script src="assests/bootstrap.min.js"></script>
</head>
<body>
<form class="form-horizontal" action='' method="POST">
    <div id="legend">
      <legend class="" align="center">Welcome Back : <?php  echo  $_SESSION['fname'];?></legend>
    </div>

    <div class="control-group" align="center">
      <!-- Button -->
      <div class="controls">
        <a href="index1.php" class="" type="submit" name="signin">Contact Us</a>
      </div>

      <div class="controls">
        <a href="aboutus.php" class="" type="submit" name="signin">About Us</a>
      </div>
      <div class="controls">
        <a href="logout.php" class="" type="submit" name="signin">Logout</a>
      </div>

      
    </div>
    

</form>
<script type="text/javascript">
</script>
</body>
</html>
<?php } ?>