<?php
    session_start();
    include "connection.php";
    $userEmail=$_SESSION['userEmail'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Password</title>
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
                    <p>Set Password</p>
                </div>
                <form action="" method="post">
                    <div class="login-credentials">
                        <div class="upass-wrap">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="user_password" id="upass" placeholder="Password">
                        </div>
                        <div class="upass-wrap">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="user_confirm_password" id="conupass" placeholder="Confirm Password">
                        </div>
                        <div class="btn-wrap">
                            <button type="submit" name="set_pass">SUBMIT</button>
                            <a href="login.php">Back to Login ?</a>
                        </div>
                    </div>
                </form>
                <?php
                    if(isset($_REQUEST['set_pass']))
                    {
                        $newPass=md5($_REQUEST['user_password']);
                        $conPass=md5($_REQUEST['user_confirm_password']);
                        if($newPass==$conPass)
                        {
                            $updatePass="UPDATE tbl_user SET user_pass='$newPass' WHERE user_email='$userEmail'";
                            if(mysqli_query($con,$updatePass))
                            {
                                echo '<script>
                                alert("Password Reset Successfully...");
                                window.location.href="login.php";
                                </script>';
                            }
                            else
                            {
                                echo '<script>
                                alert("Something Went Wrong. Try Again...");
                                window.location.href="forgotpassword.php";
                                </script>';
                            }
                        }
                        else
                        {
                            echo '<script>
                                alert("Password must be same. Try Again...");
                                window.location.href="forgotpassword.php";
                                </script>';
                        }
                    }
                ?>
            </div>
        </div>
    </main>
    <script src="./script/script.js"></script>
</body>
</html>