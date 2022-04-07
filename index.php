<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body><center>
 <br><br><br>
 <?php echo '<p><b>TST Environment</b></p>'; 
 
 $image_url='https://nordcloud.com/wp-content/uploads/2022/01/nordcloud-ibm-logo.svg';
 
 ?> 
<br>
<img style="width: 20%" src="<?php echo $image_url;?>">
<br><br><br>

<?php
$servername = "10.0.2.4";
$username = "azureadmin";
$password = "ar2rooo1234!";
$db = "db_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully with " . $db;
?>


 </center></body>
</html>



