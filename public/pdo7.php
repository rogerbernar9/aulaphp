<?php

$servidor = "db";
$user = "root";
$pass = "rootPass";
$db = "app";


try {
    $conn = new PDO('mysql:host='.$servidor.';dbname=app', $user, $pass);

    $query = "select * from produtos";
    
    $stmt = $conn->query($query);
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //echo $list[0]->name;
    print_r($list);


} catch(Exception $e)   {
    echo "Error! Message: ".$e->getMessage(). " Code: ".$e->getCode();
}

