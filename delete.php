<?php
include 'connect.php';
if(isset($_GET['deleteId'])){
$id=$_GET['deleteId'];
$sql="DELETE from `crud_opration` where id=$id";
if (mysqli_query($con, $sql)) {
   header("Location:display.php");
  } 
  else {
    echo "Error deleting record: " . mysqli_error($con);
  }
}
?>