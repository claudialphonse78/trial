<html>
    <head>
        <script src="jquery-1.11.2.js"></script>
        <link rel="stylesheet" href="success-css.css" type="text/css" />
    </head>
    <body>

	<div class="logo">
<img src="starfall-2014.png" width="220" height="60" alt="Starfall" />
</div>
   <div class="header">

</div>
    </body>
</html>
<?php
###### db ##########
$db_username = 'root';
$db_password = '';
$db_name = 'demo';
$db_host = 'localhost';

################
$n1=$_REQUEST['name'];
$u=$_REQUEST['username'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['password'];

$startdate=(date("d-m-Y"));
$enddate=date("d-m-Y",strtotime("$startdate+60days"));


$connecDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');       
mysqli_query($connecDB,"insert into `freeuser2` values('NULL','".$n1."','".$u."','".$email."','".$pass."','".$startdate."','".$enddate."')");
//mysql_query("insert into emplogin values('$e','$cp')");
$idname= mysqli_insert_id($connecDB);

mysqli_query($connecDB,"insert into `registereduser2` values('".$idname."','0','".$enddate."')");
mysqli_query($connecDB,"insert into `loginfree` values('NULL','".$u."','".$pass."')");
echo"<h1>REGISTRATION CONFIRMED </h1><br>";
echo"<h1 id=reg><a href=http://localhost/php/phpAjaxLoginValidation/loginfree.php>you can<b>login</b>now....</a><h1>";


      
     
        
        mysqli_close($connecDB);
?>

