<?php
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


$stmt = $mysqli->stmt_init();
$stmt -> prepare("select u.id, u.nome, u.email from usuario u where u.id= ? and u.nome=?");
$stmt -> bind_param("is", $_GET["id"], $_GET["nome"]);
$stmt -> execute();
$stmt -> bind_result($id, $nome, $email);
$stmt -> fetch();


echo "id: ".$id." <br/>";

echo "name: ".$nome." <br/>";
echo "email: ".$email." <br/>";



mysqli_close($mysqli);