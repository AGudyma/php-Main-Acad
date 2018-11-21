<?php
/**
 * Created by PhpStorm.
 * User: napal
 * Date: 01.10.2018
 * Time: 19:00
 */

class ImageDelete
{
    public $fileName;
    public function deleteImage($fileName)
    {
        $fh = fopen('test.html', 'a');
        fwrite($fh, '<h1>Hello world!</h1>');
        fclose($fh);

        unlink('test.html');
        echo 'Image deleted';
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $fileName;
    }

}