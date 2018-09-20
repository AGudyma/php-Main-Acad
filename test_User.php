<?php
namespace Abst;
function localAutoload($className)
{
    include_once __DIR__ . DIRECTORY_SEPARATOR.
    $className . '.php';
}

spl_autoload_register('localAutoload');


$userList = [];
$userList [] = new User();
$userList [] = new Admin();
$userList [] = new SuperAdmin();

foreach ($userList as $user) {
        var_dump($userList->getPermitions());
}