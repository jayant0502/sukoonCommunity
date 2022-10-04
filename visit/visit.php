<?php require '../Controller/autoController.php';
if (!isset($_SESSION['id'])) {
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
  <!-- CSS only -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
  <link rel="stylesheet" href="../visit/style.css" />
  <link rel="stylesheet" href="../Style/NavBar.css" />
  <title>Profile</title>
</head>

<body>
  <header class="justify-content-around">
    <span class="container"><a class="navbar-brand" href="#">Sukoon</a></span>
    <div class="menu">
      <ul class="d-flex m-3 align-items-center">

        <li>
          <!-- Default dropend button -->
          <div class="btn-group ">
            <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <?php if (isset($_SESSION['id'])) echo  ucfirst($_SESSION['username']);
              else echo "LogIn/Register"  ?>
            </button>
            <ul class="dropdown-menu position-absolute btn-light">
              <li><a class="dropdown-item" href="../MyProfile" target="_parent"><i class="fas fa-id-badge icons"></i>MY PROFILE</a></li>
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
  <div class="container shadow-lg p-3 mb-5 bg-body rounded-7 br50">
    <div class="container main_container d-flex justify-content-evenly align-items-center flex-wrap-reverse">
      <span class="eww">
        <img src="../visit/profile_illus.svg" class="illustration " alt="" />
      </span>
      <div>
        <h1 class="text-center text-uppercase">Your Profile</h1>
        <div class="d-flex flex-column bd-highlight mb-3 shadow-lg p-4 mb-5 bg-body rounded">

          <!-- <div class="p-2 bd-highlight">
          <i class="fas fa-user-circle"></i>
        </div> -->
          <?php
          $sql = "SELECT * from users where username ='$_GET[username]' Limit 1";
          $query = mysqli_query($conn, $sql);
          $result = mysqli_fetch_array($query); ?>
          <div class="p-2 bd-highlight">
            <label for=""><b><i class="fas fa-user icons"></i></b></label> <span><?php echo $result['FullName']; ?></span>
          </div>
          <div class="p-2 bd-highlight">
            <label for=""><b><i class="fas fa-envelope icons"></i></b></label> <span><?php echo $result['email']; ?></span>
          </div>
          <div class="p-2 bd-highlight">
            <label for=""><b><i class="fas fa-phone-alt icons"></i></b></label> <span><?php echo $result['phone']; ?></span>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mb-4">

      <div class="accordion accordion-flush" id="accordionFlushExample">
        <?php
        $sql = "SELECT * from feeds where username ='$_GET[username]'  Order By feeds.date Desc";
        $query = mysqli_query($conn, $sql);
        $i = 1;
        while ($result = mysqli_fetch_array($query)) {
        ?>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading<?php echo $i; ?>">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $i; ?>">
                Post #<?php echo $i; ?>
              </button>
            </h2>
            <div id="flush-collapse<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $i; ?>" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"><?php if (!empty($result['Images'])) { ?>
                  <img src="../Feed/<?php echo $result['Images'] ?>" width="50%"> <?php } ?>
                <?php if (!$result['story'] == "") { ?>
                  <div><i class="fas fa-quote-left"></i>
                    <p class="mt-3">
                      <?php echo nl2br($result['story']); ?>
                    </p><i class="fas fa-quote-right"></i>
                  </div><?php } ?>
                <?php $date = $result['date']; ?>
                <div class="mt-3"><strong class="mt-2"> <?php echo date(" d M,Y | h:i", strtotime($date));
                                                        $i++; ?></strong></div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>

  </div>


  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/7e1cb02531.js" crossorigin="anonymous"></script>
</body>

</html>