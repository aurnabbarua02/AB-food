<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login - AB Food order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/style.css">
<!-- <style media="screen">
  *{
    background-image: url(../images/bg/bg-1.jpg);
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
  }
</style> -->
  </head>
  <body>
<div class="login w-50">
  <h1 class="text-center">Login</h1>

  <?php
  session_start();
  if(isset($_SESSION['login'])){
    echo $_SESSION['login'];
    unset($_SESSION['login']);
  }
  if(isset($_SESSION['no-login-message'])){
    echo $_SESSION['no-login-message'];
    unset($_SESSION['no-login-message']);
  }
   ?>
  <form class="" method="post">
    <div class="row g-3 align-items-center">
      <div class="col-md-2">
        <label for="username" class="col-form-label"><b>User Name</b></label>
      </div>
      <div class="col-md-10">
        <input type="text" name="username" class="form-control" placeholder="Enter your username">
      </div>
      <div class="col-md-2">
        <label for="password" class="col-form-label"><b>Password</b></label>
      </div>
      <div class="col-md-10">
        <input type="password" name="password" class="form-control" placeholder="Enter your password">
      </div>
        <button type="submit" name="submit" class="btn-admin-update">Login</button>

    </div>

  </form>
  <br>

</div>
  </body>
</html>
<?php
if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM tb_admin WHERE user_name='$username' AND password='$password'";
  include 'connect_database.php';
  $res = mysqli_query($link, $sql);
  $count = mysqli_num_rows($res);
  if($count==1){
    $_SESSION['login']="successfully logged in";
    $_SESSION['user']= $username;
    header('location: index.php');
    // echo "<br>Success";
  }
  else {
    $_SESSION['login']="<div>Username or password didn't match. Try again!</div>";
    header('location: login.php');
    // echo "<br>Error";
  }
}

 ?>
