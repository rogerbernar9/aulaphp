<?php
interface IPessoa
{
    public function getId();
    public function setId($id);
    public function getNome();
    public function setNome($nome);
    public function getEmail();
    public function setEmail($email);
    public function getIdade();
    public function setIdade($idade);
    public function getTelefone();
    public function setTelefone($telefone);
    public function getMensagem();
    public function setMensagem($mensagem);
}