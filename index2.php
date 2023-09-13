<?php 
    include 'navbar.php'; 
    // include 'login.php';
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
      <h1>We Help The Missing</h1>
      <h2>Giving Help and Hope to the Loved Ones of the Missing. Every missing person is someone's child.</h2>
      <a href="register.php?#register" class="btn-get-started scrollto">Sign-Up</a>
      <img src="assets/img/download.jpg" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150" width="400">
    </div>

  </section><!-- End Hero -->

  <main id="main">

 <style>
    .card img:hover {
      opacity: .9;
    }
    .card a {
      padding: 5px;
      border-radius: 5px;
    }
    .card a:hover {
      opacity: .5;
    }
  </style>
 <section id="missing" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Missing Persons</h2>
          <p>This Section Displays the Missing People</p>
        </div>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <div class="row d-flex justify-content-center">
            <?php 
                 include 'config.php';
                $fetch = mysqli_query($conn, "SELECT * FROM posted LIMIT 6");
                while ($row = mysqli_fetch_array($fetch)) {

                $i = "";
                $res=$row['posted_image'];
                $res=explode(",",$res);
                $count=count($res);
            ?>
            <div class="col-md-4">
              <div class="testimonial-item bg-light p-3"  style="position: relative;overflow: hidden;">
                <p class="text-center">
                  <i class="bx bxs-quote-alt-left quote-icon-left text-danger"></i>
                  <h2 class="text-danger text-center"><strong>MISSING</strong></h2>
                  <!-- <i class="bx bxs-quote-alt-right quote-icon-right text-danger"></i> -->
                </p>
                <div class="card">
                    <?php for($i=0;$i<1;$i++) { ?>
                      <img src="images-missing/<?= $res[$i]?>" alt="" width="100%" style="padding: 5px; height: 200px;">
                    <?php } ?>

                    <a href="view_posted.php?posted_Id=<?php echo $row['post_Id']; ?>" class="badge bg-light p-1 rounded-pill text-secondary " type="button" style="position: absolute;left: 105px; top: 170px; text-decoration: none;"><b>View more</b></a>
                </div>
                <h3 style="font-size: 15px"><?php echo $row['name']; ?></h3>
                <h4  style="font-size: 13px"><?php echo $row['city_from']; ?></h4>
                <a  href="login.php" class="btn btn-light text-dark mt-2" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;font-size: 13px">FOUND</a>
              </div>
            </div>
          <?php } ?>

          </div>
          </div>
        </div>
        <a href="all_missing_person.php?#missing" style="position: absolute;right: 23px; text-decoration: none;"><b>View All</b></a>
      </div>
    </section>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="row no-gutters">
          <div class="content col-xl-20" data-aos="fade-right">
            <div class="content">
              <h3 style="text-align: center;">About i-LaFI</h3>
              <p style="text-align: center;">
                &nbsp;&nbsp;Our goal is to assist in finding those who have gone missing and to provide support, direction, solace, and hope to the families during this trying time and beyond.
                We are well aware of the impending threats that a missing person may face, and we completely comprehend the suffering these families experience when a loved one goes missing. The clock is ticking. Living in the "vacuum of the unknown" with nowhere to turn, in our opinion, is the worst possible situation.
                We pledge to offer every tool at our disposal to assist.
              </p>
            </div>
          </div>  
         </div>
        </div>
    </section>
          
     <!-- ======= Team Section ======= -->
     <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Project Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Per Louie Clara</h4>
                  <span>Chief Executive Officer</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Iris Nicole Cunanan</h4>
                  <span>Product Manager</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Jayson Maximo</h4>
                  <span>CTO</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Raphael Sajorda</h4>
                  <span>Accountant</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Testimonials</h2>
          <p>This Section Display all the Testimonial uploaded by the users</p>
        </div>
          <div class="row d-flex justify-content-center">
           <?php
                function custom_echo($x, $length)
                {
                  if(strlen($x)<=$length)
                  {
                    echo $x;
                  }
                  else
                  {
                    $y=substr($x,0,$length). '...';
                    echo $y;
                  }
                }
                include 'config.php';
                $fetch = mysqli_query($conn, "SELECT * FROM testimony JOIN users ON testimony.user_Id=users.user_Id LIMIT 3");
                while($r = mysqli_fetch_array($fetch)) {

                  $testimony_Id = $r['testimony_Id'];
            ?>
            <div class="col-lg-4">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?php echo custom_echo($r['testimony'], 200); ?>
                 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="images-testimony/<?php echo $r['testimony_image']; ?>" class="testimonial-img" alt="" style="width: 80px;height: 80px;border-radius: 50%;">
                <h3><?php echo ''.$r['firstname'].' '.$r['middlename'].' '.$r['lastname'].' '.$r['suffix'].''; ?></h3>
              </div>
            </div>
          <?php } ?>
          </div>
        <a href="all_testimonials.php?#testimonials" style="position: absolute;right: 23px; text-decoration: none;"><b>View All</b></a>

      </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Pulilan Bulacan</h3>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>ilafi@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+639333517602<br>+639331230582</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 mt-4 mt-md-0">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include 'footer.php'; ?>
