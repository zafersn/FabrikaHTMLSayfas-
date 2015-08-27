<?php    
 $host='localhost';
 $user='root';
 $password='';
 $db='android_api';

 //PHP 5.4 o earlier (DEPRECATED)
 $con = mysql_connect($host,$user,$password) or exit("Connection Error");
 $connection = mysql_select_db($db, $con);

 //PHP 5.5 (New method)
 $connection =  mysqli_connect($host,$user,$password,$db);
?>