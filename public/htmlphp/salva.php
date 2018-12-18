<?php
require_once "IConn.php";
require_once "Conn.php";
require_once "IPessoa.php";
require_once "Pessoa.php";
require_once "ServicePessoa.php";

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');
$fone = filter_input(INPUT_POST, 'fone');
$email = filter_input(INPUT_POST, 'email');
$msg = filter_input(INPUT_POST, 'mensagem');

//var_dump($nome);
//var_dump($idade);
//var_dump($fone);
//var_dump($email);
//var_dump($msg);

//conexão com o banco
$db = new Conn("db","app","root","rootPass");

//instancia classe
$pessoa = new Pessoa();
$pessoa->setId($id);
$pessoa->setNome($nome);
$pessoa->setIdade($idade);
$pessoa->setTelefone($fone);
$pessoa->setEmail($email);
$pessoa->setMensagem($msg);
//echo "<script>alert('".$pessoa->getId()."');</script>";

//instância o serviço e salva
$servicePessoa = new ServicePessoa($db, $pessoa);
//echo "<script>alert('".$pessoa->getId()."');</script>";
//echo "<script>alert('".$id."');</script>";

if(empty($id)) {
    $resposta = $servicePessoa->save();
//    echo "<script>alert('salvo');</script>";
} else {
    $resposta = $servicePessoa->update();
//    echo "<script>alert('update');</script>";
}

$lista = $servicePessoa->list();

//header("Location: form.php");
if($resposta > 0)   {
    echo "<script>alert('Pessoa cadastrada com sucesso!');location.href='form.php';</script>"; 
} else  {
    echo "<script>alert('Erro ao cadastrar!');location.href='form.php';</script>"; 

}


?>