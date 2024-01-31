<?php include 'header.php'; ?>

<div class="main-content">
  <div class="wrapper ">
    <!-- <strong>dashboard</strong> -->
    <div class="col-4">
      <h1>Manage Food</h1></div>

      <?php
      if(isset($_SESSION['add'])){
        echo $_SESSION['add'];
        unset($_SESSION['add']);
      }
      if(isset($_SESSION['delete'])){
        echo $_SESSION['delete'];
        unset($_SESSION['delete']);
      }
      if(isset($_SESSION['delete_2'])){
        echo $_SESSION['delete_2'];
        unset($_SESSION['delete_2']);
      }
      if(isset($_SESSION['update'])){
        echo $_SESSION['update'];
        unset($_SESSION['update']);
      }
      if(isset($_SESSION['upload'])){
        echo $_SESSION['upload'];
        unset($_SESSION['upload']);
      }

      if(isset($_SESSION['pwd-not-match'])){
        echo $_SESSION['pwd-not-match'];
      }


       ?>

      <a href="add-food.php" class="btn-food-add">Add Food</a>
      <br><br>
      <table class="m-auto w-80 table table-striped table-bordered border-dark">
        <tr>
          <th>Id</th>
          <th>Title</th>
          <th>Price</th>
          <th>Active</th>
          <th>Description</th>
          <th>Image</th>
          <th>Action</th>
        </tr>

        <?php
        include 'connect_database.php';
        $sql = "SELECT * FROM tb_food";
        $res = mysqli_query($link, $sql);
        if($res == TRUE){
          $count = mysqli_num_rows($res);
          $id_count = 1;
          if($count>0){
            while($rows = mysqli_fetch_assoc($res)){
              $id = $rows['Id'];
              $title=$rows['Title'];
              $description=$rows['Description'];
              $price=$rows['price'];
              $image_name=$rows['image_name'];
              $active=$rows['active'];

              ?>
              <tr>
                <td><?php echo $id_count++; ?> </td>
                <td><?php echo $title; ?></td>
                <td><?php echo $price; ?></td>
                <td><?php echo $active; ?></td>
                <td><?php echo $description; ?></td>
                <td><img src="../images/uploaded_image/<?php echo $image_name; ?>" width="75px"> </td>



                <td>
                <a href="update-food.php?id=<?php echo $id; ?>" class="btn-admin-update">Update Food</a>
                <a href="delete-food.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-admin-delete">  Delete Food</a>
                </td>
              </tr>

              <?php
            }
          }
        }
?>



      </table>

    </div>

  <!-- </div> -->

</div>
<?php include 'footer.php'; ?>
