<?php
/**
 * Created by PhpStorm.
 * User: napal
 * Date: 06.09.2018
 * Time: 19:49
 */
include_once 'Person.php';
class Admin extends Person
{
    public function banPerson()
    {
        echo "PERSON BANNED";
    }

    public function login()
    {
        echo date('Y m d h:i:s');
       parent::login(); // TODO: Change the autogenerated stub
    }

    public function logout()
    {
        echo date('Y m d h:i:s');
        parent::logout(); // TODO: Change the autogenerated stub
    }
}