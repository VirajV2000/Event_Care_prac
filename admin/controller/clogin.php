<?php
  include '../../config.php';
  $admin=new Admin();
  if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $stmt=$admin->ret("SELECT * FROM `admin` WHERE `a_email`='$email' and `a_password`='$pass'");
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    $num=$stmt->rowCount();
    if($num>0){
        $id=$row['a_id'];

        $_SESSION['a_id']=$id;
        // echo $_SESSION['a_id'];
        echo "<script>alert('login successfully');window.location='../dashboard.php';</script>";
    }
    else{
        echo "<script>alert('Invalid credentials');window.location='../index.php';</script>"; 
    }
  }
