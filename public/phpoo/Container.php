<?php

class Container
{
    public static function getProduto()
    {
        return new Produto(self::getConn());
    }

    public static function getConn()
    {
        return new Conn("mysql:host=db;dbname=app","root","rootPass");
    }
}