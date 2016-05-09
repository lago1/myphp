<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php if(is_array($data)): foreach($data as $key=>$vo): echo ($vo['id']); ?>
        <?php echo ($vo['g_name']); ?>
        <?php echo ($vo['g_price']); ?>
        <hr /><?php endforeach; endif; ?>
</body>
</html>