
  <!-- header design -->
  <?php include('header.php'); ?>

  <?php
  if(isset($_SESSION['order'])){
    echo $_SESSION['order'];
    unset($_SESSION['order']);
  }

   ?>
  <!-- section-1 top-banner -->
  <section id="home">
    <div class="container-fluid px-0 top-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6">
            <h1>Good food choices are good investments.</h1>
            <p>You can easily select our food as your first choice as we made our food with a clean environment.
            </p>
            <div class="mt-4">
            <a href="Explore Food.php"><button class="main-btn">Order now <i class="fas fa-shopping-basket ps-3"></i></button></a>
              <!-- <button class="white-btn ms-lg-4 mt-lg-0 mt-4">Order now <i class="fas fa-angle-right ps-3"></i></button> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- section-2 counter -->
  <section id="counter">
    <section class="counter-section">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
            <h2>
              <span id="count1"></span>+
            </h2>
            <p>SAVINGS</p>
          </div>
          <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
            <h2>
              <span id="count2"></span>+
            </h2>
            <p>PHOTOS</p>
          </div>
          <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
            <h2>
              <span id="count3"></span>+
            </h2>
            <p>ROCKETS</p>
          </div>
          <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
            <h2>
              <span id="count4"></span>+
            </h2>
            <p>GLOBES</p>
          </div>
        </div>
      </div>
    </section>
  </section>

  <!-- section-3 about-->
   <section id="about">
     <div class="about-section wrapper">
       <div class="container">
         <div class="row align-items-center">
           <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
             <div class="card border-0">
               <img src="images/img/img-1.png" class="img-fluid">
             </div>
           </div>
           <div class="col-lg-5 col-md-12 text-sec">
            <h2>We pride ourselves on making real food from the best ingredients.</h2>
            <p>Mainly, we are selling our own store food through this website. Our details are given below –.</p>
            <ol>
              <li>Aurnab Barua</li>
              <p>Student of Aust, CSE Department <br> ID: 190204009</p>

              <li>Abu Hanjala</li>
              <p>Student of Aust, CSE Department <br> ID: 190204004</p>

            </ol>
              <!-- <button class="main-btn mt-4">Learn More</button> -->
           </div>
         </div>
       </div>
       <div class="container food-type">
         <div class="row align-items-center">
           <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
            <h2>We make everything by hand with the best possible ingredients.</h2>
            <p>We believe that, healthy food is necessary for our health. So, we try our best to make healthy food. We have-</p>
            <ul class="list-unstyled py-3">
              <li>Breakfast items</li>
              <li>Lunch items</li>
              <li>Dinner items</li>
            </ul>
            <!-- <button class="main-btn mt-4">Learn More</button> -->
           </div>
           <div class="col-lg-7 col-md-12">
             <div class="card border-0">
               <img src="images/img/img-2.png" class="img-fluid">
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>

  <!-- section-3 story-->
   <section id="story">
     <div class="story-section">
       <div class="container">
         <div class="row">
           <div class="col-sm-12">
             <div class="text-content">
              <h2>When a man's stomach is full it makes no
                difference whether he is rich or poor.</h2>
              <p>Taking healthy food, you can fulfill your stomach. We are always ready to serve you.</p>
                <!-- <button class="main-btn mt-3">Read More</button> -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>


  <!-- Section-5 testimonial-->
   <section id="testimonial">
     <div class="wrapper testimonial-section">
       <div class="container text-center">
         <div class="text-center pb-4">
           <h2>Testimonial</h2>
         </div>
         <div class="row">
          <div class="col-sm-12 col-lg-10 offset-lg-1">
            <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="carousel-caption">
                    <img src="images/review/review-1.jpg">
                    <p>"I have taken food from many shop. But, this shop is unique and the foods are very delicious. "</p>
                    <h5>Kamrul Rahman - UX Designer</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carousel-caption">
                    <img src="images/review/review-2.jpg">
                    <p>"There are many unique food items here and the foods are very delicious. "</p>
                    <h5>Maisha Islam - Doctor</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carousel-caption">
                    <img src="images/review/review-3.jpg">
                    <p>"I have taken food from this shop and the food was awesome. "</p>
                    <h5>Hasan Rahman - Civil Engineer</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
     </div>
   </section>

   <section id="book-food">
     <div class="book-food">
       <div class="container book-food-text">
         <div class="row text-center">
           <div class="col-lg-9 col-md-12">
            <h2>Baked fresh daily by bakers with passion.</h2>
           </div>
           <div class="col-lg-3 col-md-12 mt-lg-0 mt-4">
             <!-- <button class="main-btn">Learn more</button> -->
           </div>
         </div>
       </div>
     </div>
   </section>
  <!-- section-6 faq-->
   <section id="faq">
     <div class="faq wrapper">
       <div class="container">
         <div class="row">
           <div class="col-sm-12">
             <div class="text-center pb-4">
              <h2>Frequently Asked Questions</h2>
             </div>
           </div>
         </div>
         <div class="row pt-5">
           <div class="col-sm-6 mb-4">
            <h4><span>~</span>Is AB Food Online shop's Bread really baked fresh each day?</h4>
            <p>Yes, Sir/Madam. We make our bread n a fresh environment and try our best to keep our bread fresh.
            </p>
           </div>
           <div class="col-sm-6 mb-4">
            <h4><span>~</span>Do you use any animal fats or products to make food?</h4>
            <p>No, Sir/Madam. We don't use any animal fat or products. Our foods are pure natural.
            </p>
           </div>
           <div class="col-sm-6 mb-4">
            <h4><span>~</span>Can I order your products online?</h4>
            <p>Yes, Sir/Madam. You can use this website to order food in online. We will deliver it at your home.
            </p>
           </div>
           <div class="col-sm-6 mb-4">
            <h4><span>~</span>When are you opening a shop near me?</h4>
            <p>Our shop is located at Gulshan. We don't create any branch to our shop. If your home is far from us, you can order food in online.
              We will deliver it at your home.
            </p>
           </div>
         </div>
       </div>
     </div>
   </section>

  <!-- section-7 book-food-->


  <!-- section-8 newslettar-->
   <!-- <section id="newslettar">
     <div class="newslettar wrapper">
       <div class="container">
         <div class="row">
           <div class="sol-sm-12">
             <div class="text-content text-center pb-4">
              <h2>Hurry up! Subscribe our newsletter
                and get 25% Off</h2>
              <p>Limited time offer for this month. No credit card required. </p>
             </div>
             <form class="newsletter">
               <div class="row">
                 <div class="col-md-8 col-12">
                   <input class="form-control" placeholder="Email Address here" name="email" type="email">
                 </div>
                 <div class="col-md-4 col-12">
                   <button class="main-btn" type="submit">Subscribe</button>
                 </div>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </section> -->

  <!-- section-9 footer-->
  <?php include('footer.php'); ?>
