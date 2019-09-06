<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
function findMin($arr){
    $min = $arr[0];
    for ($i =0; $i< count($arr);$i++){
        if ($arr[$i]< $min){
            $min = $arr[$i];
        }
    } return $min;
}
$a = [4,2,1,5];
echo findMin($a);
?>
</body>
</html>