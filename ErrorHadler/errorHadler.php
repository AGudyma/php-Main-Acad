<?php
set_error_handler(function () {
    throw new \Exception('Error');
});
register_shutdown_function();


try {
    $arr = [];
    $arr['a'] = 'a';
    echo $arr['a'];
    echo $arr['b'];
} catch (Exception $e) {
    var_dump($e->getMessage());
}