<?php
// $con=mysqli_init(); 
// mysqli_real_connect($con, "laraveldb.mysql.database.azure.com", "laraveldb@laraveldb", "Toppath@2019", "mysql", 3306);
$DBNAME = "mysql";
$DBUSER = "laraveldb@laraveldb";
$DBPASSWD = "Toppath@2019";
$DBHOST = "laraveldb.mysql.database.azure.com";
$DBPORT = 3306;
$conn = mysqli_connect( $DBHOST, $DBUSER, $DBPASSWD,$DBPORT);
if (empty($conn)){
  print mysqli_error($conn);
  die ("無法連結資料庫");
  exit;
}
if( !mysqli_select_db($conn, $DBNAME)) {
  die ("無法選擇資料庫");
}
mysqli_query( $conn, "SET NAMES 'utf8'");// 設定連線編碼



?>