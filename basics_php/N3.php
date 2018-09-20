<?php
$var1 =2;
$var2= 2;
$var3 = 5;
$addition = 5;

    if($var1 !== $var2 && $var2 !== $var3 && $var3 !== $var1){
        echo "no matches".PHP_EOL;
    }

else echo $var1+$addition; echo  $var2+$addition; echo $var3+$addition; echo PHP_EOL;

$readVar1;
$readVar2;
$age = mt_rand(1, 40);

//$color = ($str%2)?'red':'white'; // ternary operator

$num = 30;
$fruit = 'apple';
$plural = ($num>1)?'s':' ';
    echo  'You have ' . "$num " . "$fruit". "$plural ". PHP_EOL;

   $bar = 4;
   switch ($bar){

       case 1 :
           echo 'Not correct';
           break;
       case 4 :
           echo 'The case 4 is correct';
           $foo =22;
           break;
       case 5:
           echo 'The case 5 is correct';
           $foo =34;
           break;
       default:
           echo 'Default';
           break;
   }

//    if ($month < 3 && $month == 12) {
//           echo 'winter';
//    }
//    if ($month <6 && $month>= 3){
//        echo 'spring';
//    }
//    if ($month <9 && $month>= 6){
//    echo 'summer';
//    }
//    if ($month <12 && $month>= 9){
//        echo 'fall';
//    }
//    else echo 'wrong entry';
//
//
//switch ($month) {
//    case 1:
//        echo 'winter';
//        break;
//    case 2:
//        echo 'winter';
//        break;
//    case 3:
//        echo 'spring';
//        break;
//    case 4:
//        echo 'spring';
//        break;
//    case 5:
//        echo 'spring';
//        break;
//    case 6:
//        echo 'summer';
//        break;
//    case 7:
//        echo 'summer';
//        break;
//    case 8:
//        echo 'summer';
//        break;
//    case 9:
//        echo 'fall';
//        break;
//    case 10:
//        echo 'fall';
//        break;
//    case 11:
//        echo 'fall';
//        break;
//    case 12:
//        echo 'winter';
//        break;
//    default:
//        echo "WTH";
//        break;
//
//}
function helloWorld(){
        echo "Helloworld".PHP_EOL;
}
helloWorld();

$seasonName;
$month = 12;
    function seasonName($month)
    {
        if ($month < 3 && $month == 12) {
           $seasonName= 'winter';
    }
    if ($month <6 && $month>= 3){
        $seasonName=  'spring';
    }
    if ($month <9 && $month>= 6){
        $seasonName=  'summer';
    }
    if ($month <12 && $month>= 9){
        $seasonName=  'fall';
    }
    else $seasonName= 'wrong entry';

    return $seasonName;}

echo seasonName($month);


$varRand1 = mt_rand(1,3);
$varRand2 = mt_rand(1,3);

function compare($varRand1, $varRand2 )
{
    if ($varRand1 < $varRand2) {
        echo 'less';
    }
    if ($varRand1 > $varRand2) {
        echo 'more';
    }
    if ($varRand1 == $varRand2) {
        echo 'equals';
    }
}
compare($varRand1,$varRand2);