<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome to XAMPP</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: macalyou
 * Date: 2016/4/5
 * Time: 22:59
 */
require_once "retangle.php";

function fab($n)
{
    $arr = array("key"=>"balue");
    print_r($arr);
    echo json_encode($arr);

    $file = fopen("test.txt", "w");
    if ($file) {
        fwrite($file, "testadf");
        fclose($file);
    } else {
        echo "create file fail";
    }

}

echo fab(10);

?>

</body>
</html>

