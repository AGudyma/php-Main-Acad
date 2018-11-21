<?php
include_once 'FileUploader.php';
include_once 'ImageDelete.php';
include_once 'ImageDemonstrator.php';
//var_dump($_FILES);
//if (!empty($_FILES['fileToUpload'])) {
//
//   move_uploaded_file($_FILES['fileToUpload']['tmp_name'], __DIR__ . DIRECTORY_SEPARATOR . $_FILES['fileToUpload']['name']);
//}
//
//header('Location: http://localhost/File_Homework/file_form.html');
$file = new FileUploader();
$file->imageUpload();





exit();