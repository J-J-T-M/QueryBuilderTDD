<?php

namespace app\database;

class Select
{
    private String $sql;

    public function query(String $query)
    {
        $this->sql = $query;

        return $this;
    }

    public function get()
    {
        return $this->sql;
    }
}
