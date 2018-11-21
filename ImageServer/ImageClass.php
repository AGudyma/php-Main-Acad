<?php
/**
 * Created by PhpStorm.
 * User: napal
 * Date: 14.10.2018
 * Time: 18:44
 */

class ImageClass
{
    public $serverURl;
    public function imageStore()
    {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        var_dump($check);
        try {
            if (!empty($_FILES['fileToUpload'])) {
                $pdo = new PDO('mysql:localhost; dbname=labCatalogue', 'root', '');
//                $sql_query = 'INSERT INTO image VALUES (1,Image_name,image);
//                $pdo->query($sql_query);
//                $pdo = null;
            }
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function imageDelete()
    {
        
    }

    public function imageShow()
    {
        try {$pdo = new PDO('mysql:localhost; dbname=labCatalogue', 'root', '');
            $sql_query = 'SELECT * FROM image';
            foreach ($pdo->query($sql_query) as $row){
                echo $row[0];
            };
            $pdo = null;

        } catch (Exception $exception) {
            echo $exception;
        }
    }

    public function showAll()
    {
        try {$pdo = new PDO('mysql:localhost; dbname=image', 'root', '');
            $sql_query = 'SELECT image FROM image';
            foreach ($pdo->query($sql_query) as $row){
                echo $row[0];
            };
            $pdo = null;

        } catch (Exception $exception) {
            echo $exception;
        }
    }
}