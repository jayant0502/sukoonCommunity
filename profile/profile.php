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
  <link rel="stylesheet" href="profile/style.css" />
  <link rel="stylesheet" href="Style/NavBar.css" />
  <title>Profile</title>
</head>

<body>
  <header class="justify-content-around">
    <span class="container"><a class="navbar-brand" href="home">Sukoon</a></span>
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
              <li><a class="dropdown-item" href="post" target="_self"><i class="fas fa-rss icons"></i>MY Feed</a></li>
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
  <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 555">
    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <!-- <img src="" class="rounded me-2" alt=""> -->
        <strong class="me-auto">Notification</strong>
        <small style="color: #fa0463;">Sukoon</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        <?php if (isset($_SESSION['message'])) echo $_SESSION['message'];
        else echo $error;
        unset($_SESSION['message']); ?>
      </div>
    </div>
  </div>
  <div class="container shadow-lg p-3 mb-5 bg-body rounded-7 br50">
    <div class="container main_container d-flex justify-content-evenly align-items-center">
      <span class="eww">
        <img src="profile/profile_illus.svg" class="illustration " alt="" />
      </span>
      <div>
        <h1 class="text-center text-uppercase">Your Profile</h1>
        <div class="d-flex flex-column bd-highlight mb-3 shadow-lg p-4 mb-5 bg-body rounded">
          <form action="Myprofile" method="post">
            <!-- <div class="p-2 bd-highlight">
          <i class="fas fa-user-circle"></i>
         </div> -->

            <div class="p-2 bd-highlight d-flex align-items-center">
              <label for=""><b><i class="fas fa-user icons"></i></b></label> <span><input type="text" class="form-control" name="FullName" id="exampleFormControlInput1" placeholder="Enter Name" value="<?php echo $_SESSION['FullName']; ?>"></span>
            </div>
            <div class="p-2 bd-highlight">
              <label for=""><b><i class="fas fa-envelope icons"></i></b></label> <span><?php echo $_SESSION['email']; ?></span>
            </div>
            <div class="p-2 bd-highlight">
              <label for=""><b><i class="fas fa-phone-alt icons"></i></b></label> <span><?php echo $_SESSION['phone']; ?></span>
            </div>
            <div class="p-2 bd-highlight">
              <label for=""><b><i class="fas fa-eye icons"></i>Profile Visiblity</i></b></label>
            </div>
            <select class="form-select menu" name="visiblity" aria-label="Default select example">
              <?php if ($_SESSION['visiblity'] == "PUBLIC") {
                $option = "PRIVATE";
              } else $option = "PUBLIC"; ?>
              <option selected><?php echo $_SESSION['visiblity']; ?></option>
              <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
            </select>
            <div class="pt-2 bd-highlight">
              <button type="submit" class="btn btn-danger" name="update" style="background-color: #fa0463;">Update</button>
            </div>



        </div>
        </form>
      </div>
    </div>
    <div class="text-center mb-4">

      <div class="accordion accordion-flush" id="accordionFlushExample">
        <?php
        $sql = "SELECT * from feeds where username ='$_SESSION[username]' ORDER BY feeds.date DESC ";
        $query = mysqli_query($conn, $sql);
        $i = 1;
        while ($result = mysqli_fetch_array($query)) {
        ?>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading<?php echo $i; ?>">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $i; ?>">
                <span> Post #<?php echo $i; ?></span>

              </button>
            </h2>
            <div id="flush-collapse<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $i; ?>" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"><?php if (!empty($result['Images'])) { ?>
                  <img src="./Feed/<?php echo $result['Images'] ?>" width="50%"> <?php } ?>
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
              <form id="input_s"> <button name="<?php echo $result['id']; ?>" id="deletepost<?php echo $result['id']; ?>" onclick="deletepost(this)" class="btn border-dark mb-3"><i class="fas fa-trash iconspost"></i></button>
                <?php if ($result['visiblity_post'] == "1") { ?>
                  <button name="<?php echo $result['id']; ?>" id="res" onclick="hidepost(this)" data-bs-toggle="tooltip" data-bs-placement="top" title="Hide" class="btn border-dark mb-3"><i class="fas fa-eye-slash iconspost"></i></button>
                <?php } else { ?>
                  <button name="<?php echo $result['id']; ?>" id="res" onclick="unhidepost(this)" data-bs-toggle="tooltip" data-bs-placement="top" title="Unide" class="btn border-dark mb-3"><i class="fas fa-eye iconspost"></i></button>
                <?php }  ?>
              </form>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>

  </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/7e1cb02531.js" crossorigin="anonymous"></script>

  <script>
    function deletepost(e) {

      output = document.getElementById("toast-body");

      let del = parseInt(e.name);
      const xhr = new XMLHttpRequest();
      xhr.open("GET", "./controller/autoController.php?del=" + del, false);
    

        xhr.send();

      }

      function hidepost(e) {
        form = document.getElementById("input_s");
        form.addEventListener("submit", function(event) {
          event.preventDefault()
        });
        output = document.getElementById("res");

        let hide = parseInt(e.name);
        console.log(hide);
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "./controller/autoController.php?hide=" + hide, false);
        xhr.onload = function() {
          if (xhr.status == 200) {
            output.innerHTML = "";
            output.innerHTML = xhr.responseText;
            location.reload();
          }
        }



        xhr.send();

      }

      function unhidepost(e) {
        form = document.getElementById("input_s");
        form.addEventListener("submit", function(event) {
          event.preventDefault()
        });
        output = document.getElementById("res");

        let unhide = parseInt(e.name);
        console.log(unhide);
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "./controller/autoController.php?unhide=" + unhide, false);
        xhr.onload = function() {
          if (xhr.status == 200) {
            output.innerHTML = "";
            output.innerHTML = xhr.responseText;location.reload();
          }
        }

          xhr.send();

        }
  </script>
</body>

</html>