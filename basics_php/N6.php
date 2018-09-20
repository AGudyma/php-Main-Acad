<!--<form action="/N6.php">-->
<!--    Input: <input type="text" name="num1"><br>-->
<!--    Input: <input type="text" name="action"><br>-->
<!--    Input: <input type="text" name="num2"><br>-->
<!---->
<!--    <!--<!--    Last name: <input type="text" name="lname"><br>-->-->-->
<!--        <input type="submit" value="Submit">-->
<!--</form>-->

<?php

$mas = [1, 2, 3, 4, 5,];
unset($mas[2]);
//$mas[]= 'new1';
//$mas[]= 'new2';
var_export($mas);


$array1 = array(4, "+", 2);

function calculate($array1)
{
    switch ($array1[1]) {
        case "+":
            return $array1[0] + $array1[2];
        case "-":
            return $array1[0] - $array1[2];
        case "*":
            return $array1[0] * $array1[2];
        case "/":
            return $array1[0] / $array1[2];
    }

}

var_dump($array1);
calculate($array1);


define('GENDER_MALE', 'male');
define('GENDER_FEMALE', 'female');

$students = ['neddy' => ['name' => 'Ned Flanders',
    'age' => 42,
    'gender' => GENDER_MALE,
],
    'homy' => ['name' => 'Homer Simpson',
        'age' => 40,
        'gender' => GENDER_MALE
    ],
    'marge' => ['name' => 'Marge Simpson',
        'age' => 35,
        'gender' => GENDER_FEMALE
    ]
];

$name = 'homy';
if (isset($students[$name])) {

    $person = $students[$name];
    echo $person['name'] . PHP_EOL;
};

$month = ['jan' => 31,
    'feb' => 28,
    'mar'=> 31,
    'apr' => 30,
    'may' => 31,
    'jun' => 30,
    'jul' => 31,
    'aug' => 31,
    'sept' => 30,
    'oct' =>31,
    'nov'=>30,
    'dec'=>31,
    'etc'=> -1,
    'etc'=> -2];
echo $month['jan'];
$days = [1, 134, 2, 52, 1,];
$show = array_merge($month, $days);
var_dump($show);


$num = 1.0;
$counter = 0;
while ($num >=0) {
    echo $counter++;
    $num -= 0.1;
}

