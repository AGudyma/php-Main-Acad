<?php
include_once 'Counter.php';
$counter1 = new Counter('c1');
$counter2 = new Counter('c2');
$counter3 = new Counter('c3');
$counter4 = new Counter('c4');
$counter5 = new Counter('c5');

$counter1->showOnline();
unset($counter3);
$counter2->showOnline();
for ($i=0; $i<24;$i++) {
    Counter::save('stat_file');

}


