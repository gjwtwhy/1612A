<?php
/**
 * Created by PhpStorm.
 * User: guoju
 * Date: 2019/7/10
 * Time: 9:47
 */
//$a = '11110000222';
//$b = substr_count($a,'1');
//echo $b;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<p>Hello</p> php<p>!</p>
<div id="show" style="display: none">
hello
</div>

<a href="#" onclick="doclick();">按钮</a>
<script>
    function doclick(){
        //$("p").remove();
        //$("p").detach();
        //$("#show").html(Math.random());
       $(":hidden").each(function (i, v) {

       })
    }
</script>
</body>
</html>
