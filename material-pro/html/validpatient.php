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
    $_SESSION['p2']=$row['mname'];
    $_SESSION['p3']=$row['lname'];
    $_SESSION['init']=$row['fname'][0];
    $_SESSION['id']=$row['pid'];
    $_SESSION['flatno']=$row['flatno'];
    $_SESSION['area']=$row['area'];
    $_SESSION['street']=$row['street'];
    $_SESSION['city']=$row['city'];
    $_SESSION['gender']=$row['gender'];
    $_SESSION['state']=$row['state'];
    $_SESSION['pincode']=$row['pincode'];
    $_SESSION['age']=$row['age'];
    $_SESSION['password']=$row['password'];
    $_SESSION['employ']=$row['employment_status'];
    $_SESSION['phone_no']=$row['phone_no'];
    $_SESSION['estatus']=$row['employment_status'];
    $_SESSION['dfname']=$dep['fname'];
    $_SESSION['dinit']=$dep['fname'][0];
    $_SESSION['dlname']=$dep['lname'];
    $_SESSION['phno']=$dep['phone_no'];
    $_SESSION['rel']=$dep['relationship'];
    header('location:index.php');
}else{
    header('location:Login-Patient.php');
}
mysqli_close($con);
?>
