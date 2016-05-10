<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>普通变量</h1>
    <?php echo ($str); ?>
<hr />
<h1>数组变量</h1>
    <!--正常访问-->
    <!--<?php echo ($person["name"]); ?>-<?php echo ($person['age']); ?>-->
    <!--特殊方法-->
    <?php echo ($name); ?>-<?php echo ($age); ?>
<hr />
<h1>对象变量</h1>
    <?php echo ($obj->name); ?>-<?php echo ($obj->age); ?>
<hr />
</body>
</html>