<?php
$filename = 'C:\OSPanel\domains\localhost\Lab with class'. '\\' . 'log.txt';
var_dump($file1 = file_get_contents($filename));


//$handle = fopen($filename,'a');
//$text = 'Simple log text'.PHP_EOL;

//do {
//    echo fgets (  $handle,1) ;
//} while (!feof($handle));

//fwrite($handle, $text);
//
//fclose($handle);

file_put_contents($filename, 'banana'.PHP_EOL, FILE_APPEND);//includes fclose

