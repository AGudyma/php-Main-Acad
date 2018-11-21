<?php
/**
 * Created by PhpStorm.
 * User: napal
 * Date: 01.10.2018
 * Time: 00:14
 */

class ImageDemonstrator
{
    public $fileList;
    public function demonstrate()
    {
      $fileList = scandir('C:\ospanel\domains\localhost\File_Homework\NewRepository', SCANDIR_SORT_DESCENDING);
//        var_dump($fileList);

        return $this->fileList;
}

    public function imageList()
    {
        $fileList = scandir('C:\ospanel\domains\localhost\File_Homework\NewRepository', SCANDIR_SORT_DESCENDING);

    for ($i = 0; $i < sizeof($fileList);++$i){

         $fileExtention = explode(".", $fileList[$i]);

    if ($fileExtention[1]  == 'jpg') {
        echo '<a href="image.php">'.$fileList[$i].'</a>'. $fileList[$i].'<br>'. '<img src="'.$fileList[$i].'" alt="'.$fileList[$i].'" style="width:300px;height:200px;">'.'<br>';
            }
    }
    }

}