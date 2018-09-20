<?php
/**
 * Created by PhpStorm.
 * User: napal
 * Date: 09.09.2018
 * Time: 22:32
 */

class Log
{
    public $defaultLogEntry;
    public static $entryNumber = 1;
    public static $lastEntryNumber;

    /**
     * Log constructor.
     * @param $defaultLogEntry
     */
    public function __construct($defaultLogEntry)
    {
        $this->defaultLogEntry = $defaultLogEntry;
    }

    /**
     * Log constructor.
     * @param $entryNumber
     */


    public function saveToLog()
    {

        file_put_contents('log.txt', self::$entryNumber . ' ' . "default" . PHP_EOL, FILE_APPEND);
    }


    public static function showLastEntry($lastEntryNumber)
    {
        $logArray = file('log.txt');

//        foreach (range(sizeof($logArray) - $lastEntryNumber, sizeof($logArray)) as $lineNumber) {
//            echo $logArray[$lineNumber];
//        }
        for ($i = sizeof($logArray) - $lastEntryNumber+1; $i<=sizeof($logArray);$i++ ) {

            echo $logArray[$i-1];
        }

    }
}