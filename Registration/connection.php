<?php

$con=mysql_connect("localhost", "root","") or die("not connected");

mysql_select_db("student", $con);

extract($_POST);
if(isset($save)){
    
}
?>