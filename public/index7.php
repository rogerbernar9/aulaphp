<?php
require_once("User.php");

$servidor = "db";
$usuario = "root";
$pass = "rootPass";
$db = "app";

@$mysqli = mysqli_connect($servidor, $usuario, $pass, $db);

if(!$mysqli)    {
    echo "error: falha ao conectar-se com o bd mysql<br/>";
    echo "debugging error:<br/>". mysqli_connect_error() . PHP_EOL;
    exit;
}


$user = new User($mysqli);
$user->setNome("Adalberto");
$user->setEmail("adalberto@gmail.com");
$ret = $user -> list();

foreach ($ret as $value) {
    echo $value['id']."<br/>";
    echo $value['nome']."<br/>";
    echo $value['email']."<br/><hr>";

}

?>