<?php
$filename = 'empl.csv';
//$handel = fopen($filename, 'w');
//$empl = [['First', 'second','age','profession'],['First', 'second','age','php Dev'],['First', 'second','age','profession']];
//
//fwrite($handel, "sep=".PHP_EOL);//for win Excel delimitation
//foreach ($empl as $row) {
//    fputcsv($handel, $row);
//}


$handler = fopen($filename, 'r');
while ($row = fgetcsv($handler)) {
    var_dump($row);
}
fclose($handler);