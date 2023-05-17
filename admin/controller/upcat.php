<?php
  include '../../config.php';
  $admin=new Admin();
  if(isset($_POST['ucadd'])){
    $id1=$_POST['ucid'];
    $name1=$_POST['ucname'];
    $st1=$_POST['status'];
    $stmt=$admin->cud("UPDATE `category` SET `ct_name`='$name1',`ct_updated_date`=(NOW()), `ct_status`= '$st1' WHERE `ct_id`='$id1'",'updated');
    echo "<script>alert('Category updated successfully...');window.location='../view_category.php';</script>"; 
  }
?>