<?php
include 'Paginator.php';
$current = $_GET['page']?:1;
//if page = 0 then current = 1
$link_template = 'http://localhost/page.php';
$totalItem = 100;
$pager = new Paginator($totalItem,$current,$link_template );
$pager->draw();