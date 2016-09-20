<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "resume";
// Create connection
mysql_connect($servername,$username,$password);
mysql_select_db($database) or die( "Unable to select database");


?>