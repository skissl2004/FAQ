<?php
// $con=mysqli_init(); 
// mysqli_real_connect($con, "laraveldb.mysql.database.azure.com", "laraveldb@laraveldb", "Toppath@2019", "mysql", 3306);
$host = 'mydemoserver.mysql.database.azure.com';
$username = 'myadmin@mydemoserver';
$password = 'Toppath@2019';
$db_name = 'mysql';

//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}



?>