<?php
session_start();
define('DB_HOST', 'bbbjhyqp2zujbqqxvtb1-mysql.services.clever-cloud.com');
define('DB_USER', 'ushzp0rkmpejucow');
define('DB_PASS', 'Wa38PIASmwAPlxZ1VCY7');
define('DB_NAME', 'bbbjhyqp2zujbqqxvtb1');
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (!$conn) {
    die('Database error:');
}
$errors = array();
$username = "";
$phone = "";
$password = "";
$email = "";
$mmm = "";

//REGISTRATION
if (isset($_POST['submit_login'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    if (empty($username)) {
        $errors['username'] = "Username is required";
    }
    if (empty($phone)) {
        $errors['phone'] = "Mobile No. is required";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid Email";
    }
    if (empty($email)) {
        $errors['email'] = "Email is required";
    }
    if (empty($password)) {
        $errors['password'] = "Password is required";
    }


    $usernameQuery = "SELECT * FROM users WHERE username=? LIMIT 1";
    $stmt = $conn->prepare($usernameQuery);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;

    if ($userCount > 0) {
        $errors['username'] = "Username Not Available";
    }
    $emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
    $stmt = $conn->prepare($emailQuery);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;

    if ($userCount > 0) {
        $errors['email'] = "Email Already Exist";
    }
    if (count($errors) == 0) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username ,  password , email , phone) VALUES ( ? , ? , ? , ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssss', $username, $password, $email, $phone);
        if ($stmt->execute()) {
            $user_id = $conn->insert_id;
            $_SESSION['id'] = $user_id;
            $_SESSION['FullName'] = "";
            $_SESSION['username'] = $username;
            $_SESSION['phone'] = $phone;
            $_SESSION['email'] = $email;
            $_SESSION['visiblity'] = "PUBLIC";
            $_SESSION['message'] = "You are logged in!";
            header('location: post');
            exit();
        } else {
            $errors['db_error'] = "DATABASE ERROR : FAILED TO REGISTER";
        }
    }
}

//LOGIN 

if (isset($_POST['login-btn'])) {

    $username = $_POST['usernamel'];
    $password = $_POST['passwordl'];
    $username = mysqli_escape_string($conn, $username);
    $password = mysqli_escape_string($conn, $password);

    if (empty($username)) {
        $errors['username'] = "Username is required";
    }


    if (empty($password)) {
        $errors['password'] = "Password is required";
    }
    if (count($errors) === 0) {

        $sql = "SELECT * FROM users WHERE  username= ? LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($result->num_rows > 0) {

            if (password_verify($password, $user['password'])) {
                $_SESSION['id'] = $user['id'];
                $_SESSION['FullName'] = $user['FullName'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['phone'] = $user['phone'];
                $_SESSION['visiblity'] = $user['visiblity'];
                $_SESSION['message'] = "You are logged in!";
                $_SESSION['alert-class'] = "alert-success";
                header('location:  post');
                exit();
            } else {
                $errors['login_error'] = "Wrong Credentials";
            }
        } else {
            $errors['login_error'] = "Wrong Credentials";
        }
    }
}

//PROFILE UPDATE
if (isset($_POST['update'])) {
    $name = $_POST['FullName'];
    $visiblity = $_POST['visiblity'];
    $sql = "UPDATE users SET FullName=?, visiblity=? WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $visiblity, $_SESSION['username']);
    $stmt->execute();
    $_SESSION['FullName'] = $name;
    $_SESSION['visiblity'] = $visiblity;
}

// Feed Express
if (isset($_POST['express'])) {
    $story = $_POST['story'];
    $file = $_FILES['image'];
    if (empty($story)) {
        if ($_FILES['image']['error'] == 4) {
            $errors['express'] = "Cannot be empty";
        }
    }


    // Destructuring File array
    if (count($errors) === 0) {
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];
        $mmm = "hello from 1";
        if ($fileerror == 0) {
            $acceptedext = array("jpg");
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            if (!in_array($extension, $acceptedext)) {
                $errors['file'] = "File Not Supported";
            }
            if (count($errors) === 0) {

                $destfile = 'Images/' . $filename;
                move_uploaded_file($filepath, $destfile);
                $sql = "INSERT INTO feeds(username,story,Images) VALUES('$_SESSION[username]','$story','$destfile')";
                $query = mysqli_query($conn, $sql);
                if ($query) {
                    $_SESSION['message'] = "Post Success";
                }
            }
        } else {
           
            $sql = "INSERT INTO feeds(username,story,Images) VALUES('$_SESSION[username]','$story','')";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                $_SESSION['message'] = "Post Success";
            }else{
               $errors['sql']= mysqli_error($conn); 
            }
        }
    }
}


// Search
if (isset($_GET['s'])) {

    $s = $_GET['s'];
    $s = htmlentities($s);
    $s = mysqli_escape_string($conn, $s);
    $sql = "SELECT username,visiblity from users Where username='$s' or username like '$s%'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        while ($result = mysqli_fetch_assoc($query)) {  if ($result['visiblity'] == "PRIVATE"){ continue; }?>
            <li><a class="dropdown-item p-3 mt-1 mb-1" href="Others/<?php echo $result['username']; ?>"><i class="fas fa-user-alt icons"></i><?php echo $result['username']; ?></a></li><?php
                                                                                            }
                                                                                        }
}

