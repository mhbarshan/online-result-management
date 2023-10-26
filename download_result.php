<?php
session_start();
$con = new mysqli('localhost','root','','login_db');
if(!$con){
    echo 'Not connect';
}
require"dompdf/autoload.inc.php";

use Dompdf\Dompdf; 

ob_start();
error_reporting(0);
?>
<?php
   
    if($_SESSION['id'] && $_SESSION['first_name']){
        $id=$_SESSION['id'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Result</title>
</head>
<style>
    .content{
    text-align: center;
    color: black;
    align-items: center;
}
.content table, th, td {
  border: 0px solid rgb(255, 255, 255);
}
.content th, td{
    padding: 10px;
}
.content th{
    font-size: 22px;
    font-weight: bold;
}
.content table {
    margin-left: auto;
    margin-right: auto;
  align-items: center;
}
</style>
<body>
<section class="header"> 
    <div class="ruet">
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
           <table border="2">
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
                if($_SESSION['id'] ){
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
                if($_SESSION['id'] ){
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
           <br>
           <div class="res">
            Result: <?php echo $user['res'];?>
           </div>
           </div>
</section>
</body>
</html>
<?php
$html = ob_get_clean();


$dompdf = new dompdf();

$dompdf->set_option('enable_html5_parser', TRUE);

$dompdf->loadHtml($html); 
 

$dompdf->setPaper('A4', 'potrait'); 
 

$dompdf->render(); 
 

$dompdf->stream("result");
?>