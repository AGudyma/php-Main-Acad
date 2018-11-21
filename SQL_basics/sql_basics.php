
<?php
include_once 'Test.php';
//$mysql_proc = mysqli_connect('localhost', 'root', '', 'labCatalogue');
//var_dump($mysql_proc);

//try {
//    $mysql_oop = new mysqli('localhost', 'root', '', 'labCatalogue');
//} catch (PDOException $e) {
//    $e->getMessage();
//}
//var_dump($mysql_oop);
try {
    $pdo = new PDO('mysql:host=localhost; dbname=labCatalogue', 'root', '');

    $selectQuery = 'SELECT * FROM test WHERE  id=:test_id';

    $_GET['id'] = "2'; DELETE FROM test;/*";
    $id = $_GET['id'];
    $str = "SELECT * FROM test WHERE  id ='${id}'";
    $res = $pdo->query($str);
    var_dump($res);
    var_dump($res->fetchAll());
    $pdo->query($selectQuery);

//    $params = ['test_id' => 3,
//    ];
//    $query->execute($params);
//    $query->setFetchMode(PDO::FETCH_CLASS, 'Test');

//    while ($user = $query->fetch()) {
//        echo $user->printInfo();
//    }


//    var_dump($query->fetchAll());
    $pdo = null;
} catch (PDOException $e) {
    echo $e->getMessage();
}


