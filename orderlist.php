  <!-- header design -->
  <?php include('header.php'); ?>

  <?php
  $id=$_GET['id'];
  include './Admin panel/connect_database.php';

  $sql = "SELECT * FROM tb_food WHERE Id=$id";
  $res=mysqli_query($link, $sql);
  if($res==true){
    $count=mysqli_num_rows($res);
    if($count==1){
      $row=mysqli_fetch_assoc($res);
      // $id = $rows['Id'];
      $title=$row['Title'];
      $description=$row['Description'];
      $price=$row['price'];
      $image_name=$row['image_name'];
      $active=$row['active'];
    }
    else {
      header("location: Explore Food.php");
    }
  }

  ?>
    <section class="food-search">

      <div class="container">
        <h2 class="text-center">Fill this form to confirm your order.</h2>
        <form action="#" class="order" method="post">
          <fieldset>
            <!-- <legend>Selected Food:</legend> -->
            <div class="food-menu-img">
              <img src="./images/uploaded_image/<?php echo $image_name; ?>"  class="img-responsive img-curve">
            </div>
            <div class="food-menu-desc pt-2">
              <h3><?php echo $title; ?> </h3>
              <input type="hidden" name="title" value="<?php echo $title; ?>">
              <span>৳<?php echo $price; ?> <del>৳<?php echo $price+10; ?></del></span>
              <input type="hidden" name="price" value="<?php echo $price; ?>">
              <div class="order-label pt-2">Quantity</div>
              <input type="number" name="quantity" class="form-control" value="1" required>
            </div>
          </fieldset> <br>
          <fieldset>
            <legend>Delivery Details</legend>
            <div class="order-label pt-2">Full Name</div>
              <input type="text" name="full-name" placeholder="Enter your name" class="form-control" value="<?php echo $full_name; ?>" required>
            <div class="order-label pt-2">Phone Number</div>
              <input type="tel" name="contact" placeholder=" 01890xxxxxx" class="form-control" value="<?php echo $contact; ?>" required>
            <div class="order-label pt-2">Email</div>
              <input type="email" name="email" placeholder="example@gmail.com" class="form-control" value="<?php echo $email; ?>" required>
            <div class="order-label pt-2">Address</div>
              <textarea name="address" rows="3" placeholder=" Street, City, Country" class="form-control" required><?php echo $address; ?></textarea> <br>
            <input type="submit" name="submit" value="Confirm Order" class="main-btn">
          </fieldset>
        </form>
          </div>
    </section>

    <?php
    if(isset($_POST['submit'])){
      $food = $_POST['title'];
      $price = $_POST['price'];
      $quantity = $_POST['quantity'];
      $total = $price * $quantity;
      $order_date = date("Y-m-d h:i:sa");
      $status = "Ordered";
      $customer_name = $_POST['full-name'];
      $customer_contact = $_POST['contact'];
      $customer_email = $_POST['email'];
      $customer_address = $_POST['address'];

      $sql2 = "INSERT INTO tb_order SET
      customer_address='$customer_address',
      customer_contact='$customer_contact',
      customer_email='$customer_email',
      customer_name='$customer_name',
      food='$food',
      order_date='$order_date',
      price='$price',
      quantity='$quantity',
      status='$status',
      total='$total'";

      $res2 = mysqli_query($link, $sql2);
      if($res2 ==true){
        $_SESSION['order']="Food ordered succesfully";
        $_SESSION['Food_name']=$food;
        $_SESSION['total_price']=$total;
        header('location: Explore Food.php');
      }
      else {
        $_SESSION['order']="Failed to order food";
        header('location: orderlist.php');
      }
      ?>
      <!-- <p class="text-center"><b>Thanks for ordering our food. We will deliver it to your home very soon. Your total price is <span class="text-success">৳<?php echo $total; ?></span>.
      You'll pay it after receiving the food.</b> </p> -->
      <?php
    }

     ?>


<?php include('footer.php'); ?>
