<?php include 'header.php'; ?>
    <div class="main-content">
    <div class="wrapper">
      <h1 class="col-4">Update Admin</h1>

      <?php
      $id=$_GET['id'];
      include 'connect_database.php';

      $sql = "SELECT * FROM tb_admin WHERE Id=$id";
      $res=mysqli_query($link, $sql);
      if($res==true){
        $count=mysqli_num_rows($res);
        if($count==1){
          $row=mysqli_fetch_assoc($res);
          $full_name=$row['Full_name'];
          $username=$row['user_name'];
          $password=$row['password'];
        }
        else {
          header("location: admin.php");
        }
      }
      ?>

      <form class="" method="post">
        <div class="row g-3 align-items-center">
                <div class="col-md-2">
                  <label for="full_name" class="col-form-label">Full Name</label>
                </div>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="full_name" value="<?php echo $full_name; ?>">
                </div>
                <div class="col-md-2">
                  <label for="username" class="col-form-label">User Name</label>
                </div>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                </div>
                <div class="col-md-2">
                  <label for="o_password" class="col-form-label">Old Password</label>
                </div>
                <div class="col-md-10">
                  <input type="password" class="form-control" name="o_password" placeholder="Enter your old password">
                </div>
                <div class="col-md-2">
                  <label for="password" class="col-form-label">Password</label>
                </div>
                <div class="col-md-10">
                  <input type="password" class="form-control" name="password" placeholder="Enter new password">
                </div>
                <div class="col-md-2">
                  <label for="c_password" class="col-form-label">Confirm Password</label>
                </div>
                <div class="col-md-10">
                  <input type="password" class="form-control" name="c_password" placeholder="Enter the password again">
                </div>
                  <button type="submit" name="submit" class="btn-admin-update">Update Admin</button>


              </div>


      </form>

    </div>
    </div>
    <?php
    error_reporting(E_ERROR | E_PARSE);

    if(isset($_POST['submit'])){
        if($_POST['o_password'] == $password && $_POST['password'] == $_POST['c_password']){
          $id = $_POST['id'];
          $full_name = $_POST['full_name'];
          $username = $_POST['username'];
          $password=$_POST['password'];


        // include 'connect_database.php';
        $sql = "UPDATE tb_admin SET
        Full_name='$full_name',
        user_name='$username',
        password='$password'
        WHERE Id='$id'";
        $res=mysqli_query($link, $sql);
        if($res==true){
          $_SESSION['update']="Admin updated successfully";
          header('location: admin.php');

        }

    else {
      $_SESSION['update']="Failed to update";
      header('location: admin.php');

    }
  }
  else {
    echo "**** Password not matched. Try again!";
    // header('location: update_admin.php');
  }
  }

     ?>

<?php include 'footer.php'; ?>
