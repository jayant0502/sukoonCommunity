<?php include '../Controller/autoController.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Yoga</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="Style/NavBar.css">
    <link rel="stylesheet" href="service_pages/style.css">
</head>
  <body>
    <header class="justify-content-around">
        <span class="container"><a class="navbar-brand" href="home">Sukoon</a></span>
        <div class="menu">
          <ul class="d-flex m-3 align-items-center">
    
            <li>
              <!-- Default dropend button -->
              <div class="btn-group ">
                <?php if (isset($_SESSION['id'])) { ?>
                  <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo  ucfirst($_SESSION['username']); ?>
                  </button><?php } else { ?>
                  <a href="login"><button class="btn btn-light">
                      <?php echo  "LogIn/Register"; ?>
                    </button></a> <?php } ?>
                <ul class="dropdown-menu position-absolute btn-light">
                  <li><a class="dropdown-item" href="MyProfile" target="_self"><i class="fas fa-id-badge icons"></i>MY PROFILE</a></li>
                  <li>
                    <form method="post"><button type="submit" class="dropdown-item" name="logout"><i class="fas fa-sign-out-alt  icons"></i>Logout</a></form>
                  </li>
                </ul>
              </div>
            </li>
            <!-- <li><a href="user/login.php" id="login_reg">Login & Register</a></li> -->
          </ul>
    
        </div>
      </header> 
        <div class="wrap">>
      <div class="container bg-light rounded-3 mt-9 mb-5 shadow p-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <iframe width="100%" height="700px" src="https://www.youtube.com/embed/8R2FfRl6V8U" title="YouTube video player" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
              <div class="carousel-item">
                <iframe width="100%" height="700px" src="https://www.youtube.com/embed/s2NQhpFGIOg" title="YouTube video player" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="carousel-item">
                <iframe width="100%" height="700px" src="https://www.youtube.com/embed/7DoQMnmo0v8" title="YouTube video player" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
          </div>
        <h1 class="display-4 text-center mt-3 mb-2 text-secondary">11 Yoga Tips for Beginners</h1>
        <ol class="ml-3 fs-2 text-capitalize text-danger">
            <li>Know what is Yoga exactly</li>
            <li>Learn Yoga from a qualified teacher</li>
            <li>Inform any medical conditions if you have to the instructor</li>
            <li>Dress Comfortably!</li>
            <li>Be a Regular Yogi</li>
            <li>Stay Light!</li>
            <li>Warm-up before Hitting the Yoga Mat</li>
            <li>Keep a gentle smile and enjoy asanas</li>
            <li>Challenge Your Limits – One Step at a Time</li>
            <li>Every Yoga Asana Is Unique, Just Like You</li>
            <li>Relax to Recharge!</li>
        </ol> 
        <h3 class="h3 mt-4 text-success text-center ">Let us read about every yoga tip in more detail</h3>
        <div>
            <div class="card  border border-warning shadow-lg p-3 mt-3" style="width: 100%;">
                <div class="card-body">
                  <h5 class="card-title">1. Know What is Yoga Exactly</h5>
                  <p class="card-text"><p >As a beginner, often we equate yoga with some tough, limb-twisting poses. And aren't you sometimes concerned that: "I can't even touch my toes, how can I do yoga?" Yoga is not about touching your toes, or stretching 98 degrees to your northeast. It’s a simple process of uniting with yourself - using your breath, body and mind. And it’s easy and effortless.</p>
                  <p >So, never mind if you're not Ms. Flexible or Mr. Stretchable, or are venturing into yoga at the age of 40, or you have secret love handles that are stressing you out - just remove all those myths before <em><strong>beginning your yoga practice</strong></em>! The only one watching you is yourself - so just relax. This journey will bring much joy and relaxation to you!</p>
                  </p>
                </div>
              </div>
              
              <div class="card border border-warning p-3 shadow-lg rounded-3 mt-3" style="width: 100%;">
                  <div class="card-body">
                    <h5 class="card-title">2. Learn Yoga from a Qualified yoga teacher</h5>
                    <p class="card-text"><p style="text-align: justify;">It is <a href="https://www.artofliving.org/in-en/yoga/yoga-beginners/easy-yoga-poses-for-beginners">best to start learning yoga</a> under the guidance of a qualified <em><strong>yoga teacher</strong></em> who can lead you through the correct way of doing each technique. This would help you learn yoga asanas (postures) properly and avoid possible injuries. Some of the philosophies or techniques taught in yoga may be new but it is a good idea to keep an open mind, as it will help broaden your vision and enhance your yoga experience.</p>
                </p>
                  </div>
                </div>
              <div class="card border border-warning p-3 shadow-lg rounded-3 mt-3" style="width: 100%;">
                  <div class="card-body">
                    <h5 class="card-title">3. Inform if any medical conditions you have to the instructor</h5>
                    <p class="card-text"><p style="text-align: justify;">If you have a medical condition, inform your <a href="/in-en/node/64985" title="Sri Sri Yoga - The Art of Living">Sri Sri Yoga instructor</a> prior to the commencement of <em><strong>your yoga training</strong></em>. It will help the teacher customize your yoga asana practice and avoid any complications or injuries.</p>
                </p>
                  </div>
                </div>
              <div class="card border border-warning p-3 shadow-lg rounded-3 mt-3" style="width: 100%;">
                  <div class="card-body">
                    <h5 class="card-title">4. Know what to Wear during Yoga?</h5>
                    <p class="card-text"><p style="text-align: justify;">Wear comfortable clothing while going for the yoga class or when practicing <a href="/in-en/yoga/yoga-for-beginners/yoga-home" title="9 Tips to Practice Yoga at Home">yoga at home</a>. Also, avoid wearing belts or excessive jewelry as it could get in the way of your <em><strong>yoga practice</strong></em>.</p>
                </p>
                  </div>
                </div>
              <div class="card border border-warning p-3 shadow-lg rounded-3 mt-3" style="width: 100%;">
                  <div class="card-body">
                    <h5 class="card-title">5. Be a Regular Yogi: When to Practice Yoga?</h5>
                    <p class="card-text"><p style="text-align: justify;">Although it’s best to practice yoga asanas early in the morning, any time of the day is fine till you are regular with your practice. If mornings don’t suit your schedule, don’t let it be an excuse to give up practicing yoga completely!</p>
                </p>
                  </div>
                </div>
              <div class="card border border-warning p-3 shadow-lg rounded-3 mt-3" style="width: 100%;">
                  <div class="card-body">
                    <h5 class="card-title">6. Stay Light! : What &amp; How much to eat for better yoga?</h5>
                    <p class="card-text"><p style="text-align: justify;">It is advised to practice on an empty stomach or at least 2-3 hours after your last meal. Also, it’s advised to have at least three to four liters of water during the day as it will help you to flush the toxins that are released during your yoga practice, out of the body.</p>
                </p>
                  </div>
                </div>
              <div class="card border border-warning p-3 shadow-lg rounded-3 mt-3" style="width: 100%;">
                  <div class="card-body">
                    <h5 class="card-title">7. Warm-up before Hitting the Yoga Mat</h5>
                    <p class="card-text"><p style="text-align: justify;"><em><a href="/in-en/yoga/off-yoga-mat/sukshma-yoga-exercises-relax-you-7-minutes" title="Sukshma vyayama: The 7-minute relaxation exercise">Sukshma Vyayam</a></em> or gentle warm-up exercises help loosen up the body and prepare it for the yoga asanas coming ahead. Here are a few warm up exercises:</p>
                    <p style="text-align: justify;">&gt; Massaging the head, brows, nose and cheeks: Whenever we make a mistake, we instinctively place a hand on the head. This is a sign that blood circulation in the brain is less and a massage is needed!<br />&gt; Rotate your neck, both clockwise and anticlockwise to relieve any stiffness.<br />&gt; Pump your shoulders and shake those hands to shrug off the lethargy.</p>
                    </p>
                  </div>
                </div>
              <div class="card border border-warning p-3 shadow-lg rounded-3 mt-3" style="width: 100%;">
                  <div class="card-body">
                    <h5 class="card-title">8. Keep a gentle smile and enjoy asanas</h5>
                    <p class="card-text"><p style="text-align: justify;">Keeping a gentle smile relaxes the body and mind and helps you enjoy the yoga asanas much more. With a calm mind, you can push your body’s limits further and stretch more than usual.</p>
                </p>
                  </div>
                </div>
              <div class="card border border-warning p-3 shadow-lg rounded-3 mt-3" style="width: 100%;">
                  <div class="card-body">
                    <h5 class="card-title">9. Challenge Your Limits – One Step at a Time</h5>
                    <p class="card-text"><p style="text-align: justify;">The ancient yogic text, <em><a href="/in-en/yoga/patanjali-yogasutra" title="Yoga Sutras of Patanjali: Commentary by Gurudev Sri Sri Ravi Shankar">Patanjali Yoga Sutra</a></em>, defines yoga asana as <em>Sthira Sukham Asanam</em>. Do only as much as you comfortably can and then just stretch a bit more (to improve body flexibility). Remember to use the breath as a reference point - when it is light and long, then the muscles begin to relax; but when the breath is jagged or uneven, it means you have over-exerted.</p>
                    <p style="text-align: justify;">Going slightly beyond your comfort zone will keep the yoga practice interesting and will add a spark of challenge as you progress and adopt new yoga asanas.</p>
                    </p>
                  </div>
                </div>
              <div class="card border border-warning p-3 shadow-lg rounded-3 mt-3" style="width: 100%;">
                  <div class="card-body">
                    <h5 class="card-title">10. Every <strong>Yoga Asana</strong> Is Unique, Just Like You</h5>
                    <p class="card-text"><p style="text-align: justify;">Wherever you stand in your yoga practice, be happy with it and don’t compare yourself to other students in the yoga class. Remember that each body type is unique and different people are at different levels of expertise. Some might easily perform a particular yoga asana, while others may need a little more time and practice to get there. Therefore, don't feel pressurized and over-exert yourself. Your flexibility and efficiency in doing yoga postures will improve with regular practice.</p>
                    <p style="text-align: justify;">Do not be alarmed if you experience some soreness in the muscles during the initial days of the practice. But if the pain persists, inform your instructor immediately. The crux here is to be regular with your yoga practice and have patience. Just like any other discipline, it will take some time for the body to get used to the yoga asanas.</p>
                    </p>
                  </div>
                </div>
              <div class="card border border-warning p-3 shadow-lg rounded-3 mt-3" style="width: 100%;">
                  <div class="card-body">
                    <h5 class="card-title">11. Relax to Recharge!</h5>
                    <p class="card-text"><p style="text-align: justify;">As you complete your yoga asana practice, don't be in a great hurry to get up and start moving about with the tasks lined up for the day. It is a good idea to lie down in <a href="/in-en/yoga/health-and-wellness/restorative-sleep-relax-yourself-yoga-nidra" title="Yoga Nidra – The yogic power nap and why you need it">Yoga Nidra</a> for a few minutes, as it helps cool down the body and consolidate the energy produced through yoga asana practice. Yoga Nidra is also beneficial in completely relaxing the mind and body after the yoga workout.</p>
                </p>
                  </div>
                </div>
        </div>
      </div>
      </div>    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/7e1cb02531.js"></script> </body>
</html>