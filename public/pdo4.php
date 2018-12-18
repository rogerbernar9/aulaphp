<?php

$servidor = "db";
$user = "root";
$pass = "rootPass";
$db = "app";


try {
    $pdo = new \PDO('mysql:host='.$servidor.';dbname=app', $user, $pass);
    
    $query = "select * from produtos";
    $stmt = $conn->query($query);
    $list = $stmt->fetchAll();
    print_r($list);

} catch(\PDOException $e)   {
    echo "Error! Message: ".$e->getMessage(). " Code: ".$e->getCode();
}

