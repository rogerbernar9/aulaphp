<?php

class Conn implements IConn
{
    private $host;
    private $db;
    private $user;
    private $pass;

    public function __construct($host, $dbname, $user, $pass)
    {
        $this->host=$host;
        $this->dbname=$dbname;
        $this->user=$user;
        $this->pass=$pass;
    }

    public function connect()
    {
        //$servidor = "db";
        //$user = "root";
        //$pass = "rootPass";
        //$db = "app";

        try {
            return new \PDO(
                "mysql:host={$this->host};dbname={$this->dbname}", 
                $this->user, 
                $this->pass
            );
        
        
        } catch(\PDOException $e)   {
            echo "Error! Message: ".$e->getMessage(). " Code: ".$e->getCode();
            exit;
        }
    }
}