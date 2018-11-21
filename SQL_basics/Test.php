<?php
/**
 * Created by PhpStorm.
 * User: napal
 * Date: 18.10.2018
 * Time: 20:13
 */

class Test
{
    public $id;
    public $name;
    public $salary;

    public function info()
    {
        return sprintf('User id:%s, User name:%s, User salary:%i',$this->id, $this->name, $this->salary);
    }

    public function printInfo()
    {
        $this->info();
    }
}