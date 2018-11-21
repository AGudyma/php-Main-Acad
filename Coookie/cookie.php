<?php
//setcookie('PageCounter');//deletes cookies entity

$counter = $_COOKIE['PageCounter']?:0;
$userInfo = ['name' => 'john', 'age' => '33', 'job' => 'driver',
];

$serInfo = serialize($userInfo);
setcookie('userInfo', $serInfo);
setcookie('rawInfo', $userInfo['name']);//only string data type

setcookie('PageCounter', ++$counter, time()+3);//

var_dump($_COOKIE['PageCounter']);
var_dump($_COOKIE['userInfo']);
var_dump(unserialize($_COOKIE['userInfo']));