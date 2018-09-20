<?php
/**
 * Created by PhpStorm.
 * User: napal
 * Date: 06.09.2018
 * Time: 19:45
 */

class Person
{
    public $name;
    private $isLogged = false;

    public function login()
    {
        $this->isLogged = true;
        echo "MEMBER LOGGED".PHP_EOL;
    }

    public function logout()
    {
        $this->isLogged = false;
        echo "MEMBER LOGGED OUT".PHP_EOL;

    }

}