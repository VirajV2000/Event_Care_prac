<?php
  include '../../config.php';
  $admin=new Admin();
  if(isset($_POST['cadd'])){
      $name=$_POST['cname'];
      $stmt=$admin->ret("SELECT * FROM `category` where `ct_name`='$name'");
      $row=$stmt->fetch(PDO::FETCH_ASSOC);
      $num=$stmt->rowCount();
      if($num>0){
        echo "<script>alert('The event category name is already exists with the name of .$name');window.location='../add_category.php';</script>";

      }
      else{
          $st='active';
          $stmt=$admin->cud("INSERT INTO `category` (`ct_name`,`ct_created_date`,`ct_status`)VALUES('$name',(NOW()),'$st')",'saved');
          echo "<script>alert('inserted successfully');window.location='../add_category.php';</script>";

      }
      
  }

?>