<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "dbms";
$con = new mysqli($servername,$username,$password,$database);           //https://www.w3schools.com/php/php_ref_mysqli.asp    https://www.youtube.com/watch?v=wp6Ngpk5XiY
if($con->connect_error) {                                   
    die("failed to connect to server".$con->connect_error);
}else{
    echo "connected successfully";
}

$user = $_POST['adminuser'];
if(isset($_POST['logadminuser']))
{
    if (empty ($user)) //if username field is empty echo below statement
    {
        echo "you must enter your unique username <br />";
    }
    /*if (empty ($_REQUEST['pass'])) //if password 1 field is empty echo below statement
    {
        echo "you must enter your password <br />";
    }*/
}
else {
  $sql = "Select * from administrator where a_id='".mysqli_real_escape_string($user)."'";
$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result) == 1) {
  echo "Pass";
  } else {
  echo "Fail";
  }
}
/*
echo "alert ('boo')";
while($row = mysqli_fetch_array($result)){
  echo "document.getElementById('Aid').innerHTMl = ". $row['a_id'];
}
*/

/*
$value1 = $_POST['adminuser'];
$value2 = $_POST['adminpass'];
$sql="SELECT a_id,a_pass FROM administrator where a_id=$value1";
if ($result=mysqli_query($con,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
      echo "checkpassadmin()
      <script type='text/javascript'>
     function checkpassadmin(){
  if($row[1]==$value2)
      alert('Enter Password');
  else
  location.replace('profile-admin.html')
}
</script>";
      //printf ("<br>%s \n",$row[0]);
    }
  mysqli_free_result($result);
}*/
mysqli_close($con);
?>
</body>
</html>