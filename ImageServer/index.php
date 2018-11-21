<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<br>
<form action="index.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<ul>
    <?php
    include_once 'ImageClass.php';
    $allFiles = new ImageClass();
    $allFiles->showAll();

    ?>
    <a href="image.php">Image list</a>
</ul>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: napal
 * Date: 14.10.2018
 * Time: 18:43
 */