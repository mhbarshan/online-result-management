<?php

$con = new mysqli('localhost','root','','login_db');
    if(!$con){
        echo 'Not connect';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <title>Student profile</title>
</head>
<body>
<section class="header"> 
    <div class="ruet">
        <video autoplay muted loop plays-inline class="bgvid"><source src="images/Education - 35451.mp4" type="video/mp4"></video>
       <nav>
           <img src="images/193972.png" class="logo" alt="logo">
           <ul>
           <?php
           session_start();
        if($_SESSION['id'] ){
            $id=$_SESSION['id'];
            $sql = "SELECT first_name FROM users where id=$id";
        // if(isset($_GET['loggedin'])){
           // $query = $con->query($sql);
           $query = $con->query($sql);
           $user = mysqli_fetch_assoc($query);
           if($query->num_rows>0){
               echo "<li><h4 style='color:greenyellow;text-align: center;margin: 0;font-size: 25px;padding: 0;font-weight: bold;'>Welcome ".$user['first_name']."</h4></li>"; 
           }
            
           
         }
        else{
            header('location:index.html');
        }
    // }
        ?>
              <li><a href="logout.php">Log Out</a></li>
              <li><a href="see_result.php">See result</a></li>
               <li><a href="contactus.html">Ask for recheck</a></li>
           </ul>
       </nav>
       <div class="content">
       <?php
        if(isset($_GET['notfound'])){
            echo "<h4 style='color:greenyellow;text-align: center;margin: 0;font-size: 25px;padding: 0;font-weight: bold;'>Your result haven't published yet!!!</h4>";
        }
        ?>
           <h1>WELCOME</h1>
           <a href="https://www.ece.ruet.ac.bd"> <button class="button" > <span>Let's take a tour!</span></button> </a>
       </div> 
    </div>
</section>
</body>
</html>