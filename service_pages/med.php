<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meditation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
  <link rel="stylesheet" href="service_pages/Pstyle.css">
  <link rel="stylesheet" href="Style/NavBar.css">
  <link rel="stylesheet" href="profile/style.css">
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
                  <!-- <?php if (isset($_SESSION['id'])) echo  ucfirst($_SESSION['username']);
                  else echo "LogIn/Register"  ?> -->
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
<div class="cont">
    <div class="left-panel">
        <div class="row row-cols-1 row-cols-1    g-2">
            <div class="col">
              <div class="card">
                <img src="assets/Limg.jpg"style="width:400px" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">“Listen To Your Heart, Follow Your Passion”</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="assets/mountain_range_by_bisbiswas_defsaga.jpg"style="width:400px" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="assets/mountain_range_by_bisbiswas_defsaga.jpg"style="width:400px" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="  assets/mountain_range_by_bisbiswas_defsaga.jpg"style="width:400px" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="right-panel">
        <div class="card mb-4">
            <div class="card-body">
                <iframe width="300" height="315" src="https://www.youtube.com/embed/inpok4MKVLM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        <div class="card mb-4">
            <div class="card-body">
                <iframe width="300" height="315" src="https://www.youtube.com/embed/wruCWicGBA4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        <div class="card mb-4">
            <div class="card-body">
                <iframe width="300" height="315" src="https://www.youtube.com/embed/aIIEI33EUqI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        <div class="card mb-4">
            <div class="card-body">
                <iframe width="300" height="315" src="https://www.youtube.com/embed/tTHIt3LjW9M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
    </div>
</div>
</body>
</html>