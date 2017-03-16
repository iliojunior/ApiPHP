<?php

require "IDatabase.php";

abstract class AbstractGet implements IDatabase
{
    public function getSQL()
    {
        $sql = "SELECT " . $this->getColumns();
        $sql .= " FROM " . $this->getTable();

        if (!empty($this->getWhereClause()))
            $sql .= " WHERE " . $this->getWhereClause();
        if (!empty($this->getLimit()))
            $sql .= " LIMIT " . $this->getLimit();

        return $sql;
    }

    public function getColumns()
    {
        return "*";
    }

    public abstract function getTable();

    public function getWhereClause()
    {
        return "";
    }

    public function getLimit()
    {
        return "";
    }

    public function getWhereArgs()
    {
        return array();
    }
}