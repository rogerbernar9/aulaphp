<?php
require_once "IConn.php";

class Conn implements IConn
{
    private $host;
    private $db;
    private $user;
    private $pass;

    public function __construct($host, $db, $user, $pass)
    {
        $this->host=$host;
        $this->db=$db;
        $this->user=$user;
        $this->pass=$pass;
    }

    public function connect()
    {
        try {
            return new \PDO(
                "mysql:host={$this->host};dbname={$this->db}", 
                $this->user, 
                $this->pass
            );
        
        } catch(\PDOException $e)   {
            echo "Error! Message: ".$e->getMessage(). " Code: ".$e->getCode();
            exit;
        }
    }

}