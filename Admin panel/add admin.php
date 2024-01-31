<?php include 'header.php'; ?>

<div class="main-content">
  <div class="wrapper">
    <h1 class="col-4">Add Admin</h1>
<br><br>
<?php if(isset($_SESSION['add'])){
  echo $_SESSION['add'];
} ?>
    <form method="post">
      <div class="row g-3 align-items-center">
        <div class="col-md-2">
          <label for="full_name" class="col-form-label">Full Name</label>
        </div>
        <div class="col-md-10">
          <input type="text" name="full_name" class="form-control" placeholder="Enter your name">
        </div>
        <div class="col-md-2">
          <label for="username" class="col-form-label">User Name</label>
        </div>
        <div class="col-md-10">
          <input type="text" name="username" class="form-control" placeholder="Enter your username">
        </div>
        <div class="col-md-2">
          <label for="password" class="col-form-label">Password</label>
        </div>
        <div class="col-md-10">
          <input type="password" name="password" class="form-control" placeholder="Enter your password">
        </div>
          <button type="submit" name="submit" class="btn-admin-update">Add Admin</button>


      </div>


    </form>

  </div>

</div>
<?php
error_reporting(E_ERROR | E_PARSE);
if (isset($_POST['submit'])) {
  $full_name = $_POST['full_name'];
  $username = $_POST['username'];
  $password =$_POST['password'];

  $sqlinsert = "INSERT INTO tb_admin SET
  Full_name='$full_name',
  user_name='$username',
  password='$password'
  ";
  // $host = 'localhost';
  // $user = 'root';
  // $password = '';
  // $db = 'food_order';
  // $link = mysqli_connect($host, $user, $password, $db);

  include 'connect_database.php';
  $resultInsert = mysqli_query($link, $sqlinsert) or die(mysql_error());
  $lastInsertID = mysqli_insert_id($link);

  if ($resultInsert == true) {
    $_SESSION['add']="Admin added successfully";
    header("location: http://localhost/My%20new%20website%20for%20project/Admin%20panel/admin.php");
  }
  else {
    echo "failed";
  }


}

 ?>
 <?php include 'footer.php'; ?>
