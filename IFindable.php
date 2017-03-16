<?php

interface IFindable
{
    public function getTable();

    public function getWhere();

    public function getColumns();
}