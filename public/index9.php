<?php
require_once("User.php");
require_once("ServiceUser.php");

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

$user = new User();
$service = new ServiceUser($mysqli, $user);

$user->setId("7");
$user->setNome("Roger");
$user->setEmail("roger@gmail.com");

echo "Ret: ".$service->delete($user->getId())."<br/>";

$ret = $service->list();
foreach ($ret as $value) {
    echo $value['id']."<br/>";
    echo $value['nome']."<br/>";
    echo $value['email']."<br/><hr>";

}

?>