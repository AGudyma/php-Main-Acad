<?php
namespace Abst;
function localAutoload($className)
{

    $className = str_replace('Mainacad\\', '' , $className);
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    include_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';

}

spl_autoload_register('localAutoload');


$userList = [];
$userList [] = new \MainAcad\Abst\User();
$userList [] = new \MainAcad\Abst\Admin();
$userList [] = new \MainAcad\Abst\SuperAdmin();

foreach ($userList as $user) {
        var_dump($userList->getPermitions());
}