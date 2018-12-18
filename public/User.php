<?php

class User
{

    private $table = "usuario";
    private $id;
    private $nome;
    private $email;


    public function getTable()
    {
        return $this->table;
    }

    public function setTable($table)
    {
        $this->table=$table;
        return $this;
    }

    
    public function getDb()
    {
        return $this->db;
    }

    public function setDb($db)
    {
        $this->db = $db;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }


}

?>