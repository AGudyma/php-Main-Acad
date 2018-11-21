<?php
/**
 * Created by PhpStorm.
 * User: napal
 * Date: 30.09.2018
 * Time: 21:57
 */

class FileUploader
{
        public   $imageRepository =__DIR__;

    /**
     * @param string $imageRepository
     */
    public  function imageUpload()
    {
        if (!empty($_FILES['fileToUpload'])) {
                        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $this->imageRepository . DIRECTORY_SEPARATOR .'NewRepository'. DIRECTORY_SEPARATOR .$_FILES['fileToUpload']['name']);
        }

        header('Location: http://localhost/File_Homework/file_form.php');
        echo 'image uploaded';
    }



}