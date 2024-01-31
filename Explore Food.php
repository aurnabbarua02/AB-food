  <!-- header design -->
  <?php include('header_general.php'); ?>



  <!-- section-4 explore food-->
   <section id="explore-food">
     <div class="explore-food wrapper">
       <div class="container">
         <div class="row">
           <div class="col-sm-12">
             <div class="text-content text-center">
              <h2>Explore Our Foods</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus bibendum in sit
                amet leo. Mauris feugiat erat tellus. Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
             </div>
           </div>
         </div>
         <div class="row pt-5">
           <?php
           include './Admin panel/connect_database.php';
           $sql = "SELECT * FROM tb_food WHERE active='Yes'";
           $res = mysqli_query($link, $sql);
           if($res == TRUE){
             $count = mysqli_num_rows($res);
             $id_count = 1;
             if($count>0){
               while($rows = mysqli_fetch_assoc($res)){
                 $id = $rows['Id'];
                 $title=$rows['Title'];
                 $description=$rows['Description'];
                 $price=$rows['price'];
                 $image_name=$rows['image_name'];
                 $active=$rows['active'];

?>
    <div class="col-lg-4 col-md-6 mb-lg-0 mb-5 pb-3">
      <div class="card">
        <img src="./images/uploaded_image/<?php echo $image_name; ?>" class="img-fluid">
        <div class="pt-3">
          <h4><?php echo $title; ?></h4>
          <p><?php echo $description; ?></p>
          <span>৳<?php echo $price; ?> <del>৳<?php $price = $price + 10; echo $price; ?></del></span>
          <a href="orderlist.php?id=<?php echo $id; ?>">  <button class="mt-4 main-btn">Order Now</button></a>
        </div>
      </div>
    </div>
    <?php

               }
             }
           }
    ?>

         </div>
       </div>
     </div>
   </section>
   <?php include('footer.php'); ?>
