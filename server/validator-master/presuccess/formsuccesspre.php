<html>
    <head>
        <script src="jquery-1.11.2.js"></script>
        <link rel="stylesheet" href="success-css.css" type="text/css" />
    </head>
    
        <body>	
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
$name=$_REQUEST['name'];
$occu=$_REQUEST['occupation'];
$user=$_REQUEST['username'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['password'];
$tel=$_REQUEST['phone'];
$gen=$_REQUEST['dropdown'];
$card=$_REQUEST['multi1'];


$connecDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');       
mysqli_query($connecDB,"insert into `premiumuser2` values('NULL','".$name."','".$occu."','".$user."','".$email."','".(date("d-m-Y"))."','".$pass."','".$tel."','".$gen."')");
//mysql_query("insert into emplogin values('$e','$cp')");
$idname= mysqli_insert_id($connecDB);

mysqli_query($connecDB,"insert into `registereduser3` values('NULL','".$idname."','".$user."','3000','".$card."')");
mysqli_query($connecDB,"insert into `login1` values('NULL','".$user."','".$pass."')");
echo"<h1>REGISTRATION CONFIRMED </h1><br>";
echo"<h1 id=reg><a href=http://localhost/php/phpAjaxLoginValidation/login.php>you can<b>login</b>now....</a><h1>";


      
     
        
        mysqli_close($connecDB);
?>

