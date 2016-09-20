<?php
require('config.php');

if(!empty($_POST['section']) and !empty($_POST['status']))
{ 
	$query = "UPDATE settings SET  status = '".$_POST['status']."', updated_on = '".date('Y-m-d h:m:s')."' WHERE section = '".$_POST['section']."'";
	
	if(mysql_query($query))
		echo "1";
	else
		echo "2";
		
}
?>