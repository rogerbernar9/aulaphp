<?php

$servidor = "db";
$user = "root";
$pass = "rootPass";
$db = "app";


try {
    $conn = new PDO('mysql:host='.$servidor.';dbname=app', $user, $pass);

    $query = "insert into produtos (name, descricao) values('ebook','learn php 2')";
    
    $ret = $conn->exec($query);
    print_r($ret);


} catch(Exception $e)   {
    echo "Error! Message: ".$e->getMessage(). " Code: ".$e->getCode();
}

