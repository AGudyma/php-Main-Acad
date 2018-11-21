<?php
$file1 = __DIR__;//local dir
//var_dump($file1);
$file2 =__FILE__;
//var_dump($file2);
$files = [__FILE__, __DIR__, DIRECTORY_SEPARATOR, 'test_oop.php'];
foreach ($files as $file) {

    var_dump($file, filesize($file));
}
var_dump(fileatime($file1));
var_dump(is_file($file1));
var_dump(is_dir(__DIR__));
