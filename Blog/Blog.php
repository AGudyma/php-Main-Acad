<?php
/**
 * Created by PhpStorm.
 * User: napal
 * Date: 14.10.2018
 * Time: 21:21
 */

class Blog
{
    public $id;
    public $postName;
    public $post;

    public function __construct($id,$postName,$post)
    {
        $this->id = $id;
        $this->postName = $postName;
        $this->post = $post;

    }


    public function postShow()
    {
//        $conn = new PDO('mysql:host=localhost, dbname=labCatalogue', 'root', '');
        try {$conn = new PDO('mysql:host=localhost; dbname=labCatalogue', 'root', '');

            $sql = 'SELECT * FROM blog';


            foreach ($conn->query($sql) as $posts) {
                echo $posts["postName"] . '<br>' . $posts["post"].'<br>';
            }

        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }

    }

    public function postStore()
    {
        if (isset($_POST)) {
            try {

                $conn = new PDO('mysql:host=localhost; dbname=labCatalogue', 'root', '');

                $sql = 'INSERT INTO blog VALUES ('.
                    $this->getId().
                    ','.
                    '"'.
                    $this->getPostName().
                    '"'.
                    ','.
                    '"'.
                    $this->getPost().
                    '"'.
                    ')';
//                print $conn->lastInsertId($sql);
                $conn->query($sql);

                $conn = NULL;


            } catch (PDOException $exception) {
                echo $exception;
            }
        }
        else echo 'error';

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPostName()
    {
        return $this->postName;
    }

    /**
     * @param mixed $postName
     */
    public function setPostName($postName)
    {
        $this->postName = $postName;
    }

    /**
     * @return mixed
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @param mixed $post
     */
    public function setPost($post)
    {
        $this->post = $post;
    }

}