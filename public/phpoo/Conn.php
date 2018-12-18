<?php
require_once "IConn.php";

class Conn implements IConn
{

    private $dsn;
    private $user;
    private $pass;

    public function __construct($dsn, $user, $pass)
    {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect()
    {
        $servidor = "db";
        $user = "root";
        $pass = "rootPass";
        $banco = "app";    
        $db =  new \PDO("mysql:host={$servidor};dbname={$banco}",$user,$pass);
        return $db;
    }

}