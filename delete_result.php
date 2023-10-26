<?php
$con = new mysqli('localhost','root','','login_db');
if(!$con){
    echo 'Not connect';
}
if (isset($_POST['submit'])){ 
$name= $_POST['name'];
$dept= $_POST['dept'];
$series= $_POST['series'];
$id= $_POST['id'];
$msg=' ';
/*$subject_1= $_POST['subject_1'];
$subject_2= $_POST['subject_2'];
$subject_3= $_POST['subject_3'];
$subject_4= $_POST['subject_4'];
$subject_5= $_POST['subject_5'];*/

}
if(!empty($name) && !empty($dept) && !empty($series) && !empty($id)){
    $sql="SELECT * FROM result WHERE series = '$series' AND id = '$id' ";
    $query = $con->query($sql);
    $user = mysqli_fetch_object($query);
   
   if($query->num_rows>0){
       $msg=' ';
       $sql= "DELETE FROM `result` WHERE series=$series AND id=$id";
       $con->query($sql);
       header('location:delete_result.php?deleted');
        }
        
    else{
          $msg=$id.' id is not found in Database!';
      }
 //   echo"$subject_1,$subject_2,$subject_3,$subject_4,$subject_5";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete result</title>
    <link rel="stylesheet" href="delete_result.css">
    <link rel="stylesheet" href="test.css">
</head>
<body>
    <section class="header">
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
                </li>
               <li><a href="teacher_profile.php">Profile</a></li>
               <li><a href="contactus.html">Contact Us</a></li>
           </ul>
       </nav>
       <br>
       <br><br>
    </section>

    <section class="headerr">
        <div class="signup_form">
            <img src="images/working.png" class="avatar">
            <?php
        if(isset($_GET['deleted'])){
            echo "<h4 style='color:greenyellow;text-align: center;margin: 0;font-size: 16px;padding: 0;font-weight: bold;'>Result have succesfully deleted!!!</h4>";
        }
        ?>
            <h1>Delete Result</h1>
            <form action="" method="post">
                <p>Name</p>
                <input type="text" required name="name" placeholder="Enter name">
                <p>Depatment</p>
                <input type="text" required name="dept" placeholder="Enter name">
                <p>Series</p>
                <input type="text" required name="series" placeholder="Enter your series">
                <p>ID</p>
                <input type="text" required name="id" placeholder="Enter your student id">
                <span ><?php if(isset($_POST['submit'])){ echo " <h5 style='color:	#8b0000;text-align: center;margin: 0;font-size: 14px;padding: 0;font-weight: bold;  margin-bottom: 16px;'> $msg</h5>"; }?></span>
                <input type="submit" name="submit" value="Delete Result">
            </form>
        
        
        </div>

    </section>
</body>
</html>
