<?php
function getNum ()
{
    $num = mt_rand(-5, 5);
    if ($num<= 0) {
    throw new Exception('Number ' . $num . ' is invalid'. PHP_EOL);
    }
    return $num;
}

try {
    for ($i = 0; $i < 5; $i++) {
        try {
            echo getNum() . PHP_EOL;
        } catch (Exception $e) {
            echo $e->getMessage() . PHP_EOL;
            throw $e;
        }
    }
} catch (Exception $e) {
    echo 'Caught';
}