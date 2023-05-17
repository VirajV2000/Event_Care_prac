<?php
  include '../../config.php';
  $admin=new Admin();
  $id=$_GET['ct_id'];
  $stmt=$admin->cud("DELETE FROM `category` where `ct_id`='$id'",'deleted');
  echo "<script>alert('deleted successfully');window.location='../view_category.php';</script>";

?>