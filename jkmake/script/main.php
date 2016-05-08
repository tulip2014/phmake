

<?php
/**fgeb
 * Created by PhpStorm.
 * User: macalyou
 * Date: 2016/5/5
 * Time: 22:59
 */

// 定义使用常量
//define("MYTEST", "TESTFLAG");
//echo MYTEST;


//使用系统变量
//echo PHP_VERSION;


//改变数据的类型
//settype


//全局变量,可以通过phpinfo看出来
//$GLOBALS["VAR"];
//echo $GLOBALS["PHP_SELF"];


//判断数据类型
//is_array(mixed var);


//explode
$src = "asdfghdfjkldfsd";
$lin = "d";
$temp = explode($src, $lin);
echo count($temp);
echo "<br>";
for ($i=0; $i < count($temp); $i++) { 
	echo $temp[$i];
}
