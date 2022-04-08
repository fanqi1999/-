<?php   
$link=mysql_connect("localhost", "root", "");   
	if ($link)       
	echo "ok!!!!";   
	else       
	echo "Error!!!!";   
mysql_close(); 
?>
