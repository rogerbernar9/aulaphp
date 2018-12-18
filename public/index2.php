<?php
$servidor = "db";
$usuario = "root";
$pass = "rootPass";
$db = "app";

$mysqli = mysqli_connect($servidor, $usuario, $pass, $db);

if(!$mysqli)    {
    echo "error: falha ao conectar-se com o bd mysql<br/>";
    echo "debugging error:<br/>". mysqli_connect_error() . PHP_EOL;
    exit;
}
echo "muito bom, você se conectou ao banco" . PHP_EOL;
mysqli_close($mysqli);

