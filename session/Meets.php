<?php require '../Controller/autoController.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS only -->
    <link rel="stylesheet" href="session/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="Style/NavBar.css" />
    <title>Events</title>
</head>

<body>
<header class="justify-content-around">
        <div class="container"><a class="navbar-brand" href="home">Sukoon</a></div>
        <div class="menu">
            <ul class="d-flex m-3 align-items-center">

                <li>
                    <!-- Default dropend button -->
                    <div class="btn-group ">
                            <?php if (isset($_SESSION['id'])){?>
                        <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              <?php echo  ucfirst($_SESSION['username']);?>
                        </button><?php }else{ ?> 
                        <a href="login"><button class="btn btn-light">
                             <?php   echo  "LogIn/Register";?>
                        </button></a>  <?php } ?>
                        <ul class="dropdown-menu position-absolute btn-light">
                            <li><a class="dropdown-item" href="MyProfile" target="_self"><i class="fas fa-id-badge icons"></i>MY PROFILE</a></li>
                            <li><a class="dropdown-item" href="post" target="_self"><i class="fas fa-rss icons"></i>MY Feed</a></li>
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
    <form action="Events" method="post">
        <h1 class="display-3 mart text-center   text-secondary">Events</h1>
        <div class="container shadow p-5 mb-5 bg-body">
            <div class="row">
                <div class="col">
                    <input type="text btn-danger" class="form-control" placeholder="Event Title" name="e_title">
                </div>
                <div class="col">
                    <input type="text btn-danger" class="form-control" placeholder="Meet Link" name="e_link">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="input-group">
                        <span class="input-group-text">Description</span>
                        <textarea class="form-control" aria-label="With textarea" name="e_desc"></textarea>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-danger w-btn" name="event"><span class="fs-4">Register</span></button>
                </div>
            </div>
        </div>
    </form>
    <div class="container">
        <?php
        if (isset($_SESSION['id'])) {
            $sql = "SELECT * from events ORDER BY events.date DESC";
            $query = mysqli_query($conn, $sql);
            $i = 1;
            while ($result = mysqli_fetch_array($query)) {?>
                <div class="card mb-5 text-center">
                    <div class="card-header">
                        <?php echo $result['username']; ?>'s Session
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-capitalize"><?php echo $result['e_title']; ?></h5>
                        <p class="card-text"> <?php echo $result['e_desc']; ?> </p>
                        <a href="<?php echo $result['e_link']; ?>" target="_blank" class="btn btn-primary">Join Event</a>
                    </div><?php $date = $result['date'];  ?>
                    <div class="card-footer text-muted">
                        <?php echo date(" d M,Y | h:i", strtotime($date)); ?>
                    </div>
                </div>
        <?php }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <?php if (isset($_SESSION['message'])) {
        include 'Notification.php';
    }
    ?>
    <?php if (count($errors) > 0) : ?>
        <?php foreach ($errors as $error) : ?>
            <?php include 'Notification.php'; ?>
        <?php endforeach; ?>

    <?php endif; ?>
    <script src="https://kit.fontawesome.com/7e1cb02531.js" crossorigin="anonymous"></script>
</body>

</html>