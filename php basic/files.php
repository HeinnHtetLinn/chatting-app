<?php

$file = fopen("a.txt","w")or die ("File is not open");
// echo fread($file,filesize("a.txt"));
$text = "Are you fucking babe?Damm It!";

fwrite($file,$text);

fclose($file);





?>