<?php

session_start();
//Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
 
    //Load Composer's autoloader
 require 'vendor/autoload.php';
$con = new mysqli('localhost','root','','login_db');
if(!$con){
    echo 'Not connect';
}
if (isset($_POST['submit'])){ 
$first_name= $_POST['first_name'];
$dept= $_POST['dept'];
$series= $_POST['series'];
$id= $_POST['id'];
$email= $_POST['email'];
$last_name= $_POST['last_name'];
$user_password= $_POST['user_password'];
$user_password_1= $_POST['user_password_1'];
$pasmatchmsg = $usrnm=' ';
$verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
$email_verified_at=null;
$md_5_pass=md5($user_password);
}
if(!empty($first_name) && !empty($dept) && !empty($series) && !empty($id) && !empty($email) && !empty($last_name) && !empty($user_password)){

    if($user_password!==$user_password_1){
        $pasmatchmsg = 'Password does not match!';
    }
    else{
        $usr="SELECT * FROM users WHERE id = '$id'";
        $res= mysqli_query($con, $usr);
        $num = mysqli_num_rows($res);
         if($num >=1){
            $usrnm = 'Id has Already Taken!';
         }
         else{
            $pasmatchmsg= $usrnm = ' ';
         
$mail = new PHPMailer(true);
try {
    //Enable verbose debug output
    $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;

    //Send using SMTP
    $mail->isSMTP();

    //Set the SMTP server to send through
    $mail->Host = 'smtp.gmail.com';

    //Enable SMTP authentication
    $mail->SMTPAuth = true;

    //SMTP username
    $mail->Username = 'eceruet796@gmail.com';

    //SMTP password
    $mail->Password = 'lgzzqfqybbzjdwhn';

    //Enable TLS encryption;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->Port = 587;

    //Recipients
    $mail->setFrom('eceruet796@gmail.com', 'ECE_Result');

    //Add a recipient
    $mail->addAddress($email, $name);

    //Set email format to HTML
    $mail->isHTML(true);

    
    $mail->Subject = 'Email verification';
    $mail->Body    = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';

    $mail->send();
    // echo 'Message has been sent';

   // $encrypted_password = password_hash($password, PASSWORD_DEFAULT); 
   $_SESSION['email'] = $id;
   $sql="INSERT INTO users (first_name,dept, series, id, email,last_name,user_password,verification_code,email_verified_at) VALUES('$first_name','$dept','$series','$id','$email','$last_name','$md_5_pass','$verification_code','$email_verified_at')";
    if($con->query($sql)==TRUE){
        header('location:email_verification.php?email=" . $email');
         }
   exit();
    }catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
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
    <title>Student signup</title>
    <link rel="stylesheet" href="studentsignup.css">
    <link rel="stylesheet" href="test.css">
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
       <br>
       <br><br>
    </section>

    <section class="headerr">
        <div class="signup_form">
            <img src="images/working.png" class="avatar">
            <h1>Sign Up as a Student</h1>
            <form action="" method="post">
                <p>First name</p>
                <input type="text" required name="first_name" placeholder="Enter name">
                <p>Last name</p>
                <input type="text" required name="last_name" placeholder="Enter Username">
                <p>Department</p>
                <input type="text" required name="dept" placeholder="Enter your Department name">
                <p>Series</p>
                <input type="text" required name="series" placeholder="Enter your series">
                <p>ID</p>
                <input type="text" required name="id" placeholder="Enter your student id">
                <span ><?php if(isset($_POST['submit'])){ echo " <h5 style='color:	#8b0000;text-align: center;margin: 0;font-size: 14px;padding: 0;font-weight: bold;  margin-bottom: 6px;'> $usrnm</h5>"; }?></span>
                <p>Email</p>
                <input type="email" required name="email" placeholder="Enter a valid email">
                <p>Password</p>
                <input type="password" required name="user_password" placeholder="Enter password">
                <p>Confirm Password</p>
                <input type="password" required name="user_password_1" placeholder="Enter password">
                <span ><?php if(isset($_POST['submit'])){ echo " <h5 style='color:	#8b0000;text-align: center;margin: 0;font-size: 14px;padding: 0;font-weight: bold;  margin-bottom: 6px;'> $pasmatchmsg</h5>"; }?></span>
                <input type="submit" name="submit" value="Sign Up">
                <a href="studentlogin.php">Already have an account? Click Here!</a><br>
            </form>
        
        
        </div>

    </section>
</body>
</html>

