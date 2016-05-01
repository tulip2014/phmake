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

echo "hello php!";
$a = 10;
echo $a;

function fab($n)
{
    if ($n <= 1) {
        return 1;
    } elseif ($n == 2) {
        return 1;
    } else {
        return fab($n - 1) + fab($n - 2); 
    }
}

echo fab(10);
echo '良好';

?>

</body>
</html>

