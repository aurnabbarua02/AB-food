<?php include('header_general.php'); ?>

<section class="contact_us">
    <div class="container pt-3">
      <div class="row">
        <div class="col col-6 bg-danger text-light d-flex justify-content-center align-item-center">
          <div class="my-auto">
            <div class="box position-relative d-flex mb-3">
              <div class="icon pe-2"><i class="bi bi-geo-alt"></i></div>
              <div class="text">
                <h3>Address</h3>
                <p class="text-dark">AB Food Online Shop</p>
                <p class="text-dark">504, Gulshan, Dhaka</p>
              </div>
            </div>
            <div class="box position-relative d-flex mb-3">
              <div class="icon pe-2"><i class="bi bi-telephone"></i></div>
              <div class="text">
                <h3>Lets Talk</h3>
                <p class="text-dark">01419855746</p>
              </div>
            </div>
            <div class="box position-relative d-flex">
              <div class="icon pe-2"><i class="bi bi-envelope"></i></div>
              <div class="text">
                <h3>General Support</h3>
                <p class="text-dark">abonlineshop@gmail.com</p>
              </div>
            </div>

          </div>

        </div>
        <div class="col col-6 border pe-4 border-danger">
            <div class="col text-center my-3">
              <h3>Send Us A Message</h3>
            </div>

            <form class="row g-3"  method="post">
                <div class="col-md-12 border mb-4 ms-2 mt-5">
                  <label for="FirstName" class="form-label">TELL US YOUR NAME *</label>
                  <div class="d-flex">
                    <input type="text" name="f_name" class="form-control" id="FirstName" placeholder="First Name" value="<?php echo $full_name; ?>" required>
                    <input type="text" name="l_name" class="form-control" id="LastName" placeholder="Second Name">
                  </div>
                </div>

                <div class="col-md-12 border mb-4 ms-2">
                  <label for="email" class="form-label">ENTER YOUR EMAIL *</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Eg.example@email.com" value="<?php echo $email; ?>" required>
                </div>

                <div class="col-md-12 border mb-4 ms-2">
                  <label for="pho_num" class="form-label">ENTER PHONE NUMBER</label>
                  <input type="text" name="pho_num" class="form-control" id="pho_num" placeholder="Eg.+1800 000000" value="<?php echo $contact; ?>">
                </div>

                <div class="col-md-12 border mb-4 ms-2">
                  <label for="message" class="form-label">MESSAGE *</label>
                  <textarea class="form-control" id="message"rows="3" name="message" placeholder="Write us a message" required></textarea>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto mb-2">
                  <button type="submit" name="submit" class="main-btn">SEND MESSAGE</button>
                </div>

            </form>

        </div>
      </div>
    </div>

  </section>
  <?php
  if(isset($_POST['submit'])){
    $fullname = $_POST['f_name']." ".$_POST['l_name'];
    $contact = $_POST['pho_num'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sqlinsert = "INSERT INTO tb_contact SET
    Full_name='$fullname',
    Contact='$contact',
    Email='$email',
    Message='$message'
    ";

    include 'Admin panel/connect_database.php';
    $resultInsert = mysqli_query($link, $sqlinsert) or die(mysql_error());
    $lastInsertID = mysqli_insert_id($link);

    if ($resultInsert == true) {
      $_SESSION['add_contact']="Contact added successfully";
      // header("location: log-regis.php");
      ?>
      <div class="text-center">
        Successfully sent to the owner
      </div>
      <?php
    }
    else {
      ?>
      <div class="text-center">
        Failed. Try again!
      </div>
      <?php
    }

  }

   ?>
  <br><br>
  <?php include('footer.php'); ?>
