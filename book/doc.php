<?php include '../Controller/autoController.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="book/style.css" />
    <link rel="stylesheet" href="style/NavBar.css" />
    <title>Consult</title>
</head>

<body>
    <header class="justify-content-around">
        <span class="container"><a class="navbar-brand" href="#">Sukoon</a></span>
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
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 555">
        <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <!-- <img src="" class="rounded me-2" alt=""> -->
                <strong class="me-auto">Notification</strong>
                <small style="color: #fa0463;">Sukoon</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="toast-body">

            </div>
        </div>
    </div>


    <section class="wrapper ">
        <h2 id="head">KNOW YOUR DOCTOR</h2>
        <div class="doc_details d-flex flex-wrap justify-content-evenly">
            <?php
            $sql = "SELECT * FROM Doctors ORDER BY Doctors.id ";
            $query = mysqli_query($conn, $sql);
            while ($result = mysqli_fetch_array($query)) { ?>

                <div class="cards-section">
                    <div class="card d-flex shadow-lg p-3 mb-5 bg-body rounded-7">
                        <div class="cards-body ">
                            <div class="image">
                                <img src="<?php echo $result['Photo']; ?>" width="100" alt="" class="mb-1 rounded-3" />
                                <div class="badge bg-info text-dark text-wrap"><?php echo $result['Experience']; ?> exp</div>
                            </div>
                            <div class="card-detail">
                                <p class="fs-6"><i class="fas fa-user-md icons"></i><?php echo $result['Name']; ?></p>
                                <p class="fs-6"><i class="fas fa-user-graduate icons"></i><?php echo $result['Education']; ?></p>
                                <div class="d-flex "><i class="fas fa-poll icons"></i>
                                    <p class="fs-6"><?php echo $result['Designation']; ?></p>
                                </div>
                                <h6><i class="fas fa-rupee-sign icons"></i><span id="price_dis"><?php echo $result['Fees']; ?>₹</span>
                                    <spanid="price"><?php echo ($result['Fees'] - 1000); ?>₹</spanid=>
                                </h6>


                            </div>
                        </div>
                        <div class="card-footer">
                            <form id="input_s">
                                <button type="button" id="<?php echo $result['id']; ?>" onclick="book(this)" class="btn btn-info">Consult</button>
                            </form>


                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>


    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/7e1cb02531.js"></script>
    <script>
        function book(e) {
            form = document.getElementById("input_s");
            output = document.getElementById("toast-body");
            form.addEventListener("submit", function(event) {
                event.preventDefault()
            });
            let doc = parseInt(e.id);
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "./controller/autoController.php?doc=" + doc, true);
            xhr.onload = function() {
                if (xhr.status == 200) {
                    output.innerHTML = "";
                    output.innerHTML = xhr.responseText;
                    var toastele = document.getElementById("liveToast");
                    var toastbootstrap = new bootstrap.Toast(toastele);
                    toastbootstrap.show();

                }
            }
            xhr.send();

        }
    </script>
</body>

</html>