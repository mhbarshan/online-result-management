<?php

    session_start();
    if (isset($_POST['verify_email']))
    {
        $email = $_SESSION['email'];
        $verification_code = $_POST["verification_code"];
 
        // connect with database
        $con = new mysqli('localhost','root','','login_db');
        if(!$con){
            echo 'Not connect';
        }
 
        // mark email as verified
        $sql = "UPDATE users SET email_verified_at = NOW() WHERE id ='$email' AND verification_code = '$verification_code'";
        $result  = mysqli_query($con, $sql);
 
        if (mysqli_affected_rows($con) == 0)
        {
            die("Verification code failed.");
        }
        unset($_SESSION['email']);
       // echo "<p>You can login now.</p>";
        header('location:studentlogin.php?registered');
        exit();
    }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="studentlogin.css">
    <link rel="stylesheet" href="email_verification.css">
   
    <title>Document</title>
</head>
<body>
<section class="header">
    <nav>
           <img src="images/193972.png" class="logo" alt="logo">
           <ul>
               
                <li><a href="index.html">Home</a>
                </li>
               <li><a href="#">About Us</a></li>
               <li><a href="contactus.html">Contact Us</a></li>
           </ul>
       </nav>
    </section>
    <br>
<div class="signup_form">
<?php
        if(isset($_GET['email'])){
            echo "<h4 style='color:white;text-align: center;margin: 0;font-size: 16px;padding: 0;font-weight: bold;'>Verify your email first!!!</h4>";
        }
        ?>
<form method="POST">
    <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>" required>
    <input type="text" name="verification_code" placeholder="Enter verification code" required />
 
    <input type="submit" name="verify_email" value="Verify Email">
</form>
</div>
</body>
</html>