<?php
/**
 * Created by PhpStorm.
 * User: napal
 * Date: 17.09.2018
 * Time: 19:18
 */
namespace Abst;
abstract class BaseUser
{
    public function login()
    {
        echo "Logged in" . PHP_EOL;
    }

    public function logout()
    {
        echo "Logged out" . PHP_EOL;
    }

    abstract public function getPermitions();

}