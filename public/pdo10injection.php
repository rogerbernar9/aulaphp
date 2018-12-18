<?php

$servidor = "db";
$user = "root";
$pass = "rootPass";
$db = "app";


try {
    $conn = new PDO('mysql:host='.$servidor.';dbname=app', $user, $pass);

    $query = "select * from produtos where id={$_GET['id']}";
    

    foreach ($conn -> query($query) as $product) {
        echo $product['id'];
        echo "<br/>";
        echo $product['name'];
        echo "<br/>";
        echo $product['descricao'];
        echo "<br/>";

    }


} catch(\PDOException $e)   {
    echo "Error! Message: ".$e->getMessage(). " Code: ".$e->getCode();
}