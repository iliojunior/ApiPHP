<?php

require "headers.php";
require "Conexao.class.php";
require "getAllUsers.php";

class API
{

    public function get(AbstractGet $abstractGet)
    {
        $result = Conexao::getInstance()->prepare($abstractGet->getSQL());
        if (!empty($abstractGet->getWhereClause()))
            $result->execute($abstractGet->getWhereArgs());
        else
            $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}

$api = new API();

$result = $api->get(new getAllUsers());

var_dump($result);