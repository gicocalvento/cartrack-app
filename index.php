<?php 
$users = $obj->getUsers();
$sn=1;

echo 'start here';

if(isset($_POST['update'])){
    $user = $obj->getUserById();
    $_SESSION['user'] = pg_fetch_object($user);
    header('location:edit.php');
}

if(isset($_POST['delete'])){
   $ret_val = $obj->deleteuser();
   if($ret_val==1){
       
      echo "<script language='javascript'>";
      echo "alert('Record Deleted Successfully'){
          window.location.reload();
      }";
      echo "</script>";
  }
}
?>