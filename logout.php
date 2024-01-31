<?php
// include 'connect_database.php';
session_start();

session_destroy();
header('location: index.php');
 ?>
