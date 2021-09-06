<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'dbms');

$name = $_POST['patuser'];
$pass = $_POST['patpass'];

$s = "SELECT * FROM patient_info where pid = '$name' && password = '$pass'";
$sql = "SELECT * FROM dependent where pid = '$name'";
$result = mysqli_query($con,$s);
$res = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);
if($num==1){
    $row = mysqli_fetch_array($result);
    $dep = mysqli_fetch_array($res);
    $_SESSION['patient']=$row['fname'];
    $_SESSION['init']=$row['fname'][0];
    $_SESSION['estatus']=$row['employment_status'];
    $_SESSION['dfname']=$dep['fname'];
    $_SESSION['dinit']=$dep['fname'][0];
    $_SESSION['dlname']=$dep['lname'];
    $_SESSION['phno']=$dep['phone_no'];
    $_SESSION['rel']=$dep['relationship'];
    header('location:profile-patient.php');
}else{
    header('location:Login-Patient.php');
}
mysqli_close($con);
?>