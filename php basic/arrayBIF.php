<?php


// array BIF
 
$color=  array("red","green","blue");
$color2= array("yellow","grey");

$color3 = array_merge($color,$color2);

// array_push($color,"black");
// unset($color[1]);
// $color[0]="yellow";

// print_r($color3);


// String BIF

$pass=md5("12345");
echo $pass;
echo "<br>";


// Date function
date_default_timezone_set("Asia/Yangon");
echo "Today is " .date("Y/m/d")."<br>";
echo "Today is " .date("Y-m-d")."<br>";
echo "Today is " .date("l"). "<br>";
echo "Today is " .date("h:i:s a"). "<br>";
echo "Now time zone is " .date("Y.m.d h:i:s a"). "<br>";
echo "Current date is ".time();


?>