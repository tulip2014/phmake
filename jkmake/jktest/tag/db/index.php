<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/2
 * Time: 14:57
 */

$conn = mysqli_connect("localhost", "root", "");

if ($conn)
{
    echo "success<br>";

    mysqli_select_db($conn, "phptest");
    $result = mysqli_query($conn, "select * from users");

    if ($result) {
        $result_arr = mysqli_fetch_assoc($result);

        print_r($result_arr);

        echo (mysqli_num_rows($result));
    } else {
        echo "getinfo fail";
    }


} else {
    echo "connect fail";
}

