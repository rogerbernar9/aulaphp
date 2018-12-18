<?php

interface IProduto
{
    public function getId();
    public function setId($id);
    public function getName();
    public function setName($name);
    public function getDescricao();
    public function setDescricao($descricao);
}