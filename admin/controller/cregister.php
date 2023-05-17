<?php
  include '../../config.php';
  $admin=new Admin();
  if(isset($_POST['submit'])){
      $username=$_POST['username'];
      $password=$_POST['password'];
      $email=$_POST['email'];
      $stmt=$admin->cud("INSERT INTO `admin` (`a_name`,`a_password`,`a_email`)VALUES('$username','$password','$email')",'saved');
      echo "<script>alert('inserted successfully');window.location='../index.php';</script>";
      
  }

?>