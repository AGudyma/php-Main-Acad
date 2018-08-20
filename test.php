<?php
//    echo 'Hello, world' . PHP_EOL;
//    echo false;
//    $myBool = true;
//    echo $myBool . PHP_EOL;
//    echo $myBool;
//    $float1 = 8-6.4;
//    $float2 = 1.6;
//    var_dump($float1 == $float2) . PHP_EOL;
//    echo (int)((0.1 + 0.7)*10)  . PHP_EOL;
//
//$str1 = ' single ';
//$str2 = "double\n";
//echo "$str2" . '$str1' ;
//
//$str3 = <<< HHH
//areybazbiubx
// k kdtuk txkcuk rrkdt
// k x d  ukd   td ttkdt kdkd ktxx
// k d  d kdk dtk di
//HHH;
//
////echo $str3;
//
//$foo = "0 . \n";
//var_dump($foo);
//
////echo __FILE__;
////echo __LINE__;
////echo __DIR__;
//
//$arrayTest = [ 3, 3, 55,332, 1, 0];
//echo  is_array($arrayTest); PHP_EOL;
//echo is_integer($float1) ;
//var_dump($float1);
//echo print_r($arrayTest);
var_dump($_GET);
define('EMAIL' , 'xxxx@xxxx.yyyy');
var_dump(EMAIL,__LINE__);
echo $a = 2**3;
   var_dump($a);
$a = 1;
echo __LINE__. ':' . ++$a .PHP_EOL;
echo __LINE__. ':' . $a++ .PHP_EOL;
echo __LINE__. ':' . $a-- .PHP_EOL;
echo __LINE__. ':' . --$a .PHP_EOL;

//$r = 1;
//$r .= $r++;
//echo $r;

$a = 'abcd';


$pos = strpos($a, 'ab');
echo  $pos = strpos($a, 'ab');
if ($pos == false) {
    echo 'Found' . __LINE__;
}

$pos = strpos($a, 'ad');
echo  $pos = strpos($a, 'ad');
if ($pos == false) {
    echo 'Found' . __LINE__;
}

var_dump("1" == "01");
var_dump("1"==="01");




