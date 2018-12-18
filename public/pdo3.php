<?php

$servidor = "db";
$user = "root";
$pass = "rootPass";
$db = "app";


try {
    $pdo = new PDO('mysql:host='.$servidor.';dbname=app', $user, $pass);
    
    $stmt = $pdo->prepare("insert into produtos (name,desc) values (?, ?)");
    //$stmt = $pdo->prepare("select * from produtos");
    $stmt->execute([
        'novo1',
        'novo33',
    ]);
    //$stmt->execute();
    
    //var_dump($stmt->fetchAll());

} catch(Exception $e)   {
    echo "Error! Message: ".$e->getMessage(). " Code: ".$e->getCode();
}

