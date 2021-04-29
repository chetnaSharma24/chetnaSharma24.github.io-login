<?php

$mysql_host='localhost';
$mysql_username='root';
$mysql_pwd='';
$mysql_db='loginsystem';


//connect to the database
$connectlink=@mysqli_connect($mysql_host,$mysql_username,$mysql_pwd,$mysql_db);


if(!$connectlink)
die('not connected to mysql database');

?>