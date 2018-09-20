<?php

include_once 'Workers.php';
//$workerObj1 = new Workers();
//$workerObj2 = new Workers();
//$workerObj1->showWorkerInfo('Ivan', 25, 2000);
//$workerObj2->showWorkerInfo('Vasya', 26, 2000);
//echo $workerObj1->salarySummary('Ivan', 25, 2000) + $workerObj2->salarySummary('Vasya', 26, 2000);
//$workerObj1->setSalary(1500);
//$workerObj2->setSalary(2000);
//$workerObj1->setAge(52);
//$workerObj2->setAge(25);
//echo $workerObj1->getAge() + $workerObj2->getAge();
//echo $workerObj1->getSalary() + $workerObj2->getSalary();
$workerObj3 = new Workers('Sonya', 32, 2500);
print $workerObj3->ageSalaryMult();
