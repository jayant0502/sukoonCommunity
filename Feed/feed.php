<?php include '../Controller/autoController.php'; 
if(!isset($_SESSION['id'])){
  header('location: login');
  exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Style/NavBar.css" />
  <link rel="stylesheet" type="text/css" href="feed/feed.css" />
  <title>FEED</title>
</head>

<body>


  <header class="justify-content-center">
    <span class="container"><a class="navbar-brand" href="home">Sukoon</a></span>
    <div class="menu">
      <ul class="d-flex m-3 align-items-center">

        <li>
          <!-- Default dropend button -->
          <div class="btn-group ">
            <button  class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <?php if (isset($_SESSION['id'])) echo  ucfirst($_SESSION['username']);
              else echo "LogIn/Register"  ?>
            </button>
            <ul class="dropdown-menu position-absolute btn-light">
              <li><a class="dropdown-item" href="MyProfile" target="_self"><i class="fas fa-id-badge icons"></i>MY PROFILE</a></li>
              <li><a class="dropdown-item" href="Events" target="_self"><i class="fas fa-calendar-check icons"></i>Events</a></li>
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
  <?php if (isset($_SESSION['message'])) {
    include 'Notification.php';
  }
  ?>
  <?php if (count($errors) > 0) : ?>
    <?php foreach ($errors as $error) : ?>
      <?php include 'Notification.php'; ?>
    <?php endforeach; ?>

  <?php endif; ?>

  <section class="container-fluid">
    <div  class="d-flex justify-content-evenly wrap-con">
      <div id="sidebarleft" data-aos="fade-up" class="shadow-lg p-3  rounded-1 container2 align-self-start ">
        <h2 class="text-lg-center  mb-3">Box of Expression</h2>
        <form action="post" method="post" enctype="multipart/form-data">
          <!-- <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
          </div> -->
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Write your story</label>
            <textarea name="story" class="form-control" id="exampleFormControlTextarea1" rows="16" cols="5"></textarea>
          </div>
          <div class="mb-3">

            <input class="form-control" type="file" id="formFile" name="image" >

            <button type="submit" class="btn btn-danger mt-lg-3" name="express" style="background-color: #fa0463;">Express</button>

        </form>
        
      </div>

    </div>
    <div id="maincontent" data-aos="fade-up" class=" align-self-start">
      <div class="feed container">
        <div class="wrapper mb-3 shadow" id="searchwrap">
          <div class="iconwrapper ml-3 p-4">
            <i class="fas fa-search"></i>
          </div>
          <form method="get" id="input_s" autocomplete="off">
            <input type="text" id="value_s" >
          </form>
        </div>
        <ul class="container-fluid dropdown-menu bg-light rounded border-0" id="output">
        

        </ul>

        <?php

        // $sql = "SELECT feeds.*,users.FullName,users.visiblity from feeds,users ORDER BY feeds.date DESC ";
        $sql = "SELECT feeds.*, users.FullName ,users.visiblity FROM feeds INNER JOIN users ON feeds.username = users.username ORDER BY feeds.date DESC";
        $query = mysqli_query($conn, $sql);
        while ($result = mysqli_fetch_array($query)) { 
        ?> <?php if ($result['visiblity'] == "PRIVATE"){ continue; }
          if ($result['visiblity_post'] == "0"){  continue;
          } ?>
          <div data-aos="fade-up" class=" shadow p-3 mb-3 bg-body rounded  border-danger">
            <div class="post">
              <i class="fas fa-user-alt icons float-start"></i>
              <h6 class="text-uppercase"><?php echo $result['FullName']; ?> (<a href="others/<?php echo $result['username']; ?>">@<?php echo $result['username'] ?></a>) </h6>
              <?php if(!empty($result['Images'])){ ?>
              <div>
              <img src="./Feed/<?php echo $result['Images'] ?>"  width="50%" > </div><?php } ?> 
              <?php if (!$result['story'] == "") { ?>
                <div><i class="fas fa-quote-left"></i>
                  <p class="mt-3">
                    <?php echo nl2br($result['story']); ?>
                  </p><i class="fas fa-quote-right"></i>
                </div><?php } ?>
              <?php $date = $result['date']; ?>
              <span><strong class="mt-2"> <?php echo date(" d M,Y h:i", strtotime($date)); ?></strong></span>
              <!-- <span><strong> 12 May,2021</strong></span> -->
            </div>
          </div>
          <br />


        <?php }
        ?>


      </div>
    </div>
    <!-- <div id="sidebarright" data-aos="fade-up" class=" shadow-lg p-5 mb-5 rounded-1 container2 align-self-start">
      <div class="consult ">
        <h2 class="text-lg-center mb-3">KNOW YOUR DOCTOR</h2>
        <div class="mt-5">
          <div class="card" style="width: 18rem;">
            <img src="assets/Limg.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Dr. Subin Vazhayil </h5>
              <p class="card-text">Psychotherapy, stress management, lifestyle coaching, NLP, Psychoanalysis, Individual counselling, crisis counselling, premarital counselling, personality testing etc.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Roots & Routes Counselling and Psychotherapy Centre, Kozhikode, Kerala</li>
              <li class="list-group-item">7 (2010-present)</li>
              <li class="list-group-item">Speaks five languages including English, Hindi, Tamil, Japanese, Malyalam; Provides training in Japanese at Japanese Language Academy, Calicut. Motivational speaker

              </li>
            </ul>
            <div class="card-body">
              <a href="consult">
              <button class="btn btn-primary" type="button" >Book a appointment</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Book Appointment</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body small">
        <form class="row">
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Full Name</label>
            <input type="email" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Username</label>
            <input type="password" class="form-control" id="inputPassword4">
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
          </div>
        </form>
      </div>
    </div> -->

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Fill Your Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="post" method="POST" >
            <div class="modal-body">
              <div class="row mb-3">
                <div class="col">
                  <label for="fullname">Fullname</label>
                  <input type="text" name="FullName" class="form-control">
                </div>
                <div class="col">
                  <label for="fullname">Username</label>
                  <input type="text" class="form-control" name="username">
                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="doc">Email</label>
                    <input type="email" name="email" class="form-control">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="mode">Mode</label>
                    <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                    <select class="form-select" name="mode" id="autoSizingSelect">
                      <option value="Online">Online</option>
                      <option value="Offline">Offline</option>
                    </select>
                  </div>
                  <div class="col">
                    <label for="mode">Date</label>
                    <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                    <select class="form-select" name="" id="autoSizingSelect">
                      <option value="Tommorow" selected>Tommorow</option>
                    </select>
                  </div>
                </div>



                <input type="hidden" name="dvalh" value="Dr. Subin Vazhayil">
              </div>
              <div class="modal-footer">
                <button type="submit" name="booking" class="btn btn-primary">Book</button>
              </div>
            </div>
          </form>
        </div>
      </div>
  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>             
  <script src="https://kit.fontawesome.com/7e1cb02531.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
    window.scrollTo(0, 0);
  </script>
  <script src="Feed/script.js"></script>


</body>

</html>
