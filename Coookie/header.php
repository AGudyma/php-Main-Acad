
<?php
function validate($user, $pw)
{
    $auth = ['admin' => 'admin', 'user' => 'user',
    ];
    return isset($auth[$user]) && $auth[$user] == $pw;

    if (!validate($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])) {
        echo 'false';
    }
    else "<h1>Hello, {$_SERVER['PHP_AUTH_USER']}</h1>";
}