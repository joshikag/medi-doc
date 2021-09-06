<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'dbms');

$id = $_POST['patid'];
$pass = $_POST['patpass'];
$docid = $_POST['docid'];
$dis = $_POST['dis'];
$pres = $_POST['pres'];
$ref = $_POST['ref'];
$sql = "SELECT * FROM patient_info where pid = '$id' && password = '$pass'";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);
if($num==1){
    $s = "INSERT INTO medical_history values ('$id','$dis','$pres','$docid','$ref')";
    $res = mysqli_query($con,$s);
    header('location:Admin-Dashboard.php');
}else{
    header('location:patient-record-modify.php');
}
mysqli_close($con);
?>
