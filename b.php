<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php嵌入html代码</title>
</head>
<?php echo 'hello'?>
<body>
<p>
    时间：<?php
    date_default_timezone_set('PRC');
    echo date('Y-m-d H:i:s');
    ?>
</p>
<form>
    内容表单：<input type="text">
</form>
</body>
</html>
