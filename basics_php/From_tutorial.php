<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
define ('ARR_LEN', 4);
include "testFunction.php";
?>
<form>
<!--    --><?php
//    for ($i = 0; $i <3; $i++) {
//        for ($j = 0 ; $j<3;$j++) {
//            echo   "<input type='text' name='arr[]'>";
//        }
//        echo "<br>" ;
//    }
//    echo "<input type='submit' value='Submit'>" . PHP_EOL;
//    ?>
    <?php
    $array = $_GET['arr'];
    for ($i = 0; $i <ARR_LEN; $i++) {
        for ($j = 0 ; $j<ARR_LEN;$j++) {
            $val = $array[$i * ARR_LEN + $j];

            echo   "<input type='text' name='arr[]' value='$val'>";
        }
        echo "<br>" ;
    }
    echo "<input type='submit' value='Submit'>" . PHP_EOL;
    ?>
</form>

<?php
//var_dump($_GET);
$arr = $_GET['arr'];
echo maxInArray($arr);
?>

</table>
</body>
