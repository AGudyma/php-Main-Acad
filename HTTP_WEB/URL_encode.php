<?php
$queryString = 'name = Ivanov Ivan Ivanovich&question="Как тебя зовут?"';
echo $encoded = urlencode($queryString) . PHP_EOL;
echo urldecode($encoded);