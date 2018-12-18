<?php

class ServiceProduto
{
    private $db;
    private $produto;

    public function __construct(IConn $db, IProduto $produto)
    {
        $this->db = $db->connect();
        $this->produto = $produto;
    }

    public function list()
    {
        $query = "select * from produtos";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function save()
    {
        $query = "insert into produtos(name,descricao) values (:name,:descricao)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":name",$this->produto->getName());
        $stmt->bindValue(":descricao",$this->produto->getDescricao());
        $stmt->execute();
        return $this->db->lastInsertId();
    }

    public function update()
    {
        $query = "update produtos set name=?, descricao=? where id=?";
        $stmt = $this->db->prepare($query);
        
        $stmt->bindValue(1,$this->produto->getName());
        $stmt->bindValue(2,$this->produto->getDescricao());
        $stmt->bindValue(3,$this->produto->getId());
        $ret = $stmt->execute();
        return $ret;
    }

    public function delete(int $id)
    {
        $query = "delete from produtos where id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id",$id);

        $ret = $stmt->execute();
        return $ret;
    }

    public function findById($id)
    {
        $query = "select * from produtos where id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id",$id);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }



}