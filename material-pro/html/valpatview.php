<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'dbms');

$name = $_POST['pat'];

$s = "SELECT * FROM medical_history where p_id = '$name'";      //JOIN patient_info ON medical_history.p_id=patient_info.pid
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
/*
$cnt=1;
echo "<table>
<tr>
<th>#</th>
<th>Disease</th>
<th>Prescription</th>
<th>Reference number</th>
</tr>";*/
if($num!=0){
    $_SESSION['id']=$name;
    header('location:table-basic.php');
}else{
    header('location:index.php');
}
//echo "</table>"
mysqli_close($con);
?>
