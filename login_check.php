<?php session_start();?>
<?php require_once "db_conn.php"; //db連線 ?>
<?php
header("Content-Type: text/html; charset=utf8");
if (!isset($_POST["submit"])) {
    exit("錯誤執行");
} //檢測是否有submit操作
$name = $_POST['username']; //post獲得使用者名稱錶單值
$passowrd = $_POST['password']; //post獲得使用者密碼單值
if ($name && $passowrd) { //如果使用者名稱和密碼都不為空
    $sql4 = "select * from login where username = '$name' and password='$passowrd'"; //檢測資料庫是否有對應的username和password的sql
    $result4 = mysqli_query($conn, $sql4); //執行sql
    $rows = mysqli_fetch_assoc($result4); //返回一個數值
    if ($rows) { //0 false 1 true
        $_SESSION['pm'] = $rows['permission'];
        $_SESSION['nk'] = $rows['nickname'];
        header("refresh:0;url=index.php"); //如果成功跳轉至index.php頁面
        exit;
    } else {
        echo "使用者名稱或密碼錯誤";
        echo "
    <script>
    setTimeout(function(){window.location.href='login.php';},10000);
    </script>
    "; //如果錯誤使用js 1秒後跳轉到登入頁面重試;
    }
} else { //如果使用者名稱或密碼有空
    echo "表單填寫不完整";
    echo "
    <script>
    setTimeout(function(){window.location.href='login.php';},10000);
    </script>";
    //如果錯誤使用js 1秒後跳轉到登入頁面重試;
}
// mysqli_close($conn);//關閉資料庫
