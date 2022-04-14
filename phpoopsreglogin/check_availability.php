<?php

include_once('function.php');

$uusername=new DB_con();

$uname= $_POST["username"];	

$sql=$uusername->usernameavailblty($uname);

$num=mysqli_num_rows($sql);
