<?php
    session_start();
    if (isset($_SESSION['user_id'])) {
        session_destroy();
    }
    include "connection.php";
    if (isset($_POST['btn_login'])) {
        $post_email = mysqli_real_escape_string($con, $_POST['user_email']);
        $post_password = md5(mysqli_real_escape_string($con, $_POST['user_password']));
        $sql = "SELECT user_id FROM tbl_user WHERE user_email='$post_email' and user_pass='$post_password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        
        if ($count > 0) {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['flag']="1";
            sleep(2);
            header("location: ../dashboard.php");
        }
        else {
            sleep(2);
            echo '<script>alert("Please Register Yourself")</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>

<body>
    <main>
        <div class="login-wrap">
            <div class="logo-container">
                <div class="logo-wrap">
                    <img src="../../assest/login_attachment.png" alt="websiteLogo">
                </div>
            </div>
            <div class="login-container">
                <div class="register-redirect">
                    New User? 
                    <a href="../Register/register.php">Register</a>
                </div>
                <div class="greetings-wrap">
                    <h1>Welcome Back!</h1>
                    <p>Login to Continue</p>
                </div>
                <form action="" method="post">
                    <div class="login-credentials">
                        <div class="uemail-wrap">
                            <i class="fa-solid fa-user"></i>
                            <input type="email" name="user_email" id="uemail" placeholder="Email">
                        </div>
                        <div class="upass-wrap">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="user_password" id="upass" placeholder="Password">
                        </div>
                        <div class="btn-wrap">
                            <button type="submit" name="btn_login">Login</button>
                            <a href="#">FORGOT PASSWORD?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="./script/script.js"></script>
</body>
</html>