<?php include 'header.php'; ?>

<div class="main-content">
  <div class="wrapper ">
    <!-- <strong>dashboard</strong> -->
    <div class="col-4">
      <h1>Manage Admin</h1></div>

      <?php
      if(isset($_SESSION['add'])){
        echo $_SESSION['add'];
        unset($_SESSION['add']);
      }
      if(isset($_SESSION['delete'])){
        echo $_SESSION['delete'];
        unset($_SESSION['delete']);
      }
      if(isset($_SESSION['update'])){
        echo $_SESSION['update'];
        unset($_SESSION['update']);
      }
      if(isset($_SESSION['pwd-not-match'])){
        echo $_SESSION['pwd-not-match'];
      }

       ?>

      <a href="add admin.php" class="btn-admin-add">Add Admin</a>
      <br><br>
      <table class="m-auto w-75 table table-striped table-bordered border-dark">
        <tr>
          <th>Id</th>
          <th>Full Name</th>
          <th>User name</th>
          <th class="col-md-4">Actions</th>
        </tr>

        <?php
        include 'connect_database.php';
        $sql = "SELECT * FROM tb_admin";
        $res = mysqli_query($link, $sql);
        if($res == TRUE){
          $count = mysqli_num_rows($res);
          $id_count = 1;
          if($count>0){
            while($rows = mysqli_fetch_assoc($res)){
              $id = $rows['Id'];
              $full_name=$rows['Full_name'];
              $username=$rows['user_name'];

              ?>
              <tr>
                <td><?php echo $id_count++; ?> </td>
                <td><?php echo $full_name; ?></td>
                <td><?php echo $username; ?></td>
                <td>
                <a href="update_admin.php?id=<?php echo $id; ?>" class="btn-admin-update">  Update Admin</a>
                <a href="http://localhost/My%20new%20website%20for%20project/Admin%20panel/delete_admin.php?id=<?php echo $id; ?>" class="btn-admin-delete">  Delete Admin</a>
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
