<form action="/basics_php/N4.php">
   Input: <input type="text" name="input"><br>
<!--<!--    Last name: <input type="text" name="lname"><br>-->-->
<!--    <input type="submit" value="Submit">-->
</form>

<?php
$input = $_GET["input"];
//$year = $_GET["year"];
//echo 'You have entered ' . htmlspecialchars($_GET["year"]) . '!' . PHP_EOL;
//
//
//function Is_bissextile()
//{
//    $division100 = $_GET["year"]%100;;
//    $division4 = $_GET["year"]%4;;
//    $division400 = $_GET["year"]%400;;
//    $rest = $_GET["year"]%200;
//    if ($division4 !== 0 && $division400 !== 0 &&$division100 !== 0) {
//        echo "common";
//    } elseif ($division4 == 0 && $division400 == 0 && $division100 == 0) {
//        echo "bissextile";
//    }
//
//    else echo "common";
//
//
//    echo "$rest";
//}
//Is_bissextile();



//echo mb_strlen($input). "<br>";
//
//
//for ($index = 0; $index < mb_strlen($input); $index++) {
//    echo $input[$index] . "<br>";
//}
//function if_equals($input)
//{   $str1 = substr($input, 0, strlen($input)/2);
//    $str2 = substr($input, strlen($input)/2,strlen($input));
////    echo "$str1" . ' ' . "$str2";
//    if ($str1 == $str2   ) {
//        echo 'equals';
//    } elseif (strlen($input) !== 6) {
//        echo "invalid entry";
//    }
//    else echo "not equal";
//}
//if_equals($input);

//function determineTime($input)
//{
//    $hours = round($input / 30, 0);
//            if (strlen($input) !== 3) {
//        echo "invalid entry";
//    } else
//        echo "$hours";
//}
// determineTime($input);
function determineColor($input)
{
    if ($input%5 >= 0 && $input%5 < 3) {
        echo "green";
    } elseif ($input%5 >= 3 && $input%5 <= 5) {
        echo "red";

    }
}

determineColor($input);
