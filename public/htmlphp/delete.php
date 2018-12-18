<?php
require_once "IConn.php";
require_once "Conn.php";
require_once "IPessoa.php";
require_once "Pessoa.php";
require_once "ServicePessoa.php";

$id = filter_input(INPUT_GET, 'id');
var_dump($id);
$db = new Conn("db","app","root","rootPass");
$pessoa = new Pessoa();

$servicePessoa = new ServicePessoa($db, $pessoa);
$resposta = $servicePessoa->delete($id);
echo "<script>location.href='form.php';</script>"; 

?>