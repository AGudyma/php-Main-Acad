<?php
/**
 * Created by PhpStorm.
 * User: napal
 * Date: 06.09.2018
 * Time: 21:03
 */

class Counter
{
    private static $counter = 0;//common variable for all instances of Counter class
    private $name;

    public  function __construct($name)
    {
        $this->name;
        self::$counter++;
    }

    public function showOnline()

    {
        echo self::$counter . PHP_EOL;
    }

    public function __destruct()
    {
        self::$counter--;
    }

    public static function save($name = null)
    {
        file_put_contents('log.txt', $name . ' ' . self::$counter . PHP_EOL , FILE_APPEND);
    }
}