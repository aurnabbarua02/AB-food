<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login - AB Food order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
<div class="login w-50">
  <h1 class="text-center">Create New Account</h1>

  <?php
  session_start();

  // if(isset($_SESSION['login'])){
  //   echo $_SESSION['login'];
  //   unset($_SESSION['login']);
  // }
  // if(isset($_SESSION['no-login-message'])){
  //   echo $_SESSION['no-login-message'];
  //   unset($_SESSION['no-login-message']);
  // }
   ?>
  <form class="" method="post" enctype="multipart/form-data">
    <div class="row g-3 align-items-center">
      <div class="col-md-2">
        <label for="fullname" class="col-form-label">Name</label>
      </div>
      <div class="col-md-10">
        <input type="text" name="fullname" class="form-control" placeholder="Enter your name" required>
      </div>
      <div class="col-md-2">
        <label for="password" class="col-form-label">Password</label>
      </div>
      <div class="col-md-10">
        <input type="password" name="password" class="form-control" placeholder="Enter a password" required>
      </div>
      <div class="col-md-2">
        <label for="address" class="col-form-label">Address</label>
      </div>
      <div class="col-md-10">
        <input type="text" name="address" class="form-control" placeholder="Enter your address" required>
      </div>
      <div class="col-md-2">
        <label for="contact" class="col-form-label">Phone Number</label>
      </div>
      <div class="col-md-10">
        <input type="text" name="contact" class="form-control" placeholder="Enter your phone number" required>
      </div>
      <div class="col-md-2">
        <label for="pic" class="col-form-label">Your Picture</label>
      </div>
      <div class="col-md-10">
        <input type="file" class="form-control" name="image" required>
      </div>
      <div class="col-md-2">
        <label for="email" class="col-form-label">Email</label>
      </div>
      <div class="col-md-10">
        <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
      </div>
        <button type="submit" name="submit" class="btn-admin-update">Create Account</button>

    </div>

  </form>
  <br>

</div>
  </body>
</html>
<?php
if(isset($_POST['submit'])){
  $fullname = $_POST['fullname'];
  $password = $_POST['password'];
  $address = $_POST['address'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];

  if(isset($_FILES['image']['name'])){
    $image_name = $_FILES['image']['name'];
    $ext = end(explode('.',$image_name));
    $image_name = "User_Account_".rand(000,999).'.'.$ext;

    $source_path = $_FILES['image']['tmp_name'];
    $destination_path = "images/account_pic/".$image_name;
    $upload = move_uploaded_file($source_path, $destination_path);


    if($upload == false){
      $_SESSION['upload'] = "Failed to upload image";
      // header('location: new_account.php');
      echo "Failed to upload image";
      die();
    }
  }
  else {
    $image_name ="";
  }

  $sqlinsert = "INSERT INTO tb_account SET
  Full_name='$fullname',
  password='$password',
  Contact='$contact',
  Address='$address',
  Picture='$image_name',
  Email='$email'
  ";

  include 'Admin panel/connect_database.php';
  $resultInsert = mysqli_query($link, $sqlinsert) or die(mysql_error());
  $lastInsertID = mysqli_insert_id($link);

  if ($resultInsert == true) {
    $_SESSION['add_account']="Account added successfully";
    header("location: log-regis.php");
  }
  else {
    echo "failed";
  }

}

 ?>
