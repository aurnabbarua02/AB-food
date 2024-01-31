<?php include 'header.php'; ?>

<div class="main-content">
  <div class="wrapper ">
    <!-- <strong>dashboard</strong> -->
    <div class="col-4">
      <h1>All Comments</h1></div>


      <!-- <a href="add admin.php" class="btn-admin-add">Add Admin</a> -->
      <br><br>
      <table class="m-auto w-75 table table-striped table-bordered border-dark">
        <tr>
          <th>Id</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Contact</th>
          <th>Message</th>

        </tr>

        <?php
        include 'connect_database.php';
        $sql = "SELECT * FROM tb_contact";
        $res = mysqli_query($link, $sql);
        if($res == TRUE){
          $count = mysqli_num_rows($res);
          $id_count = 1;
          if($count>0){
            while($rows = mysqli_fetch_assoc($res)){
              $id = $rows['Id'];
              $full_name=$rows['Full_name'];
              $email=$rows['Email'];
              $contact=$rows['Contact'];
              $message=$rows['Message'];

              ?>
              <tr>
                <td><?php echo $id_count++; ?> </td>
                <td><?php echo $full_name; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $contact; ?></td>
                <td><?php echo $message; ?></td>
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
