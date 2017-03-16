<?php

require "AbstractGet.php";

class getAllUsers extends AbstractGet
{

    public function getTable()
    {
        return "usuario";
    }
}