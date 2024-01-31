<?php include 'header.php'; ?>
<?php ob_start(); ?>
    <div class="main-content">
    <div class="wrapper">
      <h1 class="col-4">Update Food</h1>

      <?php

      if(isset($_GET['id'])){
      $id=$_GET['id'];
      include 'connect_database.php';

      $sql = "SELECT * FROM tb_food WHERE Id=$id";
      $res=mysqli_query($link, $sql);
      $row = mysqli_fetch_assoc($res);

          $title=$row['Title'];
          $description=$row['Description'];
          $price=$row['price'];
          $current_image=$row['image_name'];
          $active=$row['active'];


    }
    else {
        header('location: Food.php');
      }

      ?>

      <form  method="post" enctype="multipart/form-data">
        <div class="row g-3 align-items-center">
                <div class="col-md-2">
                  <label for="title" class="col-form-label">Title</label>
                </div>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="title" value="<?php echo $title; ?>">
                </div>
                <div class="col-md-2">
                  <label for="description" class="col-form-label">Description</label>
                </div>
                <div class="col-md-10">
                  <textarea name="description" rows="5" class="form-control"><?php echo $description; ?> </textarea>
                </div>
                <div class="col-md-2">
                  <label for="price" class="col-form-label">Price</label>
                </div>
                <div class="col-md-10">
                  <input type="number" class="form-control" name="price" value="<?php echo $price; ?>">
                </div>
                <div class="col-md-2">
                  <label for="o_image" class="col-form-label">current Image</label>
                </div>
                <div class="col-md-10">
                  <?php
                  if($current_image==""){
                    echo "Image not available";
                  }
                  else {
                    ?>
                    <img src="../images/uploaded_image/<?php echo $current_image; ?>" width="50%">
                    <?php
                  }

                   ?>
                </div>
                <div class="col-md-2">
                  <label for="image" class="col-form-label">Select New Image</label>
                </div>
                <div class="col-md-10">
                  <input type="file" class="form-control" name="image" >
                </div>
                <div class="col-md-2">
                  <label for="active" class="col-form-label">Active</label>
                </div>
                <div class="col-md-10">
                  <input <?php if($active=="Yes"){echo "checked";} ?> type="radio" name="active" value="Yes">Yes
                  <input <?php if($active=="No"){echo "checked";} ?> type="radio" name="active" value="No">No
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">
                <button type="submit" name="submit" class="btn-admin-update">Update Food</button>

</div>
      </form>

      <?php
      error_reporting(E_ERROR | E_PARSE);

      if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $current_image = $_POST['current_image'];
        $active = $_POST['active'];

        // if(isset($_POST['active'])){
        //
        // }
        // else {
        //   $active = 'No';
        // }

        if(isset($_FILES['image']['name'])){
          $image_name = $_FILES['image']['name'];

          if($image_name!=""){
          $ext = end(explode('.',$image_name));
          $image_name = "Food_items_".rand(000,999).'.'.$ext;

          $source_path = $_FILES['image']['tmp_name'];
          $destination_path = "../images/uploaded_image/".$image_name;
          $upload = move_uploaded_file($source_path, $destination_path);

          if($upload == false){
            $_SESSION['upload'] = "Failed to upload image";
            header('location: food.php');
              ob_end_flush();
            die();
          }
          if($current_image!=""){
            $remove_path = "../images/uploaded_image/".$current_image;
            $remove = unlink($remove_path);

            if($remove==false){
              $_SESSION['remove-failed']="Failed to remove";
              header('location: food.php');
              die();
            }
          }
          }
        }
        else {
          $image_name = $current_image;
        }
          // include 'connect_database.php';
          $sql2 = "UPDATE tb_food SET
          Title='$title',
          price='$price',
          Description='$description',
          active='$active',
          image_name='$image_name'
          WHERE Id=$id";
          $res2=mysqli_query($link, $sql2);
          if($res2==true){
            $_SESSION['update']="Food updated successfully";
            // echo "successfully Updated";
            header("location: food.php");
  ob_end_flush();
          }
          else {
            // echo "Failed";
            $_SESSION['update']="Failed to update";
            // header("location: food.php");
          }
      // header('location: Food.php');
      }

       ?>
    </div>
  </div>


<?php include 'footer.php'; ?>
