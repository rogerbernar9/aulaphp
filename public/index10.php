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
$user->setId("7");
$user->setNome("Roger");
$user->setEmail("roger@gmail.com");

$serviceUser = new ServiceUser($mysqli,$user);
$ret = $serviceUser->delete(10);
//echo $serviceUser->insert();
//echo "Ret: ".$serviceUser->update()."<br/>";

//$ret = $serviceUser->list();
/*
foreach ($ret as $value) {
    echo $value['id']."<br/>";
    echo $value['nome']."<br/>";
    echo $value['email']."<br/><hr>";
}
*/
//$ret = $serviceUser->find(7);
//echo $ret['id']."<br/>";
//echo $ret['nome']."<br/>";
//echo $ret['email']."<br/><hr>";


mysqli_close($mysqli);