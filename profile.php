<?php include 'header_general.php'; ?>
<br><br><br>

<h1 class="text-center mt-5">My Profile</h1>
<div class="container w-75">
  <div class="row">
    <div class="col col-md-6 pb-2">
      <img src="images/account_pic/<?php echo $picture; ?>" class="img-fluid" style="border-radius: 0.925rem;">
    </div>
    <div class="col col-md-6">
      <div class="row pb-4 pt-3">
        <div class="col col-md-6">
          <b>Name</b>
        </div>
        <div class="col col-md-6">
          <?php echo $full_name; ?>
        </div>

      </div>
      <div class="row pb-4">
        <div class="col col-md-6">
          <b>Email</b>
        </div>
        <div class="col col-md-6">
          <?php echo $email; ?>
        </div>

      </div>
      <div class="row pb-4">
        <div class="col col-md-6">
          <b>Contact</b>
        </div>
        <div class="col col-md-6">
          <?php echo $contact; ?>
        </div>

      </div>
      <div class="row pb-4">
        <div class="col col-md-6">
          <b>Address</b>
        </div>
        <div class="col col-md-6">
          <?php echo $address; ?>
        </div>

      </div>
      <hr>
      <h3>Latest Ordered Food</h3>
      <hr>
      <div class="row pb-4">
        <div class="col col-md-6">
          <b>Food</b>
        </div>
        <div class="col col-md-6">
          <?php echo $_SESSION['Food_name']; ?>
        </div>

      </div>
      <div class="row pb-4">
        <div class="col col-md-6">
          <b>Total Price</b>
        </div>
        <div class="col col-md-6">
          ৳<?php echo $_SESSION['total_price']; ?>
        </div>

      </div>
      <div class="row w-50 m-auto pt-4 pb-2">
      <a href="edit_profile.php"><button type="button" name="button" class="main-btn px-5">Edit Profile</button></a>

      </div>

    </div>

  </div>

</div>
<?php include 'footer.php'; ?>
