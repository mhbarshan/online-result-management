<?php
    session_start();
    $con = new mysqli('localhost','root','','login_db');
    if(!$con){
        echo 'Not connect';
    }
    if($_SESSION['id']){
        $id=$_SESSION['id'];
        $sql = "SELECT * FROM result where id=$id";
        $query = $con->query($sql);
        if($query->num_rows==0){
            header('location:student_profile.php?notfound');
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="see_result.css">
    
    <title>Result</title>
</head>
<body>
<section class="header"> 
    <div class="ruet">
        <video autoplay muted loop plays-inline class="bgvid"><source src="images/Education - 35451.mp4" type="video/mp4"></video>
       <nav>
           <img src="images/193972.png" class="logo" alt="logo">
           <ul>
           <?php
           //session_start();
        if($_SESSION['id'] ){
            $id=$_SESSION['id'];
            $sql = "SELECT first_name FROM users where id=$id";
        // if(isset($_GET['loggedin'])){
           // $query = $con->query($sql);
           $query = $con->query($sql);
           $profile = mysqli_fetch_assoc($query);
           if($query->num_rows>0){
               echo "<li><h4 style='color:greenyellow;text-align: center;margin: 0;font-size: 25px;padding: 0;font-weight: bold;'>Welcome ".$profile['first_name']."</h4></li>"; 
           }         }
        else{
            header('location:index.html');
        }
    // }
        ?>
              <li><a href="logout.php">Log Out</a></li>
              <li><a href="student_profile.php">Profile</a></li>
               <li><a href="#">Ask for recheck</a></li>
           </ul>
       </nav>
        <div class="content">
            <h2>Department of Electrical & Computer Enguneering</h2>
            <h3>Rajshai University of Engineering & Technology</h3>
            <?php
                if($_SESSION['id']){
                $id=$_SESSION['id'];
                $sql = "SELECT * FROM users where id=$id";
                $query = $con->query($sql);
                $user = mysqli_fetch_assoc($query);
                if($query->num_rows>0){
                    echo "Name: ".$user['first_name'].' '.$user['last_name'];
                    echo"<br>";
                    echo 'Id: '.$user['id'];
                    echo"<br>";
                    echo 'Series: '.$user['series'];
                }
                }
            ?>
            <br><br>
           <table border="0">
            <tr>
                <th>Subject</th>
                <th>Marks</th>
                <th>Subject GPA</th>
                <th>CGPA</th>
            </tr>
            <tr>
            <td>Subject 1:</td>
            
            <?php
                if($_SESSION['id'] ){
                $id=$_SESSION['id'];
                $sql = "SELECT * FROM result where id=$id";
                $query = $con->query($sql);
                $user = mysqli_fetch_assoc($query);
                if($query->num_rows>0){
                    echo "
                    <td>".$user['subject_1']."</td>
                    <td>".$user['subject_gpa_1']."</td>
                    ";
                }
                }
            ?>
            <td rowspan="5"><?php echo $user['CGPA'];?></td>
            </tr>
           
            <tr>
            <td>Subject 2:</td>
            
            <?php
                if($_SESSION['id'] ){
                $id=$_SESSION['id'];
                $sql = "SELECT * FROM result where id=$id";
                $query = $con->query($sql);
                $user = mysqli_fetch_assoc($query);
                if($query->num_rows>0){
                    echo "
                    <td>".$user['subject_2']."</td>
                    <td>".$user['subject_gpa_2']."</td>
                    ";
                }
                }
            ?>
            </tr>
            
            <tr>
            <td>Subject 3:</td>
            
            <?php
                if($_SESSION['id']){
                $id=$_SESSION['id'];
                $sql = "SELECT * FROM result where id=$id";
                $query = $con->query($sql);
                $user = mysqli_fetch_assoc($query);
                if($query->num_rows>0){
                    echo "
                    <td>".$user['subject_3']."</td>
                    <td>".$user['subject_gpa_3']."</td>
                    ";
                }
                }
            ?>
            </tr>
            
            <tr>
            <td>Subject 4:</td>
            
            <?php
                if($_SESSION['id']){
                $id=$_SESSION['id'];
                $sql = "SELECT * FROM result where id=$id";
                $query = $con->query($sql);
                $user = mysqli_fetch_assoc($query);
                if($query->num_rows>0){
                    echo "
                    <td>".$user['subject_4']."</td>
                    <td>".$user['subject_gpa_4']."</td>
                    ";
                }
                }
            ?>
            </tr>
            
            <tr>
            <td>Subject 5:</td>
            
            <?php
                if($_SESSION['id'] ){
                $id=$_SESSION['id'];
                $sql = "SELECT * FROM result where id=$id";
                $query = $con->query($sql);
                $user = mysqli_fetch_assoc($query);
                if($query->num_rows>0){
                    echo "
                    <td>".$user['subject_5']."</td>
                    <td>".$user['subject_gpa_5']."</td>
                    ";
                }
                }
            ?>
            </tr>
           </table>
           <div class="res">
            Result: <?php echo $user['res'];?>
           </div>
           <br>
           <div class="form">
           <form action="download_result.php" method="post">
           <input type="submit" name="submit" value="Download result">
           </form>
           </div>
        </div>
</section>
</body>
</html>