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
$resposta = $servicePessoa->findById($id);
$pessoa->setId($resposta['id']);
$pessoa->setNome($resposta['nome']);
$pessoa->setEmail($resposta['email']);
$pessoa->setMensagem($resposta['mensagem']);
$pessoa->setTelefone($resposta['telefone']);
$pessoa->setIdade($resposta['idade']);

$nome = $resposta['nome'];

//echo "<script>alert('".$pessoa->getNome()."');</script>";
//echo "<script>alert('".$pessoa->getIdade()."');</script>";
//echo "<script>alert('".$pessoa->getEmail()."');</script>";
//echo "<script>alert('".$pessoa->getTelefone()."');</script>";


//echo "<script>alert('".$resposta['email']."');</script>";
//echo "<script>alert('".$resposta['idade']."');</script>";
//echo "<script>alert('".$pessoa->getId()."');</script>";
echo "<script>location.href='form.php?id=".$id."&nome=".$pessoa->getNome()."&email=".$pessoa->getEmail()."&mensagem=".$pessoa->getMensagem()."&telefone=".$pessoa->getTelefone()."&idade=".$pessoa->getIdade()."';</script>"; 

?>