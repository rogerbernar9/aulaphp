<?php

$servidor = "db";
$user = "root";
$pass = "rootPass";
$db = "app";


try {
    $conn = new PDO('mysql:host='.$servidor.';dbname=app', $user, $pass);

    $query = "select * from produtos order by id desc";
    
    $stmt = $conn->query($query);
    $list = $stmt->fetch(PDO::FETCH_OBJ);
    echo $list->name;
    //print_r($list);


} catch(Exception $e)   {
    echo "Error! Message: ".$e->getMessage(). " Code: ".$e->getCode();
}

