<?php
$email=$_POST['email'];
$pwd=$_POST['password'];
if($email=='mvm_Admin' && $pwd=='Mvm@Mvm')
{
  session_start();
  $_SESSION['username'] = "admin";
  header("location:forms.html");
}
else {
  header("location:admin.html");
}

 ?>
