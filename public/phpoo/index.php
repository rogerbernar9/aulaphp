<?php

require_once "Produto.php";
require_once "Conn.php";
require_once "IConn.php";
require_once "Container.php";


    $db =  Container::getConn();
    $produto = Container::getProduto();;

    $list = $produto->list();

    var_dump($list);



