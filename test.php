<?php
//    echo 'Hello, world' . PHP_EOL;
//    echo false;
    $myBool = true;
//    echo $myBool . PHP_EOL;
//    echo $myBool;
    $float1 = 8-6.4;
    $float2 = 1.6;
    var_dump($float1 == $float2) . PHP_EOL;
    echo (int)((0.1 + 0.7)*10)  . PHP_EOL;

$str1 = ' single ';
$str2 = "double\n";
echo "$str2" . '$str1' ;

$str3 = <<< HHH
areybazbiubx    
 k kdtuk txkcuk rrkdt
 k x d  ukd   td ttkdt kdkd ktxx
 k d  d kdk dtk di
HHH;

echo $str3;

$foo = "0 . \n";
var_dump($foo);

echo __FILE__;
echo __LINE__;
