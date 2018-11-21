<?php
//var_dump($_FILES);
if (!empty($_FILES['image'])) {
    move_uploaded_file($_FILES['image']["tmp_name"], __DIR__ . DIRECTORY_SEPARATOR . $_FILES['image']['name']);
}

header('Location: http://localhost/File/form_upload.html');
exit();

