<?php include 'Controller/autoController.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sukoon</title>
  <link rel="stylesheet" href="Style/Lstyle.css" />
  <link rel="stylesheet" href="Style/NavBar_copy.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
  <header>
    <div class="logo">Sukoon</div>
    <div class="menu  pt-3">
      <ul>
        <li><a href="home">Home</a></li>
        <li><a href="#cards">Services</a></li>
        <li><a href="#blogs">Blogs</a></li>
        <li><a href="#form-sec" id="About">Contact us</a></li>
        <li><a href="login" id="login_reg"><?php if (isset($_SESSION['id'])) echo "Feed";
                                            else echo "Login/Register"; ?></a></li>
      </ul>
    </div>
  </header>
  <div class="wrapper" id="home">
    <div id="cont" class="text-center text-nowrap">
      <h1 id="simpleUsage"></h1>
    </div>
    <!--------------------------------- wave ----------------------------------->
    <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1" d="M0,128L60,117.3C120,107,240,85,360,80C480,75,600,85,720,117.3C840,149,960,203,1080,186.7C1200,171,1320,85,1380,42.7L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
  </div>
  <!-------------------------------- wave end ---------------------------------->
  <!---------------------------- banner section ------------------------------------->
  <section id="cards">
    <div class="content" data-aos="fade-up" data-aos-duration="2000">
      <h1>Welcome To Sukoon</h1>
      <figure>
  <blockquote class="blockquote">
    <p>"What mental health need is more sunlight,more condor and more conversation"</p>
  </blockquote>
  <figcaption class="blockquote-footer">
  Glenn Close
  </figcaption>
