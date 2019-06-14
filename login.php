<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登入頁面</title>
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <script type="text/javascript" src="js/login.js"></script>
</head>
<body>
    <div id="login_frame">
        <p id="image_logo"><img src="img/Login.png" style="width:400px;height:80px;"></p>
        <form name="login" method="post" action="login_check.php">
            <p><label class="label_input">帳號</label><input type="text" id="username" class="text_field" name="username" /></p>
            <p><label class="label_input">密碼</label><input type="password" id="password" class="text_field" name="password" /></p>
            <div id="login_control">
                <input type="submit" name="submit" id="btn_login" value="登入"  />
                <!-- <input type="button" id="btn_login" value="註冊" style="position:relative; left:5px;" /> -->
                <!-- <a id="forget_pwd" href="forget_pwd.html" >忘記密碼？</a> -->
            </div>
        </form>
    </div>
</body>
</html>