<?php

$servidor = "db";
$user = "root";
$pass = "rootPass";
$db = "app";


try {
    $conn = new PDO('mysql:host='.$servidor.';dbname=app', $user, $pass);

    $query = "select * from produtos where id=:id";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();

    print_r($stmt->fetchAll());


} catch(\PDOException $e)   {
    echo "Error! Message: ".$e->getMessage(). " Code: ".$e->getCode();
}