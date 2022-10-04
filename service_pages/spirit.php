<?php include '../Controller/autoController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
     <link rel="stylesheet" href="service_pages/Pstyle.css">
     <link rel="stylesheet" href="Style/NavBar.css">
    <title>Spirituality</title>
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
              <iframe width="100%" height="700px" src="https://www.youtube.com/embed/7c5t6FkvUG0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
              <div class="carousel-item">
              <iframe width="100%" height="700px" src="https://www.youtube.com/embed/RdqOJlXvIOg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="carousel-item">
              <iframe width="100%" height="700px" src="https://www.youtube.com/embed/ZpQfo2_I-ug" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

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
        <h1 class="display-4 text-center mt-3 mb-2 text-secondary">What Is Spirituality?</h1>
        <p>Spirituality is a broad concept with room for many perspectives. In general, it includes a sense of connection to something bigger than ourselves, and it typically involves a search for meaning in life. As such, it is a universal human experience—something that touches us all. People may describe a spiritual experience as sacred or transcendent or simply a deep sense of aliveness and interconnectedness.

Some may find that their spiritual life is intricately linked to their association with a church, temple, mosque, or synagogue. Others may pray or find comfort in a personal relationship with God or a higher power. Still others seek meaning through their connections to nature or art. Like your sense of purpose, your personal definition of spirituality may change throughout your life, adapting to your own experiences and relationships.</p>
        
        <div>
            <div class="card  border border-warning shadow-lg p-3 mt-3" style="width: 100%;">
                <div class="card-body">
                  <h5 class="card-title">Experts’ definitions of spirituality</h5>
                  <p class="card-text">
                    <ul>
                      <li>Christina Puchalski, MD, Director of the George Washington Institute for Spirituality and Health, contends that "spirituality is the aspect of humanity that refers to the way individuals seek and express meaning and purpose and the way they experience their connectedness to the moment, to self, to others, to nature, and to the significant or sacred."</li>
                      <li>According to Mario Beauregard and Denyse O’Leary, researchers and authors of The Spiritual Brain, “spirituality means any experience that is thought to bring the experiencer into contact with the divine (in other words, not just any experience that feels meaningful).”</li>
                      <li>According to Mario Beauregard and Denyse O’Leary, researchers and authors of The Spiritual Brain, “spirituality means any experience that is thought to bring the experiencer into contact with the divine (in other words, not just any experience that feels meaningful).”</li>
                    </ul>
                  </p>
                </div>
              </div>
              
              <div class="card border border-warning p-3 shadow-lg rounded-3 mt-3" style="width: 100%;">
                  <div class="card-body">
                    <h5 class="card-title">Are spirituality and religion the same?</h5>
                    <p>Spirituality and religion are linked. But spirituality can be more general and include many other things. It can mean different things to different people. Or you can follow a common spiritual belief. You can be spiritual without being religious.

Religion and spirituality can help you to develop inner strength, peace, hope and optimism.</p>
                  </div>
                </div>
              <div class="card border border-warning p-3 shadow-lg rounded-3 mt-3" style="width: 100%;">
                  <div class="card-body">
                    <h5 class="card-title">What is religion?</h5>
                    <p class="card-text"><p style="text-align: justify;">Religion is linked with a particular faith, tradition or institution. If you are religious you may believe in a god. Everyone who follows the same religion will base their values on shared beliefs. But religion is open to interpretation. This means that even though people have shared core beliefs, they may have different values. Religious leaders are there to guide you through your religious journey.

If you follow a religion, this may mean that you accept guidance or certain practices. For example, you may have to do things at a certain time such as saying prayers. Or not eating certain foods.</p>
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
    <script src="https://kit.fontawesome.com/7e1cb02531.js"></script>
</body>
</html>