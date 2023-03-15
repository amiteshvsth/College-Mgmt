<?php
$db_host='localhost';
$db_username='root';
$db_password='';
$db_name='mydb';

 $con = mysqli_connect($db_host,$db_username,$db_password,$db_name) //connection
 or die('Error Connecting to Database.');
?>