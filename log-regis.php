<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login - AB Food order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- <style media="screen">
      *{
        background-image: url(images/bg/background_login.jpg);
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
      }
    </style> -->
  </head>
  <body>

<div class="login w-50">
  <h1 class="text-center">AB Food Online</h1>

  <?php
  session_start();
  // ob_start();
  // if(isset($_SESSION['login'])){
  //   echo $_SESSION['login'];
  //   unset($_SESSION['login']);
  // }
  // if(isset($_SESSION['no-login-message'])){
  //   echo $_SESSION['no-login-message'];
  //   unset($_SESSION['no-login-message']);
  // }
   ?>
  <!-- <form class=""  method="post"> -->
    <div class="row g-3 align-items-center">
      <div class="col-md-12 text-center">
    <a href="new_account.php"><button type="button" name="button" class="main-btn">Create New Account</button></a>

      </div>
      <div class="col-md-12 text-center">
      <a href="login.php"><button type="button" name="button" class="main-btn">Log In</button></a>


      </div>
        <!-- <button type="submit" name="submit" class="btn-admin-update">Login</button> -->

    </div>

  <!-- </form> -->
  <br>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
