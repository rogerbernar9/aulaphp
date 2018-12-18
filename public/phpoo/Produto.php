<?php

class Produto
{
    private $db;

    public function __construct(IConn $db)
    {
        $this->db = $db->connect();
    }


    public function list()
    {
        $query = "select * from produtos";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


}