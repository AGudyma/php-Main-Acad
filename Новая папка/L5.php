<?php
//$a= 12;
//function byRef(&$a)
//{
//    $a += 24;
//echo "$a";}
//
//var_dump($a);
//byRef($a);
//
//
//function show_num_args()
//{
//    $num = func_num_args();
//    $args = func_get_args();
//    $arg6 = func_get_arg(6);
//    var_dump($num, $args, $arg6);
//}
//show_num_args(1, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);


//function getFruitName($number, $single = 'яблоко',$smallPlural = 'яблокa', $largePlural = 'яблок' )
//{
//    if ($number == 0 ) {
//        echo "$largePlural";
//    } elseif ($number >0 && $number<5) {
//        echo "$smallPlural";
//    } elseif ($number >= 5 && $number < 10) {
//        echo "$largePlural";
//    }
//    else echo "$single";
//
//}
//
//getFruitName($number);
$number = 3;
function getFruitName($number, $single = 'яблоко',$smallPlural = 'яблокa', $largePlural = 'яблок' )
{
    if ($number == 0 ) {
       $fruitName = "$largePlural";
    } elseif ($number >0 && $number<5) {
        $fruitName = $smallPlural;
    } elseif ($number >= 5 && $number < 10) {
        $fruitName =$largePlural;
    }
    else echo "$single";

    return $fruitName;}

$fruitName = getFruitName($number);
