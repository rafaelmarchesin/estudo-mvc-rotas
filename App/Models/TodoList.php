<?php

namespace App\Models;

use App\Conn;

class TodoList
{
    private $db;

    public function __construct()
    {
        $this->db = new Conn;
        return $this->db;
    }
}