<?php
include 'connect_database.php';
$id = $_GET['id'];
$sql = "DELETE FROM tb_admin WHERE Id=$id";
$res = mysqli_query($link, $sql);
if($res == true){
  $_SESSION['delete'] ="Admin deleted successfully";
  header('location: http://localhost/My%20new%20website%20for%20project/Admin%20panel/admin.php');

}
else {
  $_SESSION['delete'] = "Failed to delete admin. Try again later.";
  header('location: http://localhost/My%20new%20website%20for%20project/Admin%20panel/admin.php');

} ?>
