<?php
require_once "IPessoa.php";

class Pessoa implements IPessoa
{
    private $id;
    private $nome;
    private $email;
    private $telefone;
    private $idade;
    private $mensagem;


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

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getIdade()  {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    public function getMensagem()   {
        return $this->mensagem;
    }

    public function setMensagem($mensagem)  {
        $this->mensagem= $mensagem;
        return $this;
    }

    public function getTelefone()   {
        return $this->telefone;
    }

    public function setTelefone($telefone)  {
        $this->telefone=$telefone;
        return $this;
    }

}