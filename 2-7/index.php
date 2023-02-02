<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>
    配列・連想配列
</h1>


<h3>課題出力結果</h3>

<?php 
$color_list = ["red" => "赤", "blue" => "青", "green" => "緑"]; 
var_dump($color_list);
$color_list["yellow"] = "黄色";
var_dump($color_list);

$color_array = [];
$color_array[0] = "hoge";
$color_array[1] = "bafy";
$color_array[2] = "dage";
var_dump( $color_array );


?>

</body>
</html>
