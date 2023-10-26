<?php
    session_start();
   
    $con = new mysqli('localhost','root','','login_db');
    if(!$con){
        echo 'Not connect';
    }
    if (isset($_POST['submit'])){ 
    $id=$_POST['id'];
    $user_password= $_POST['user_password'];
    $msg=' ';
    $md_5_pass=md5($user_password);
    
    }
    if( !empty($id) && !empty($user_password)){

         $sql="SELECT * FROM users WHERE id = '$id' AND user_password = '$md_5_pass' ";
         $query = $con->query($sql);
         $user = mysqli_fetch_object($query);
         if($query->num_rows>0){
            if ($user->email_verified_at == null)
          {
            $_SESSION['email']=$id;
             header('location:email_verification.php?email');
          }
          else{
             $msg=' ';
             $_SESSION['id']=$id;
             header('location:student_profile.php?loggedin');
              }
              }
            else{
                $msg='ID or password is incorrect!';
            }
            
        } 
        
      
    



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student login</title>
    <link rel="stylesheet" href="studentlogin.css">
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
    </section>
    <section class="headerr">
        <div class="login_form">
            <img src="images/avatar.jpeg" class="avatar">
            <?php
        if(isset($_GET['registered'])){
            echo "<h4 style='color:greenyellow;text-align: center;margin: 0;font-size: 16px;padding: 0;font-weight: bold;'>You have succesfully registered!!!</h4>";
        }
        ?>
            <h1>Sign In as a Student</h1>
            <form action="" method="post">
                <p>ID</p>
                <input type="text" required name="id" placeholder="Enter your ID">
                <p>Password</p>
                <input type="password" required name="user_password" placeholder="Enter password">
                <span ><?php if(isset($_POST['submit'])){ echo " <h5 style='color:	#8b0000;text-align: center;margin: 0;font-size: 14px;padding: 0;font-weight: bold;  margin-bottom: 16px;'> $msg</h5>"; }?></span>
                <input type="submit" name="submit" value="Sign In">
                <a href="#">Lost your password</a><br>
                <a href="studentsignup.php">Don't have any account?</a><br>
                
            </form>
      
        
        </div>

    </section>
</body>
</html>

