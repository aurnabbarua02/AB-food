<?php include 'header.php'?>

<div class="main-content">
  <div class="wrapper">
    <h1 class="col-4">Update Order</h1>
    <br><br>

    <?php
    ob_start();
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      include 'connect_database.php';

      $sql = "SELECT * FROM tb_order WHERE Id=$id";
      $res=mysqli_query($link, $sql);
      if($res==true){
        $count=mysqli_num_rows($res);
        if($count==1){
          $row=mysqli_fetch_assoc($res);
          $food_name=$row['food'];
          $price=$row['price'];
          $quantity=$row['quantity'];
          $status=$row['status'];
        }
        else {
          header('location: order.php');

        }

      }

    }
    else {
      header('location: order.php');
    }
     ?>
    <form class=""  method="post">
      <div class="row g-3 align-items-center">
              <div class="col-md-2">
                <label for="food_name" class="col-form-label">Food Name</label>
              </div>
              <div class="col-md-10">
                <b><?php echo $food_name; ?></b>
              </div>
              <div class="col-md-2">
                <label for="food_price" class="col-form-label">Price</label>
              </div>
              <div class="col-md-10">
                <b><?php echo $price; ?></b>
              </div>
              <div class="col-md-2">
                <label for="quantity" class="col-form-label">Quantity</label>
              </div>
              <div class="col-md-10">
                <input type="number" class="form-control" name="quantity" value="<?php echo $quantity; ?>">
              </div>
              <div class="col-md-2">
                <label for="status" class="col-form-label">Status</label>
              </div>
              <div class="col-md-10">
                <select  name="status">
                  <option <?php if($status=="Ordered"){echo "selected";} ?> value="Ordered">Ordered</option>
                  <option <?php if($status=="On Delivery"){echo "selected";} ?> value="On Delivery">On Delivery</option>
                  <option <?php if($status=="Delivered"){echo "selected";} ?> value="Delivered">Delivered</option>
                  <option <?php if($status=="Cancelled"){echo "selected";} ?> value="Cancelled">Cancelled</option>
                </select>
              </div>
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <input type="hidden" name="food_name" value="<?php echo $food_name; ?>">
              <input type="hidden" name="price" value="<?php echo $price; ?>">
              <button type="submit" name="submit" class="btn-admin-update">Update Order</button>


    </form>

    <?php
    error_reporting(E_ERROR | E_PARSE);

    if(isset($_POST['submit'])){
      $id=$_POST['id'];
      $food_name=$_POST['food_name'];
      $price=$_POST['price'];
      $quantity=$_POST['quantity'];
      $total = $price * $quantity;
      $status=$_POST['status'];

      $sql2 = "UPDATE tb_order SET
      quantity='$quantity',
      total='$total',
      status='$status'
      WHERE Id=$id";

      $res2 = mysqli_query($link, $sql2);

      if($res2==true){
        $_SESSION['update']="Order updated succesfully";
        header('location: order.php');
        ob_end_flush();
      }
      else {
        $_SESSION['update']="Failed to update order";
        header('location: order.php');
      }
    }

     ?>

  </div>

</div>
<?php include 'footer.php' ?>