</figure>
      <p class="fst-italic">
      
      </p>
    </div>
    <!--------------------------------------- card  ----------------------------------->
    <div class="container0">

      <div class="card  shadow p-1 mb-5 bg-body rounded" data-aos="fade-up" data-aos-duration="2000" style="width: 18rem; height:414px;">
        <img src="assets/blog.svg" width="278" height="208" class="card-img-top " alt="...">
        <div class="card-body text-center">
          <h5 class="card-title text-capitalize">Write blogs and feel gratified</h5>
          <p class="card-text">Feel free to relieve your mental stress!</p>

          <a href="post" class="btn btn-light">Read more</a>

        </div>
      </div>
      <div class="card shadow p-1 mb-5 bg-body rounded" data-aos="fade-up" data-aos-duration="2000" style="width: 18rem; height:414px;">
        <img src="assets/meets.svg" height="215" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title text-capitalize">Learn from live Events</h5>
          <p class="card-text">Be the part of live sessions and live a better life by leaving back all your
            mental trauma</p>

          <a href="Events" class="btn btn-light">Read more</a>

        </div>
      </div>
      <div class="card shadow p-1 mb-5 bg-body rounded" data-aos="fade-up" data-aos-duration="2000" style="width: 18rem; height:414px;">
        <img src="assets/friends.svg" height="220" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title text-capitalize">You are not alone!</h5>
          <p class="card-text">Explore people and connect with their stories across globe. </p>

          <a href="#blogs" class="btn btn-light">Read more</a>

        </div>
      </div>
      <div class="card  shadow p-1 mb-5 bg-body rounded " data-aos="fade-up" data-aos-duration="2000" style="width: 18rem; height:414px;">
        <img src="assets/Meditation.svg" width="278" height="208" class="card-img-top">
        <div class="card-body text-center">
          <h5 class="card-title text-capitalize">Meditation hacks</h5>
          <p class="card-text">To conquer the anxiety of life, start meditation and live in the moment. </p>
          <a href="Meditation" class="btn btn-light">Read more</a>
        </div>

      </div>
      <div class="card shadow p-1 mb-5 bg-body rounded" data-aos="fade-up" data-aos-duration="2000" style="width: 18rem; height:414px;">
        <img src="assets/yoga.svg" class="card-img-top" width="278" height="208" alt="...">
        <div class="card-body text-center">
          <h4 class="card-title text-capitalize">All you need is Yoga</h4>
          <p class="card-text">Improve your mental health and add life to your years by embracing yoga in your life</p>

          <a href="Yoga" class="btn btn-light">Read more</a>

        </div>
      </div>
      <div class="card shadow p-1 mb-5 bg-body rounded" data-aos="fade-up" data-aos-duration="2000" style="width: 18rem; height:414px;">
        <img src="assets/spisvg.svg" class="card-img-top" width="278" height="208" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title text-capitalize">spiritual Awakening</h5>
          <p class="card-text">Spiritual well being is key to mental and physical well being! </p>

          <a href="Spirituality" class="btn btn-light">Read more</a>

        </div>
      </div>
      
     
      

    </div>
    <!------------------------------------------ card end ------------------------------------>
  </section>
  <!------------------------------------------- feed overview section starts-------------------------->
  <section class="blogs" id="blogs">
    <div class="container2 d-flex align-items-center" data-aos="fade-right" data-aos-duration="1500">
      <h3>Share your story with us</h3>
      <img src="assets/Lsvg.svg" alt="">
    </div>
    <div class="rightside ">
      <div class="owl-carousel owl-theme">
        <?php $sql = "SELECT * FROM `feeds` Where story!='' and Images!='' ";
        $query = mysqli_query($conn, $sql);
        while ($result = mysqli_fetch_array($query)) { ?>
          <div class="item">
            <div class="card shadow-lg p-2 mt-5 bg-body rounded" data-aos="fade-left" data-aos-duration="1500" style="width: 18rem;">
              <img src="Feed/<?php echo $result['Images']; ?>" class="card-img-top" height="250" alt="...">
              <div class="card-body">
                <p class="card-text"><?php echo nl2br(substr_replace($result['story'], "...", 100)); ?></p>
              </div>
            </div>
          </div><?php } ?>
        <!-- <div class="item">
          <div class="card shadow p-2 mt-5 bg-body rounded" data-aos="fade-up-left" data-aos-duration="2000" style="width: 18rem;">
            <img src="assets/Limg.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card shadow p-2 mt-5 bg-body rounded" data-aos="fade-up-left" data-aos-duration="2000" style="width: 18rem;">
            <img src="assets/Limg.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card shadow p-2 mt-5 bg-body rounded" data-aos="fade-up-left" data-aos-duration="2000" style="width: 18rem;">
            <img src="assets/Limg.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div> -->



      </div>
    </div>
    </div>

  </section>

  <!--------------------------------------------- section ends ---------------------------------->
  <!-- ================================================form section==================================== -->
  <section class="form-sec" id="form-sec">
    <div class="form-container" data-aos="zoom-in-up">
      <span class="big-circle"></span>
      <img src="assets/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            For any queries and details feel free to contact sukoon.
          </p>

          <div class="info">
            <div class="information">
              <img src="assets/location.png" class="icon" alt="" />
              <p>C21 business park</p>
            </div>
            <div class="information">
              <img src="assets/email.png" class="icon" alt="" />
              <p>sukoon@gmail.com</p>
            </div>
            <div class="information">
              <img src="assets/phone.png" class="icon" alt="" />
              <p>07272-222664</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">

          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="home" method="POST" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="username" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" name="feedback" class="btn" />
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- =================================svg================================= -->
  <footer>
    <div class="curve">
      <img src="assets/curve.png" alt="">
    </div>
    <div class="cont">
      <div class="footer-con">
         <h2 class="text-center text-light">About Us</h2>
          <p class="text-center ">Sukoon website is created by team of three members as a part of their major project.It aims to
            nurture mental well being.</p>
          <h5 class="text-center text-light">JAI DUBEY , JAYANT PAWAR , KHUSHALI CHAWREKAR</h5>
      </div>
      

    </div>
    <div class="social-icon">
      <a href="#">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="#">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <div class="copyright">
      <p>Copyright © 2021 Sukkon. All rights reserved.</p>

    </div>
  </footer>
  <!----------------------------------- scripts --------------------------------->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="undefined" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <?php if (isset($_SESSION['message'])) {
    include 'assets/Notification.php';
  }
  ?>
  <?php if (count($errors) > 0) : ?>
    <?php foreach ($errors as $error) : ?>
      <?php include 'assets/Notification.php'; ?>
    <?php endforeach; ?>

  <?php endif; ?>
  <script>
    AOS.init();
  </script>
  <!-- script for navbar -->
  <script type="text/javascript">
    window.addEventListener('scroll', function() {
      var header = document.querySelector('header');
      header.classList.toggle('sticky', window.scrollY > 0)
    })
  </script>
  <script src="https://cdn.jsdelivr.net/npm/typeit@7.0.4/dist/typeit.min.js"></script>
  <script>
    new TypeIt("#simpleUsage", {
        strings: "Live with <em><strong>Sukoon </strong></em>!",
        // strings: "Live with Sukoon !",
        startDelay: 100,
        speed: 40,
        loop: true,
        waitUntilVisible: true
      })
      .move(-14, {
        delay: 100
      })
      .delete(4, {
        delay: 100
      })
      .type("Explore", {
        delay: 100
      })
      .go();
  </script>
  <script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      items: 2,
      loop: true,
      center: true,
      margin: 10,
      autoplay: true,
      autoplayTimeout: 3200,
      autoplayHoverPause: true,


    });
    $('.play').on('click', function() {
      owl.trigger('play.owl.autoplay', [1000])
    })
    $('.stop').on('click', function() {
      owl.trigger('stop.owl.autoplay')
    })
  </script>
  <!-- ==============================form===================== -->
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="visit/app.js"></script>

</body>

</html>