// Appointment
if (isset($_GET['doc'])) {
    if(!isset($_SESSION['id'])){?>
        <pre><b>Please LogIn first.</b></pre>
    <?php    exit();
      }
    $doc_id = $_GET['doc'];
    $doc_id = htmlentities($doc_id);
    $doc_id = mysqli_escape_string($conn, $doc_id);
    $sql = "SELECT * FROM Doctors WHERE id='$doc_id'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($query);
    if($query){
        $sql = "INSERT INTO appointments(FullName,email,Dr_name,Dr_id) Values('$_SESSION[FullName]','$_SESSION[email]','$result[Name]','$doc_id')";
        $query = mysqli_query($conn,$sql);
        if($query){?>
<pre><b>Thankyou for your interest!🙏🏻</b></pre>
<pre>Further Details will be shared to your registered Email.</pre> <?php
        }else{?>
            <pre>Already registered!</pre>
        <?php } 
    }else{ 
        $errors['docid']= mysqli_error($conn);
    }
   
}

// Post Update

if (isset($_GET['del'])) {
    if(!isset($_SESSION['id'])){
      $errors['message']="Please LogIn first.";
      exit();
      }
    $del_id = $_GET['del'];
    $del_id = htmlentities($del_id);
    $del_id = mysqli_escape_string($conn, $del_id);
    $sql = "DELETE FROM feeds WHERE feeds.id = '$del_id';";
        $query = mysqli_query($conn,$sql);
        if($query){
                $_SESSION['message']="Post Deleted.";
 
        }else{
            $errors['post']="Failed";
         } 
    }

if (isset($_GET['hide'])) {
    if(!isset($_SESSION['id'])){
        $errors['message']="Please LogIn first.";
        exit();
        }
    $hide_id = $_GET['hide'];
    $hide_id = htmlentities($hide_id);
    $hide_id = mysqli_escape_string($conn, $hide_id);
     $sql = " UPDATE feeds SET visiblity_post = '0' WHERE feeds.id = '$hide_id';";
        $query = mysqli_query($conn,$sql);
        if($query){
                $_SESSION['message']="Post Hidden.";
                header("Refresh:0");?>
                <i class="fas fa-eye iconspost"></i><?php
 
        }else{
            $errors['post']="Failed";
         } 
    }
   

if (isset($_GET['unhide'])) {
    if(!isset($_SESSION['id'])){
        $errors['message']="Please LogIn first.";
        exit();
        }
    $unhide_id = $_GET['unhide'];
    $unhide_id = htmlentities($unhide_id);
    $unhide_id = mysqli_escape_string($conn, $unhide_id);
    $sql = "UPDATE feeds SET visiblity_post = '1' WHERE feeds.id = '$unhide_id';";
        $query = mysqli_query($conn,$sql);
        if($query){
                $_SESSION['message']="Post is now visible.";
                header("Refresh:0");?>
                <i class="fas fa-eye-slash iconspost"></i><?php
 
        }else{
            $errors['post']="Failed";
         } 
    }
   


// Appointments

if(isset($_POST['booking'])){

    $FullName = $_POST['FullName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mode = $_POST['mode'];
    $adate = $_POST['adate'];
    $dvalh = $_POST['dvalh'];

    $sql = "INSERT INTO appointments(username,FullName,email,Mode,Date,Dr) Values('$FullName','$username','$email','$mode','$adate','$dvalh')";
    $query = mysqli_query($conn,$sql);
    if($query){
        $_SESSION['message']="Appoinment Booked";
    }else{ $errors['appointment']=mysqli_error($conn)  ;
    }



}

// FEEDBACK
if (isset($_POST['feedback'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];
    if (empty($username)) {
        $errors['username'] = "Username is required";
    }
    if (empty($phone)) {
        $errors['phone'] = "Mobile No. is required";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid Email";
    }
    if (empty($email)) {
        $errors['email'] = "Email is required";
    }
    if (empty($message)) {
        $errors['message'] = "Message is required";
    }
    if (count($errors) == 0) {
        $sql = "INSERT INTO feedback(username ,  email , phone, message) VALUES ('$username', '$email', '$phone', '$message') ";
        $query = mysqli_query($conn,$sql);
        if($query){
            $errors['message']="Message Sent!";
        }else{
            $errors['message']="Failed To Send.";
        }
    }

}
// Session register
if (isset($_POST['event'])) {
    $username = $_SESSION['username'];
    $e_title = $_POST['e_title'];
    $e_link = $_POST['e_link'];
    $e_desc = $_POST['e_desc'];
    if (empty($username)) {
        $errors['username'] = "Please Login.";
    }
    if (empty($e_desc)) {
        $errors['e_desc'] = "Description is required";
    }

    
    if (empty($e_link)) {
        $errors['e_link'] = "Link is required";
    }
    if (empty($e_title)) {
        $errors['e_title'] = "Title is required";
    }
    if (count($errors) == 0) {
        $sql = "INSERT INTO events(username, e_title,e_link,e_desc) VALUES ('$username', '$e_title', '$e_link', '$e_desc') ";
        $query = mysqli_query($conn,$sql);
        if($query){
            $errors['message']="Event Registered!";
        }else{
            $errors['message']="Failed To Register.";
        }
    }

}





// Logout

if(isset($_POST['logout'])){
    session_destroy();
    header('location: ./home');
    exit();
}



?>