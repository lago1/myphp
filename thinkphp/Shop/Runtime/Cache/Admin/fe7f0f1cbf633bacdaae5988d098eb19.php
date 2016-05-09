<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="/index.php/Admin/Public/checklogin" method="post">
        用户名：<input type="text" name="username" />
        密码:<input type="password" name="password" />
        <input type="submit" name="submit" value="登录" />
    </form>
</body>
</html>