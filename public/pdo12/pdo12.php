<?php

require_once "IConn.php";
require_once "Conn.php";
require_once "IProduto.php";
require_once "Produto.php";
require_once "ServiceProduto.php";

        //$servidor = "db";
        //$user = "root";
        //$pass = "rootPass";
        //$db = "app";

$db = new Conn("db","app","root","rootPass");

$produto = new Produto();
$produto->setId(3);
$produto->setName("bolo33");
$produto->setDescricao("bolo de arroz33");



$service = new ServiceProduto($db, $produto);
print_r($service->findById(4));
//$service->save();

//print_r($service->delete(1));


//print_r($service->update());
