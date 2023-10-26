<?php

session_start();

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'login_db');
$user_name= isset($_POST["name"]);
$password= isset($_POST["pass"]);

$s = " select * from users where user_name = '$user_name' ";

$result = mysqli_query($con, $s);
$num= mysqli_num_rows($result);

if($num==1){
    echo"Username has already taken by another user. Choose an another username, Please!";

}
else{
    $reg ="insert into users (user_name,password) values('$user_name' , '$password') ";
    mysqli_query($con, $reg);
    echo"Registration Successful";
}

?>