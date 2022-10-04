<?php require '../Controller/autoController.php';
if(isset($_SESSION['id'])){
  header('location: post');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login & Register</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/7e1cb02531.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="user/style.css" />
</head>

<body>
<?php if(count($errors) > 0): ?>
          <?php foreach($errors as $error): ?>
                    <?php include 'Notification.php'; ?>
                    <?php endforeach; ?> 
                    
                    <?php endif; ?>  
  <div class="container0">
    <div class="form-conatiner">
      <div class="signin-signup">
        <form method="POST" action="login" class="sign-in-form">
          
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="far fa-user"></i>
            <input type="text" placeholder="Username" name="usernamel" >
          </div>
          <div class="input-field">
            <i class="fas fa-key"></i>
            <input type="password" placeholder="Password" name="passwordl" >
          </div>
          <button type="submit" class="btn solid" name="login-btn">Submit</button>
        </form>
        <form action="login" method="POST" class="sign-up-form">
          <h2 class="title">Sign Up</h2>
          <div class="input-field">
            <i class="far fa-user"></i>
            <input type="text" placeholder=" Enter Username" name="username" />
          </div>
          <div class="input-field">
            <i class="fas fa-key"></i>
            <input type="password" placeholder=" Enter Password" name="password" />
          </div>
          <div class="input-field">
            <i class="far fa-envelope"></i>
            <input type="text" placeholder="Email" name="email" />
          </div>
          <div class="input-field">
            <i class="fas fa-phone-alt"></i>
            <input type="number" placeholder="Phone Number" name="phone" />
          </div>
          <input type="submit" value="login" class="btn solid" name="submit_login" />
        </form>
      </div>
    </div>
    <div class="panels-conatiner">
      <div class="panel left-panel">
        <div class="content">
          <h3>New Here?</h3>
          <p>
            Create an account on sukoon.
          </p>
          <button class="btn transparent" id="sign-up-btn">Sign up</button>
        </div>
        <img src="user/img/signIn.svg" class="img" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Already a Member?</h3>
          <p>
            You are already registered on sukoon.
          </p>
          <button class="btn transparent" id="sign-in-btn">Sign in</button>
        </div>
        <img src="user/img/logIN.svg" class="img" alt="" />
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="user/app.js"></script>
 
</body>

</html>