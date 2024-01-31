
<?php include 'header.php'; ?>

<div class="main-content">
  <div class="wrapper ">
    <!-- <strong>dashboard</strong> -->
    <div class="col-4">
      <h1>Manage Order</h1></div>

      <?php
      // if(isset($_SESSION['add'])){
      //   echo $_SESSION['add'];
      // }
      // if(isset($_SESSION['delete'])){
      //   echo $_SESSION['delete'];
      // }
      if(isset($_SESSION['update'])){
        echo $_SESSION['update'];
        unset($_SESSION['update']);
      }
      // if(isset($_SESSION['pwd-not-match'])){
      //   echo $_SESSION['pwd-not-match'];
      // }

       ?>

      <!-- <a href="add admin.php" class="btn-admin-add">Add Admin</a> -->

      <table class="m-auto w-100 table table-striped table-bordered border-dark">
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Address</th>
          <th>Contact</th>
          <th>Email</th>
          <th>Food</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total</th>
          <th>Date</th>
          <th>Status</th>
          <th style="width: 12%;">Actions</th>
        </tr>

        <?php
        include 'connect_database.php';
        $sql = "SELECT * FROM tb_order ORDER BY Id DESC";
        $res = mysqli_query($link, $sql);
        if($res == TRUE){
          $count = mysqli_num_rows($res);
          $id_count = 1;
          if($count>0){
            while($rows = mysqli_fetch_assoc($res)){
              $id = $rows['Id'];
              $customer_name=$rows['customer_name'];
              $customer_address=$rows['customer_address'];
              $customer_contact=$rows['customer_contact'];
              $customer_email=$rows['customer_email'];
              $food=$rows['food'];
              $order_date=$rows['order_date'];
              $price=$rows['price'];
              $quantity=$rows['quantity'];
              $status=$rows['status'];
              $total=$rows['total'];

              ?>
              <tr>
                <td><?php echo $id_count++; ?> </td>
                <td><?php echo $customer_name; ?></td>
                <td><?php echo $customer_address; ?></td>
                <td><?php echo $customer_contact; ?></td>
                <td><?php echo $customer_email; ?></td>
                <td><?php echo $food; ?></td>
                <td><?php echo $quantity; ?></td>
                <td><?php echo $price; ?></td>
                <td><?php echo $total; ?></td>
                <td><?php echo $order_date; ?></td>
                <td><?php
                  if($status=="Ordered"){
                    echo "<label>$status</label>";
                  }
                  else if($status=="On Delivery"){
                    echo "<label style='color: orange';>$status</label>";
                  }
                  else if($status=="Delivered"){
                    echo "<label style='color: green';>$status</label>";
                  }
                  else if($status=="Cancelled"){
                    echo "<label style='color: red';>$status</label>";
                  }
                ?></td>
                <td>
                <a href="update-order.php?id=<?php echo $id; ?>" class="btn-admin-update">Update Order</a>
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
