<?php
include 'connect_database.php';
if(isset($_GET['id']) && isset($_GET['image_name'])){
$id = $_GET['id'];
$image_name = $_GET['image_name'];
if($image_name!= ""){
  $path = "../images/uploaded_image/".$image_name;
  $remove = unlink($path);

  if($remove==false){
    $_SESSION['upload']="Failed to remove image";
    header('location: Food.php');
    die();
  }
}
$sql = "DELETE FROM tb_food WHERE Id=$id";
$res = mysqli_query($link, $sql);
if($res == true){
  $_SESSION['delete'] ="Food deleted successfully";
  header('location: Food.php');

}
else {
  $_SESSION['delete'] = "Failed to delete. Try again later.";
  header('location: Food.php');

}
}
else {
  $_SESSION['delete_2']="Failed to delete";
  header('location: Food.php');
}
 ?>
