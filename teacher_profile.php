<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <title>Teacher profile</title>
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
        if($_SESSION['username']){
        // if(isset($_GET['loggedin'])){
            $name=$_SESSION['username'];
            echo "<li><h4 style='color:greenyellow;text-align: center;margin: 0;font-size: 25px;padding: 0;font-weight: bold;'>Welcome $name</h4></li>";
         }
        else{
            header('location:index.html');
        }
    // }
        ?>
              <li><a href="logout.php">Log Out</a></li>
              <li><a href="add_result.php">Add Result</a></li>
              <li><a href="update_result.php">Update Result</a></li>
              <li><a href="delete_result.php">Dlete Result</a></li>
           </ul>
       </nav>
       <div class="content">
           <h1>WELCOME</h1>
           <a href="https://www.ece.ruet.ac.bd"> <button class="button" > <span>Let's take a tour!</span></button> </a>
       </div> 
    </div>
</section>
</body>
</html>