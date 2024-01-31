<?php include 'header_general.php'; ?>
<br><br><br>
<?php ob_start(); ?>
<h1 class="text-center mt-5">Edit Profile</h1>
  <form class=""  method="post">
<div class="container w-75">
  <div class="row">
    <div class="col col-md-6 pb-2">
      <img src="images/account_pic/<?php echo $picture; ?>" class="img-fluid" style="border-radius: 0.925rem;">
    </div>
    <div class="col col-md-6">



      <div class="row pb-4 pt-5">
        <div class="col col-md-6">
          <b>Name</b>
        </div>
        <div class="col col-md-6">
        <input type="text" name="full_name" class="form-control" value="<?php echo $full_name; ?>">
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
          <b>Password</b>
        </div>
        <div class="col col-md-6">
        <input type="text" name="password" class="form-control" value="<?php echo $password; ?>">
        </div>

      </div>
      <div class="row pb-4">
        <div class="col col-md-6">
          <b>Contact</b>
        </div>
        <div class="col col-md-6">
        <input type="text" name="contact" class="form-control" value="<?php echo $contact; ?>">
        </div>

      </div>
      <div class="row pb-4">
        <div class="col col-md-6">
          <b>Address</b>
        </div>
        <div class="col col-md-6">
          <textarea name="address" rows="3" class="form-control"><?php echo $address; ?></textarea>

        </div>

      </div>
      <div class="row w-50 m-auto p-4">
        <button type="submit" name="submit" class="main-btn">Done</button>
      </div>

    </div>

  </div>

</div>
</form>

<?php
if(isset($_POST['submit'])){
  $fullname = $_POST['full_name'];
  $contact = $_POST['contact'];
  $password = $_POST['password'];
  $address = $_POST['address'];

  $sql = "UPDATE tb_account SET
  Full_name='$full_name',
  Contact='$contact',
  password='$password',
  Address='$address'
  WHERE Email='$email'";
  $res=mysqli_query($link, $sql);
  if($res==true){
    // $_SESSION['update']="Profile updated successfully";
    header("location: profile.php");
    ob_end_flush();
  }
  else {
    echo "Error! Try again later.";
  }
}

 ?>

<?php include 'footer.php'; ?>
