<?php
    session_start();
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
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
                    <h1>Hello User !</h1>
                    <p>Verify to Continue</p>
                </div>
                <form action="" method="post">
                    <div class="login-credentials">
                        <div class="uemail-wrap">
                            <i class="fa-solid fa-user"></i>
                            <input type="number" name="user_otp" id="uemail" placeholder="Enter OTP">
                        </div>
    
                        <div class="btn-wrap">
                            <button type="submit" name="verify_otp">Verify OTP</button>
                            <a href="login.php">BACK TO LOGIN ?</a>
                        </div>
                    </div>
                </form>
                <?php
                    if(isset($_REQUEST['verify_otp']))
                    {
                        $enteredOTP=$_REQUEST['user_otp'];
                        $sessOTP=$_SESSION['otp'];
                        if($enteredOTP==$sessOTP)
                        {
                            echo '<script>
                        alert("OTP Verified Successfully...");
                        window.location.href="setpassword.php";
                        </script>';
                        }
                        else
                        {
                            echo '<script>
                        alert("OTP not matched. Try Again...");
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