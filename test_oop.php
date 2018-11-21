<?php
include_once 'Abst/inteface/ILoggeble.php';
try {
    throw new Exception('Some eeroe');

}
catch (Exception $ex) {
    echo $ex->getMessage();
} finally {
    echo 'Finish';
}

interface foo
{

}
class_alias('foo', 'boo');
echo interface_exists('boo') ? 'yes' : 'no';
echo (5>1) ? 'no': 'yes' ;