<?php
include_once 'Tag.php';
$tag = new Tag('a');
$tag->setText('ссылка');
$tag->setAttr1('href');
$tag->setAttr2('index.html');
 $tag->show();

$tag2 = new Tag();
$tag2->setText('ссылка')->setAttr();
//$tag->setText('ссылка')->setAttr('href')->show();
//$tag->setText('ссылка')->setAttr('href', 'index.html')->show();
//Выведет <a href="index.html">ссылка</a>