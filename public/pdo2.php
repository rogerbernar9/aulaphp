<?php

$servidor = "db";
$user = "root";
$pass = "rootPass";
$db = "app";


try {
    $dbh = new PDO('mysql:host='.$servidor.';dbname=app', $user, $pass);
    var_dump($dbh);
    echo "sucesso de conexão";
} catch(\PDOException $e)   {
    echo "Error! Message: ".$e->getMessage(). " Code: ".$e->getCode();
} finally   {
    echo " cheguei no finally. ";
}

