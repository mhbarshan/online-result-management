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
$subject_1= $_POST['subject_1'];
$subject_2= $_POST['subject_2'];
$subject_3= $_POST['subject_3'];
$subject_4= $_POST['subject_4'];
$subject_5= $_POST['subject_5'];
//$s_gpa_1=$s_gpa_2=$s_gpa_3=$s_gpa_4=$s_gpa_5=0;
$cgpa=0;
$gpa=0;
$usrid = ' ';
//$subject = array($subject_1,$subject_2,$subject_3,$subject_4,$subject_5);
//$s_gpa = array('0','0','0','0','0');
}
if(!empty($name) && !empty($dept) && !empty($series) && !empty($id) && !empty($subject_1) && !empty($subject_2) && !empty($subject_3) && !empty($subject_4) && !empty($subject_5)){
    $usr="SELECT * FROM result WHERE id = '$id' AND series='$series'";
        $res= mysqli_query($con, $usr);
        $num = mysqli_num_rows($res);
         if($num >=1){
            $usrid = $id.' Id has already inserted!';
         }
         else{
            $usrid = ' ';
 //   echo"$subject_1,$subject_2,$subject_3,$subject_4,$subject_5";
$sql= "INSERT into result (name,dept,series,id,subject_1,subject_2,subject_3,subject_4,subject_5) VALUES('$name','$dept','$series','$id','$subject_1','$subject_2','$subject_3','$subject_4','$subject_5')";
$con->query($sql);
//for($i=1;$i<=5;$i++){
if($subject_1>=80){
    $s_gpa_1=4.00;
    $sql1=  "UPDATE result SET subject_gpa_1=4.00  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_1<80 && $subject_1>=75){
    $s_gpa_1=3.75;
    $sql1=  "UPDATE result SET subject_gpa_1=3.75  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_1<75 && $subject_1>=70){
    $s_gpa_1=3.50;
    $sql1= "UPDATE result SET subject_gpa_1=3.5  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_1<70 && $subject_1>=65){
    $s_gpa_1=3.25;
    $sql1=  "UPDATE result SET subject_gpa_1= 3.25 WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_1<65 && $subject_1>=60){
    $s_gpa_1=3.00;
    $sql1=  "UPDATE result SET subject_gpa_1=3.00  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_1<60 &&$subject_1>=55){
    $s_gpa_1=2.75;
    $sql1=  "UPDATE result SET subject_gpa_1= 2.75 WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_1<55 && $subject_1>=50){
    $s_gpa_1=2.5;
    $sql1=  "UPDATE result SET subject_gpa_1=2.5  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_1<50 && $subject_1>=45){
    $s_gpa_1=2.25;
    $sql1=  "UPDATE result SET subject_gpa_1=2.25  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_1<45 && $subject_1>=40){
    $s_gpa_1=2.00;
    $sql1=  "UPDATE result SET subject_gpa_1=2.00  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_1<40){
    $s_gpa_1=0.00;
    $sql1= "UPDATE result SET subject_gpa_1=0.00  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
//2
if($subject_2>=80){
    $s_gpa_2=4.00;
    $sql1= "UPDATE result SET subject_gpa_2= 4.00  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_2<80 && $subject_2>=75){
    $s_gpa_2=3.75;
    $sql1= "UPDATE result SET subject_gpa_2=3.75  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_2<75 && $subject_2>=70){
    $s_gpa_2=3.50;
    $sql1= "UPDATE result SET subject_gpa_2= 3.50 WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_2<70 && $subject_2>=65){
    $s_gpa_2=3.25;
    $sql1= "UPDATE result SET subject_gpa_2=3.25  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_2<65 && $subject_2>=60){
    $s_gpa_2=3.00;
    $sql1= "UPDATE result SET subject_gpa_2=3.00  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_2<60 &&$subject_2>=55){
    $s_gpa_2=2.75;
    $sql1= "UPDATE result SET subject_gpa_2=2.75  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_2<55 && $subject_2>=50){
    $s_gpa_2=2.5;
    $sql1= "UPDATE result SET subject_gpa_2=2.5  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_2<50 && $subject_2>=45){
    $s_gpa_2=2.25;
    $sql1= "UPDATE result SET subject_gpa_2=2.25  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_2<45 && $subject_2>=40){
    $s_gpa_2=2.00;
    $sql1= "UPDATE result SET subject_gpa_2=2.00  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_2<40){
    $s_gpa_2=0.00;
    $sql1= "UPDATE result SET subject_gpa_2=0.00  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
//3
if($subject_3>=80){
    $s_gpa_3=4.00;
    $sql1= "UPDATE result SET subject_gpa_3=4.00  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_3<80 && $subject_3>=75){
    $s_gpa_3=3.75;
    $sql1= "UPDATE result SET subject_gpa_3=3.75  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_3<75 && $subject_3>=70){
    $s_gpa_3=3.50;
    $sql1= "UPDATE result SET subject_gpa_3=3.5  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_3<70 && $subject_3>=65){
    $s_gpa_3=3.25;
    $sql1= "UPDATE result SET subject_gpa_3=3.25  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_3<65 && $subject_3>=60){
    $s_gpa_3=3.00;
    $sql1= "UPDATE result SET subject_gpa_3=3.00  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_3<60 &&$subject_3>=55){
    $s_gpa_3=2.75;
    $sql1= "UPDATE result SET subject_gpa_3=2.75  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_3<55 && $subject_3>=50){
    $s_gpa_3=2.5;
    $sql1= "UPDATE result SET subject_gpa_3=2.5  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_3<50 && $subject_3>=45){
    $s_gpa_3=2.25;
    $sql1= "UPDATE result SET subject_gpa_3=2.25  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_3<45 && $subject_3>=40){
    $s_gpa_3=2.00;
    $sql1="UPDATE result SET subject_gpa_3=2.00  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_3<40){
    $s_gpa_3=0.00;
    $sql1= "UPDATE result SET subject_gpa_3=0.00  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
//4
if($subject_4>=80){
    $s_gpa_4=4.00;
    $sql1= "UPDATE result SET subject_gpa_4=4.00  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_4<80 && $subject_4>=75){
    $s_gpa_4=3.75;
    $sql1= "UPDATE result SET subject_gpa_4= 3.75 WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_4<75 && $subject_4>=70){
    $s_gpa_4=3.50;
    $sql1="UPDATE result SET subject_gpa_4=3.5  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_4<70 && $subject_4>=65){
    $s_gpa_4=3.25;
    $sql1= "UPDATE result SET subject_gpa_4=3.25  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_4<65 && $subject_4>=60){
    $s_gpa_4=3.00;
    $sql1= "UPDATE result SET subject_gpa_4=3.00  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_4<60 &&$subject_4>=55){
    $s_gpa_4=2.75;
    $sql1= "UPDATE result SET subject_gpa_4= 2.75 WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_4<55 && $subject_4>=50){
    $s_gpa_4=2.5;
    $sql1="UPDATE result SET subject_gpa_4= 2.5 WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_4<50 && $subject4>=45){
    $s_gpa_4=2.25;
    $sql1= "UPDATE result SET subject_gpa_4=2.25  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_4<45 && $subject_4>=40){
    $s_gpa_4=2.00;
    $sql1= "UPDATE result SET subject_gpa_4=2.00  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_4<40){
    $s_gpa_4=0.00;
    $sql1= "UPDATE result SET subject_gpa_4=0.00  WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
//5
if($subject_5>=80){
    $s_gpa_5=4.00;
    $sql1= "UPDATE result SET subject_gpa_5=4.00  WHERE id= $id AND series=$series   ";
    $con->query($sql1);
}
if($subject_5<80 && $subject_5>=75){
    $s_gpa_5=3.75;
    $sql1= "UPDATE result SET subject_gpa_5= 3.75 WHERE id= $id AND series=$series    ";
    $con->query($sql1);
}
if($subject_5<75 && $subject_5>=70){
    $s_gpa_5=3.50;
    $sql1= "UPDATE result SET subject_gpa_5=3.5  WHERE id= $id AND series=$series   ";
    $con->query($sql1);
}
if($subject_5<70 && $subject_5>=65){
    $s_gpa_5=3.25;
    $sql1= "UPDATE result SET subject_gpa_5=3.25  WHERE id= $id AND series=$series"  ;
    $con->query($sql1);
}
if($subject_5<65 && $subject_5>=60){
    $s_gpa_5=3.00;
    $sql1= "UPDATE  result SET subject_gpa_5= 3.00 WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_5<60 &&$subject_5>=55){
    $s_gpa_5=2.75;
    $sql1= "UPDATE  result SET subject_gpa_5= 2.75 WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_5<55 && $subject_5>=50){
    $s_gpa_5=2.5;
    $sql1= "UPDATE  result SET subject_gpa_5= 2.5 WHERE id= $id AND series=$series  ";
    $con->query($sql1);
}
if($subject_5<50 && $subject_5>=45){
    $s_gpa_5=2.25;
    $sql1= "UPDATE result SET subject_gpa_5= 2.25 WHERE id= $id AND series=$series ";
    $con->query($sql1);
}
if($subject_5<45 && $subject_5>=40){
    $s_gpa_5=2.00;
    $sql1= "UPDATE  result SET subject_gpa_5= 2.00 WHERE id= $id AND series=$series ";
    $con->query($sql1);
}
if($subject_5<40){
    $s_gpa_5=0.00;
    $sql1= "UPDATE result SET subject_gpa_5= 0.00 WHERE id= $id AND series=$series ";
    $con->query($sql1);
}
//}
if($subject_1>40 && $subject_2>40 && $subject_3>40 && $subject_4>40 &&$subject_5>40){
   // for($j=1;$j<=5;$j++){
        $gpa=(($s_gpa_1*3)+($s_gpa_2*3)+($s_gpa_3*3)+($s_gpa_4*3)+($s_gpa_5*3));
  //  }
    $cgpa=$gpa/15;
    $sql2="UPDATE result SET CGPA=$cgpa, res='Cleared all courses' WHERE id= $id AND series=$series ";
    $con->query($sql2);
}
else{
    $sql2="UPDATE result SET CGPA='Not Calculated', res='All courses are not cleared' WHERE id= $id AND series=$series  ";
    $con->query($sql2);
}


header('location:add_result.php?inserted');
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add result</title>
    <link rel="stylesheet" href="studentsignup.css">
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
        if(isset($_GET['inserted'])){
            echo "<h4 style='color:greenyellow;text-align: center;margin: 0;font-size: 16px;padding: 0;font-weight: bold;'>Result have succesfully inserted!!!</h4>";
        }
        ?>
            <h1>Add Result</h1>
            <form action="" method="post">
                <p>Name</p>
                <input type="text" required name="name" placeholder="Enter name">
                <p>Depatment</p>
                <input type="text" required name="dept" placeholder="Enter name">
                <p>Series</p>
                <input type="text" required name="series" placeholder="Enter your series">
                <p>ID</p>
                <input type="text" required name="id" placeholder="Enter your student id">
                <span ><?php if(isset($_POST['submit'])){ echo " <h5 style='color:	#8b0000;text-align: center;margin: 0;font-size: 14px;padding: 0;font-weight: bold;  margin-bottom: 6px;'> $usrid</h5>"; }?></span>
                <p>Subject 1</p>
                <input type="text" required name="subject_1" placeholder="Enter number">
                <p>Subject 2</p>
                <input type="text" required name="subject_2" placeholder="Enter number">
                <p>Subject 3</p>
                <input type="text" required name="subject_3" placeholder="Enter number">
                <p>Subject 4</p>
                <input type="text" required name="subject_4" placeholder="Enter number">
                <p>Subject 5</p>
                <input type="text" required name="subject_5" placeholder="Enter number">
                <input type="submit" name="submit" value="Add Result">
            </form>
        
        
        </div>

    </section>
</body>
</html>
