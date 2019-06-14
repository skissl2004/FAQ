<!-- <?php session_start() ?> -->
<?php require_once("db_conn.php");//db連線 ?>
<?php
$name = $_SESSION['name'];//post獲得使用者名稱錶單值
$passowrd = $_SESSION['password'];//post獲得使用者密碼單值
function session_ch(){
    $sql_pm = "select * from login where username = '$name' and password='$passowrd'";//檢測資料庫是否有對應的username和password的sql
    $result_pm = mysqli_query($conn,$sql_pm);//執行sql
    $rows_pm = mysqli_num_rows($result_pm);//返回一個數值
    // session_start();
    $_SESSION["pm"] = $rows_pm["permission"];
}

// if($session['pm'] = "1"){
// echo "OK";
// }
// else{
//     echo "fail";
// }
?>
