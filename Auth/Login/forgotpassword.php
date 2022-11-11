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
    <title>Forgot Password</title>
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
                    <h1>Welcome User !</h1>
                    <p>Login to Continue</p>
                </div>
                <form action="" method="post">
                    <div class="login-credentials">
                        <div class="uemail-wrap">
                            <i class="fa-solid fa-user"></i>
                            <input type="email" name="user_email" id="uemail" placeholder="Email">
                        </div>
    
                        <div class="btn-wrap">
                            <button type="submit" name="send_otp">Send OTP</button>
                            <a href="#">BACK TO LOGIN ?</a>
                        </div>
                    </div>
                </form>
                <?php
                    if(isset($_REQUEST['send_otp']))
                    {
                        $email=$_REQUEST['user_email'];
                        $checkEmail="SELECT * FROM tbl_user WHERE user_email='$email'";
                        $checkEmailResult=mysqli_query($con,$checkEmail);
                        $userInfo=mysqli_fetch_assoc($checkEmailResult);
                        $userEmail=$userInfo['user_email'];
                        if($email==$userEmail)
                        {
                            require 'PHPMailer.php';
                            require 'SMTP.php';

                            $email = new PHPMailer\PHPMailer\PHPMailer();

                            $email->IsSMTP();

                            $email->isHTML(true);

                            $email->SMTPAuth = true;

                            $email->SMTPSecure = 'ssl';

                            $email->Host = "smtp.gmail.com";

                            $email->Port = 465;

                            //Set the gmail address that will be used for sending email

                            $email->Username = "outgomonthlyexpenses@gmail.com";

                            //Set the valid password for the gmail address

                            $email->Password = "wgwmcpmbskfvemer";

                            //Set the sender email address

                            $email->SetFrom("verification.unifo@gmail.com");

                            //Set the receiver email address

                            $email->AddAddress($userEmail);

                            $email->Subject = "Forgot Password";

                            $otp=rand(1000,9999);

                            $message = "<b><h3>Unifo Team.</h3></b>";
                            $message .= "<h5>Your OTP is $otp.<br>Don't share with anyone.</h5>";
                            
                            
                            $email->Body = $message;
                            
                            if(!$email->Send()) {

                                echo '<script>
                                    alert("OTP not sent. Try Again...");
                                    window.location.href="forgotpassword.php";
                                    </script>';
                            
                            } else {
                            
                                $_SESSION['userEmail']=$userEmail;
                                $_SESSION['otp']=$otp;
                                echo '<script>
                                alert("OTP is sent to Registered Email...");
                                window.location.href="verifyotp.php";
                                </script>';
                            
                            }
                        }
                        else 
                        {
                            echo '<script>
                                alert("Register Yourself");
                                window.location.href="register.php";
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