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

$sql = "select u.id, u.nome, u.email from usuario u";
$query = $mysqli->query($sql);

echo    "<table style='width:40%;border: 1px solid black;'>";
echo    "<tr>";
echo    "<th>ID</th>";
echo    "<th>Nome</th>";
echo    "<th>E-mail</th>";
echo    "</tr>";


while($data = $query->fetch_assoc())   {
    echo "<tr>";
    echo "<td>".$data['id']."</td>";
    echo "<td>".$data['nome']."</td>";
    echo "<td>".$data['email']."</td>";
    echo "</tr>";

}

echo    "</table>";




mysqli_close($mysqli);

