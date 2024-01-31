<?php include 'header.php'; ?>

<div class="main-content">
  <div class="wrapper">
    <h1 class="col-4">Add Food</h1>

    <?php
    if(isset($_SESSION['add'])){
      echo $_SESSION['add'];
      unset($_SESSION['add']);
    }
    if(isset($_SESSION['upload'])){
      echo $_SESSION['upload'];
    }

     ?>
    <form  method="post" enctype="multipart/form-data">
      <div class="row g-3 align-items-center">
              <div class="col-md-2">
                <label for="title" class="col-form-label">Title</label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control" name="title" placeholder="Title of the food">
              </div>
              <div class="col-md-2">
                <label for="description" class="col-form-label">Description</label>
              </div>
              <div class="col-md-10">
                <textarea name="description" rows="5" class="form-control" placeholder="Description of the food"></textarea>
              </div>
              <div class="col-md-2">
                <label for="price" class="col-form-label">Price</label>
              </div>
              <div class="col-md-10">
                <input type="number" class="form-control" name="price" value="10">
              </div>
              <div class="col-md-2">
                <label for="image" class="col-form-label">Select Image</label>
              </div>
              <div class="col-md-10">
                <input type="file" class="form-control" name="image">
              </div>
              <div class="col-md-2">
                <label for="active" class="col-form-label">Active</label>
              </div>
              <div class="col-md-10">
                <input type="radio" name="active" value="Yes">Yes
                <input type="radio" name="active" value="No">No
              </div>
              <button type="submit" name="submit" class="btn-admin-update">Add Food</button>


    </form>

  </div>

</div>
<?php
error_reporting(E_ERROR | E_PARSE);
if (isset($_POST['submit'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  // $image = $_POST['image'];
  if(isset($_POST['active'])){
    $active = $_POST['active'];

  }
  else {
    $active = 'No';
  }

  if(isset($_FILES['image']['name'])){
    $image_name = $_FILES['image']['name'];
    $ext = end(explode('.',$image_name));
    $image_name = "Food_items_".rand(000,999).'.'.$ext;

    $source_path = $_FILES['image']['tmp_name'];
    $destination_path = "../images/uploaded_image/".$image_name;
    $upload = move_uploaded_file($source_path, $destination_path);

    if($upload == false){
      $_SESSION['upload'] = "Failed to upload image";
      header('location: add-food.php');
      die();
    }
  }
  else {
    $image_name ="";
  }

  $sqlinsert = "INSERT INTO tb_food SET
  Title='$title',
  price='$price',
  Description='$description',
  active='$active',
  image_name='$image_name'
  ";

  include 'connect_database.php';
  $resultInsert = mysqli_query($link, $sqlinsert) or die(mysql_error());
  $lastInsertID = mysqli_insert_id($link);

  if ($resultInsert == true) {
    $_SESSION['add']="Food added successfully";
    header("location: food.php");
  }
  else {
    echo "failed";
  }


}

 ?>

<?php include 'footer.php'; ?>
