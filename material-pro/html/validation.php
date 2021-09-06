<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'dbms');

$name = $_POST['adminuser'];
$pass = $_POST['adminpass'];

$s = "SELECT * FROM administrator where a_id = '$name' && a_pass = '$pass'";
//$sql = "SELECT * FROM doc where a_id = '$name'";
//$res = mysqli_
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num==1){
    $_SESSION['user']=$name;
    $_SESSION['id']=$name;
    header('location:Admin-Dashboard.php');
}else{
    header('location:Login-Admin.php');
}
mysqli_close($con);
?>
