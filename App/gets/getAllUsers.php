<?php

require "App/abstracts/AbstractGet.php";

class getAllUsers extends AbstractGet
{

    public function getTable()
    {
        return "usuario";
    }
}