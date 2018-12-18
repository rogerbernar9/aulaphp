<?php
$mysqli = new mysqli("127.0.0.1","root","root","test");

if(!$mysqli)    {
    echo "error: falha ao conectar-se com o bd mysql";
    echo "debugging error". mysqli_connect_error() . PHP_EOL;
    exit;
}
echo "sucesso" . PHP_EOL;
mysqli_close($mysqli);

?>