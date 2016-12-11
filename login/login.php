<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form-box">
    <form action="doAction.php" method="post">
        <div class="input-text">
            <label for="username"></label>
            <input type="text" id="username" name="username" placeholder="请输入用户名">
        </div>
        <div class="input-text">
            <label for="password"></label>
            <input type="password" id="password" name="password" placeholder="请输入密码">
        </div>
        <div class="input-text btn-sub">
            <input type="submit" value="登录" id="login" />
        </div>
    </form>
</div>

<script src="js/app.js"></script>
</body>
</html>