<?php
  include "connection.php";
  
  if(isset($_REQUEST['user_email']))
  {
    $user_email=$_REQUEST['user_email'];
    $userdata="SELECT user_id FROM tbl_user  WHERE user_email='$user_email'";
    $userresult=mysqli_query($con,$userdata);
    $count=mysqli_num_rows($userresult);
    if($count>=1)
    {
        echo '<script>
        alert("You are alreay a user.");
        window.location.href="../Login/login.php";
        </script>';
    }
    else
    {
        if(isset($_POST['btn_register']))
        {
            $post_password1=md5(mysqli_real_escape_string($con,$_POST['user_password']));
            $post_password2=md5(mysqli_real_escape_string($con,$_POST['confirm_password']));
            if($post_password1 == $post_password2)
            {
                $post_email=mysqli_real_escape_string($con,$_POST['user_email']);
                $insert = "INSERT INTO tbl_user (user_email,user_pass) VALUES ('$post_email','$post_password1')";
            }
            else {
                echo "<script>alert('Password and Confirm Password Must be Same')</script>";
            }
            if (mysqli_query($con, $insert)) 
            {
                echo '<script>
                alert("Registration Successfully");
                window.location.href="../Login/login.php";
                </script>';
            }
            else {
                echo "<script>alert('Something Went Wrong')</script>";
            }
        }
        else {
            echo "<script>alert('Something Went Wrong')</script>";
        }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./style/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>

<body>
    <main>
        <div class="login-wrap">
            <div class="logo-container">
                <div class="logo-wrap">
                    <img src="../../assest/signUp_attach.jpg" alt="websiteLogo">
                </div>
            </div>
            <div class="login-container">
                <div class="register-redirect">
                    Already Registered? 
                    <a href="../Login/login.php">Login</a>
                </div>
                <div class="greetings-wrap">
                    <h1>Nice to see You!! :)</h1>
                    <p>Register to Continue</p>
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
                        <div class="upass-wrap">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="confirm_password" id="confirmPass" placeholder="Confirm Password">
                        </div>
                        <div class="btn-wrap">
                            <button type="submit" name="btn_register">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="./script/script.js"></script>
</body>
</html>