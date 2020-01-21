<?php
$hostName = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'CSEB';

if(mysqli_connect($hostName, $username, $password, $databaseName))
{
	echo "Connection successful";
}
else
{
	echo "Connection failed" + mysqli_connect_error();
}
?>