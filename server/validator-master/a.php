<?php
###### db ##########
$db_username = 'root';
$db_password = '';
$db_name = 'demo';
$db_host = 'localhost';

################
$n1=$_POST['user'];

$pass=$_POST['password'];


$connecDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');
            
mysqli_query($connecDB,"insert into why values('$n1','$pass')");
//mysql_query("insert into emplogin values('$e','$cp')");
echo"<h3>REGISTATION CONFIRMED</h3><br>";
echo"<a href=login.php>you can<b>login</b>now....</a>";

        
  mysqli_close($connecDB);
?>

