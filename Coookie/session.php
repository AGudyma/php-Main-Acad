<?php
session_start();
$_SESSION['sessionName'] = 'Name';
$_SESSION['id'] = 1;
var_dump($_SESSION);


