<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <title>AB Food</title>
  <!-- bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  <!-- OWN CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- <link rel="stylesheet" href="css/responsive-style.css"> -->
</head>

<body>

<header>
  <nav class="navbar navbar-expand-lg navigation-wrap">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="images/logo_main.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-stream navbar-toggler-icon"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Explore Food.php">Explore Foods</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#testimonial">Reviews</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact form.php">Contacts</a>
          </li>
          <li class="nav-item">
            <?php
            error_reporting(E_ERROR | E_PARSE);

            session_start();
            ob_start();

            if(isset($_SESSION['useremail'])){
              $useremail = $_SESSION['useremail'];
              ?><a class="nav-link" href="logout.php">Logout</a>
              <?php
            }
            else {
              ?>
              <a class="nav-link" href="log-regis.php">Login</a>
              <?php
              $useremail="";
            }

             ?>
          </li>
          <?php

          $picture='user.png';

          include 'Admin panel/connect_database.php';
          $sql = "SELECT * FROM tb_account WHERE Email='$useremail'";
          $res=mysqli_query($link, $sql);
          if($res==true){
            $count=mysqli_num_rows($res);
            if($count==1){
              $row=mysqli_fetch_assoc($res);
              $full_name=$row['Full_name'];
              $email=$row['Email'];
              $contact=$row['Contact'];
              $address=$row['Address'];
              $picture=$row['Picture'];
              $password=$row['password'];
              $id=$row['Id'];
// echo $picture;
            }
            else {
              $picture='user.png';
            }

          }
          else {
            $picture='user.png';
          }


          ?>
          <li class="nav-item">
            <?php
            if($picture=='user.png'){
            ?>  <img src="images/account_pic/<?php echo $picture; ?>" width="40px">
            <?php
            }
            else {
            ?>  <a href="profile.php"><img src="images/account_pic/<?php echo $picture; ?>" width="40px"></a>
            <?php
            }

             ?>
          </li>


          <!-- <li><button class="main-btn">1200 345 123</button></li> -->
        </ul>
      </div>
    </div>
  </nav>
</header>
