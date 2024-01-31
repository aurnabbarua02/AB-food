
<!DOCTYPE html>

<?php
session_start();
include 'login-check.php';
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <title>AB Food Admin panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/style.css">

  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navigation-wrap bg-light">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="../images/logo_main.png"></a>
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
                <a class="nav-link" href="admin.php">Admin</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="food.php">Food</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="order.php">Orders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="comments.php">Comments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
              <!--<li class="nav-item">
                <a class="nav-link" href="contact form.php">Contacts</a>
              </li> -->
              <!-- <li><button class="main-btn">1200 345 123</button></li> -->
            </ul>
          </div>
        </div>
      </nav>
    </header>
