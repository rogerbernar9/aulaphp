<?php

class Produto implements IProduto
{
    private $id;
    private $name;
    private $descricao;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id=$id;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name=$name;
        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao=$descricao;
        return $this;
    }





}