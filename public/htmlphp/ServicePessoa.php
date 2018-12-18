<?php

class ServicePessoa
{
    private $db;
    private $pessoa;

    public function __construct(IConn $db, IPessoa $pessoa)
    {
        $this->db = $db->connect();
        $this->pessoa = $pessoa;
    }

    public function list()
    {
        $query = "select p.id, p.nome, p.email, p.idade, p.mensagem, p.telefone from pessoa p";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function save()
    {
        $query = "insert into pessoa(nome,email,idade,mensagem,telefone) values (:nome,:email,:idade,:mensagem,:telefone)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":nome",$this->pessoa->getNome());
        $stmt->bindValue(":email",$this->pessoa->getEmail());
        $stmt->bindValue(":idade",$this->pessoa->getIdade());
        $stmt->bindValue(":mensagem",$this->pessoa->getMensagem());
        $stmt->bindValue(":telefone",$this->pessoa->getTelefone());

        $stmt->execute();
        return $this->db->lastInsertId();
    }

    public function update()
    {
        $query = "update pessoa set nome=?, email=?, idade=?, mensagem=?, telefone=? where id=?";
        $stmt = $this->db->prepare($query);
        
        $stmt->bindValue(1,$this->pessoa->getNome());
        $stmt->bindValue(2,$this->pessoa->getEmail());
        $stmt->bindValue(3,$this->pessoa->getIdade());
        $stmt->bindValue(4,$this->pessoa->getMensagem());
        $stmt->bindValue(5,$this->pessoa->getTelefone());
        $stmt->bindValue(6,$this->pessoa->getId());

        $ret = $stmt->execute();
        return $ret;
    }

    public function delete(int $id)
    {
        $query = "delete from pessoa where id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id",$id);

        $ret = $stmt->execute();
        return $ret;
    }

    public function findById($id)
    {
        $query = "select p.nome, p.email, p.idade, p.mensagem, p.telefone from pessoa p where p.id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id",$id);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

}
