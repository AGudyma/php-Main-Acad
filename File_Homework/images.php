<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>My first PHP page</h1>

<?php
include_once 'ImageDemonstrator.php';
//echo "Hello World!";
//$file = file_get_contents('./text.txt', FILE_USE_INCLUDE_PATH);
//echo $file;

$files = new ImageDemonstrator();
$files->demonstrate();
$files->imageList();
//var_dump($fileList);

?>

</body>
</html>