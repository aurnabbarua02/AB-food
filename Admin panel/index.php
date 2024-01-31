<?php include 'header.php'; ?>

<div class="main-content">
  <div class="wrapper">
    <h1 class="col-4">Dashboard</h1>
    <br><br>
    <?php
    if(isset($_SESSION['login'])){
      echo $_SESSION['login'];
      unset($_SESSION['login']);
    }

    include 'connect_database.php';
     ?>
     <br><br>
     <div class="container">
       <div class="row">
         <div class="col-lg-4 col-md-6 mb-lg-0 mb-5 pb-3">
             <div class="pt-3 text-center">
               <?php
               $sql1 = "SELECT * FROM tb_food";
               $res1 = mysqli_query($link, $sql1);
               $count1 = mysqli_num_rows($res1);

                ?>
               <h4><?php echo $count1; ?></h4>
               <p>Food</p>
             </div>
         </div>
         <div class="col-lg-4 col-md-6 mb-lg-0 mb-5 pb-3">
             <div class="pt-3 text-center">
               <?php
               $sql2 = "SELECT * FROM tb_order";
               $res2 = mysqli_query($link, $sql2);
               $count2 = mysqli_num_rows($res2);

                ?>
               <h4><?php echo $count2; ?></h4>
               <p>Total Orders</p>
             </div>
         </div>
         <div class="col-lg-4 col-md-6 mb-lg-0 mb-5 pb-3">
             <div class="pt-3 text-center">
               <?php
               $sql3 = "SELECT SUM(total) AS Total FROM tb_order WHERE status='Delivered'";
               $res3 = mysqli_query($link, $sql3);
               $row3 = mysqli_fetch_assoc($res3);
               $total_revenue = $row3['Total'];
                ?>
               <h4>৳ <?php echo $total_revenue; ?></h4>
               <p>Revenue Generated</p>
             </div>
         </div>

       </div>
     </div>
  </div>
</div>
<?php include 'footer.php'; ?>
